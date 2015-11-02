<?php
/**
 * Created by PhpStorm.
 * User: Damien
 * Date: 21/10/2015
 * Time: 18:28
 */

namespace M2L\Domain;


class Reservation
{


    private $id;

    private $date;

    private $heureDebut;

    private $heureFin;

    private $salle_id;

    private $ligue_id;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getHeureDebut()
    {
        return $this->heureDebut;
    }

    /**
     * @param mixed $heureDebut
     */
    public function setHeureDebut($heureDebut)
    {
        $this->heureDebut = $heureDebut;
    }

    /**
     * @return mixed
     */
    public function getHeureFin()
    {
        return $this->heureFin;
    }

    /**
     * @param mixed $heureFin
     */
    public function setHeureFin($heureFin)
    {
        $this->heureFin = $heureFin;
    }

    /**
     * @return mixed
     */
    public function getSalleId()
    {
        return $this->salle_id;
    }

    /**
     * @param mixed $salle_id
     */
    public function setSalleId($salle_id)
    {
        $this->salle_id = $salle_id;
    }

    /**
     * @return mixed
     */
    public function getLigueId()
    {
        return $this->ligue_id;
    }

    /**
     * @param mixed $ligue_id
     */
    public function setLigueId($ligue_id)
    {
        $this->ligue_id = $ligue_id;
    }



}