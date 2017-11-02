<?php

namespace Plat\PlatBundle\Entity;

/**
 * Plat
 */
class Plat
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $titre;

    /**
     * @var float
     */
    private $prix;

    /**
     * @var int
     */
    private $nbpersonne;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set titre
     *
     * @param string $titre
     *
     * @return Plat
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set prix
     *
     * @param float $prix
     *
     * @return Plat
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return float
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set nbpersonne
     *
     * @param integer $nbpersonne
     *
     * @return Plat
     */
    public function setNbpersonne($nbpersonne)
    {
        $this->nbpersonne = $nbpersonne;

        return $this;
    }

    /**
     * Get nbpersonne
     *
     * @return int
     */
    public function getNbpersonne()
    {
        return $this->nbpersonne;
    }
}

