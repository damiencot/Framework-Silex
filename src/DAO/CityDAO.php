<?php

namespace m2l\DAO;

use Doctrine\DBAL\Connection;
use m2l\Domain\City;

class CityDAO
{
    /**
     * Database connection
     *
     * @var \Doctrine\DBAL\Connection
     */
    private $db;

    /**
     * Constructor
     *
     * @param \Doctrine\DBAL\Connection The database connection object
     */
    public function __construct(Connection $db) {
        $this->db = $db;
    }

    /**
     * Return a list of all articles, sorted by date (most recent first).
     *
     * @return array A list of all articles.
     */
    public function findAll() {
        $sql = "select * from city";
        $result = $this->db->fetchAll($sql);
        
        // Convert query result to an array of domain objects
        $citys = array();
        foreach ($result as $row) {
            $cityId = $row['id'];
            $citys[$cityId] = $this->buildCity($row);
        }
        return $citys;
    }

    /**
     * Creates an Article object based on a DB row.
     *
     * @param array $row The DB row containing Article data.
     * @return \MicroCMS\Domain\Article
     */
    private function buildCity(array $row) {
        $city = new City();
        $city->setId($row['id']);
        $city->setLat($row['lat']);
        $city->setLong($row['long']);
        $city->setName($row['name']);
        return $city;
    }
}