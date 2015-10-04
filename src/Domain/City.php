<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of City
 *
 * @author usersio
 */

namespace m2l\Domain;

class City {
    /**

     * Article id.

     *

     * @var integer

     */

    private $id;


    /**

     * Article title.

     *

     * @var string

     */

    private $lat;
    
     /**

     * Article title.

     *

     * @var string

     */

    private $long;


    /**

     * Article content.

     *

     * @var string

     */
    private $name;
    
    
    function getId() {
        return $this->id;
    }

    function getLat() {
        return $this->lat;
    }

    function getLong() {
        return $this->long;
    }

    function getName() {
        return $this->name;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setLat($lat) {
        $this->lat = $lat;
    }

    function setLong($long) {
        $this->long = $long;
    }

    function setName($name) {
        $this->name = $name;
    }



}
