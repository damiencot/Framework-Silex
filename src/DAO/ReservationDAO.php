<?php

namespace M2L\DAO;

use M2L\Domain\Reservation;

class ReservationDAO extends DAO{


    public function find($id) {
        $sql = "select * from reservation where reservation.id=?";
        $row = $this->getDb()->fetchAssoc($sql, array($id));

        if ($row)
            return $this->buildDomainObject($row);
        else
            throw new \Exception("No reservation matching id " . $id);
    }


    public function findAll(){
        $sql = " SELECT * FROM reservation";
        $result = $this->getDb()->fetchAll($sql);

        $reservations = array();
        foreach($result as $row){
            $reservationID = $row['id'];
            $reservations[$reservationID] = $this->buildDomainObject($row);
        }
        return $reservations;
    }


    protected function buildDomainObject($row) {
        $reservation = new Reservation();
        $reservation->setId($row['id']);
        $reservation->setDate($row['date']);
        $reservation->setHeureDebut($row['heureDebut']);
        $reservation->setHeureFin($row['heureFin']);
        return $reservation;
    }
}


