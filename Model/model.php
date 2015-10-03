<?php

// Return all articles
function getCity() {
    $bdd = new PDO('mysql:host=localhost;dbname=m2l_V1;charset=utf8', 'root', 'pwsio');
    $citys = $bdd->query('select * from city');
    return $citys;
}