<?php
function getVilles(){
    $bdd = new PDO('mysql:host=localhost;dbname=m2l_V1','root','pwsio');
    $villes = $bdd->query('SELECT * FROM city ORDER BY name LIMIT 0,5');
    return $villes;
}