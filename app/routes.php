<?php
//Home page
$app->get('/', function() use ($app) {
    $citys = $app['dao.city']->findAll();
   
    return $app['twig']->render('index.html.twig', array('citys' => $citys));
});