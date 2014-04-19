<?php

namespace Haesl\SurveyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Survey
 */
class Survey
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var array
     */
    private $gender;

    /**
     * @var integer
     */
    private $age;

    /**
     * @var array
     */
    private $lovedTrains;

    /**
     * @var array
     */
    private $lovedCars;

    /**
     * @var array
     */
    private $lovedAirplanes;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set gender
     *
     * @param array $gender
     * @return Survey
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return array 
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set age
     *
     * @param integer $age
     * @return Survey
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age
     *
     * @return integer 
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set lovedTrains
     *
     * @param array $lovedTrains
     * @return Survey
     */
    public function setLovedTrains($lovedTrains)
    {
        $this->lovedTrains = $lovedTrains;

        return $this;
    }

    /**
     * Get lovedTrains
     *
     * @return array 
     */
    public function getLovedTrains()
    {
        return $this->lovedTrains;
    }

    /**
     * Set lovedCars
     *
     * @param array $lovedCars
     * @return Survey
     */
    public function setLovedCars($lovedCars)
    {
        $this->lovedCars = $lovedCars;

        return $this;
    }

    /**
     * Get lovedCars
     *
     * @return array 
     */
    public function getLovedCars()
    {
        return $this->lovedCars;
    }

    /**
     * Set lovedAirplanes
     *
     * @param array $lovedAirplanes
     * @return Survey
     */
    public function setLovedAirplanes($lovedAirplanes)
    {
        $this->lovedAirplanes = $lovedAirplanes;

        return $this;
    }

    /**
     * Get lovedAirplanes
     *
     * @return array 
     */
    public function getLovedAirplanes()
    {
        return $this->lovedAirplanes;
    }
    /**
     * @var string
     */
    private $hatetAirplanes;

    /**
     * @var string
     */
    private $hatetShips;


    /**
     * Set hatetAirplanes
     *
     * @param string $hatetAirplanes
     * @return Survey
     */
    public function setHatetAirplanes($hatetAirplanes)
    {
        $this->hatetAirplanes = $hatetAirplanes;

        return $this;
    }

    /**
     * Get hatetAirplanes
     *
     * @return string 
     */
    public function getHatetAirplanes()
    {
        return $this->hatetAirplanes;
    }

    /**
     * Set hatetShips
     *
     * @param string $hatetShips
     * @return Survey
     */
    public function setHatetShips($hatetShips)
    {
        $this->hatetShips = $hatetShips;

        return $this;
    }

    /**
     * Get hatetShips
     *
     * @return string 
     */
    public function getHatetShips()
    {
        return $this->hatetShips;
    }
    /**
     * @var string
     */
    private $hatetCars;


    /**
     * Set hatetCars
     *
     * @param string $hatetCars
     * @return Survey
     */
    public function setHatetCars($hatetCars)
    {
        $this->hatetCars = $hatetCars;

        return $this;
    }

    /**
     * Get hatetCars
     *
     * @return string 
     */
    public function getHatetCars()
    {
        return $this->hatetCars;
    }
    /**
     * @var string
     */
    private $lovedShips;


    /**
     * Set lovedShips
     *
     * @param string $lovedShips
     * @return Survey
     */
    public function setLovedShips($lovedShips)
    {
        $this->lovedShips = $lovedShips;

        return $this;
    }

    /**
     * Get lovedShips
     *
     * @return string 
     */
    public function getLovedShips()
    {
        return $this->lovedShips;
    }
}
