<?php
//Home page
$app->get('/', function(){
   require '../src/model.php';
   $villes = getVilles();
   
   ob_start(); // start bufferging HTML output
   require '../views/view.php';
   $view = ob_get_clean(); //assign HTML output to $view
   return $view;
});