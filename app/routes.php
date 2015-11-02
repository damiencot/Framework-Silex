<?php

use Symfony\Component\HttpFoundation\Request;
use M2L\Domain\Salle;
use M2L\Form\Type\SalleType;

// Home page
$app->get('/', function () use ($app) {
    $reservations = $app['dao.reservation']->findAll();
    return $app['twig']->render('index.html.twig', array('reservations' => $reservations));
})->bind('home');

/* Reservation details with salles
$app->get('/reservation/{id}', function ($id) use ($app) {
    $reservation = $app['dao.reservation']->find($id);
    $salles = $app['dao.salle']->findAllByReservation($id);
    return $app['twig']->render('reservation.html.twig', array('reservation' => $reservation, 'salles' => $salles));
})->bind('reservation');
*/
$app->match('/reservation/{id}', function ($id, Request $request) use ($app) {
    $reservation = $app['dao.reservation']->find($id);
    $salleFormView = null;
    if ($app['security.authorization_checker']->isGranted('IS_AUTHENTICATED_FULLY')) {
        // A user is fully authenticated : he can add salles
        $salle = new Salle();
        $salle->setReservation($reservation);
        $user = $app['user'];
        $salle->setAuthor($user);
        $salleForm = $app['form.factory']->create(new SalleType(), $salle);
        $salleForm->handleRequest($request);

        if ($salleForm->isSubmitted() && $salleForm->isValid()) {
            $app['dao.salle']->save($salle);
            $app['session']->getFlashBag()->add('success', 'Your salle was succesfully added.');
        }
        $salleFormView = $salleForm->createView();
    }

    $salles = $app['dao.salle']->findAllByReservation($id);
    return $app['twig']->render('reservation.html.twig', array(
        'reservation' => $reservation,
        'salles' => $salles,
        'salleForm' => $salleFormView));
})->bind('reservation');

// Login form
$app->get('/login', function(Request $request) use ($app) {
    return $app['twig']->render('login.html.twig', array(
        'error'         => $app['security.last_error']($request),
        'last_username' => $app['session']->get('_security.last_username'),
    ));
})->bind('login');