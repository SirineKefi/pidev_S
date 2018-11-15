<?php

namespace VoyageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * Voyage
 *
 * @ORM\Table(name="voyage")
 * @ORM\Entity(repositoryClass="VoyageBundle\Repository\VoyageRepository")
 */
class Voyage
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idVoyage", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idvoyage;

    /**
     * @var string
     *
     * @ORM\Column(name="destinationVoyage", type="string", length=20, nullable=true)
     */
    private $destinationvoyage;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateVoyageAller", type="date", nullable=true)
     */
    private $datevoyagealler;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="hdepartVoyageAller", type="date", nullable=true)
     */
    private $hdepartvoyagealler;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="harriveeVoyageAller", type="date", nullable=true)
     */
    private $harriveevoyagealler;

    /**
     * @var string
     *
     * @ORM\Column(name="departVoyage", type="string", length=20, nullable=true)
     */
    private $departvoyage;

    /**
     * @var integer
     *
     * @ORM\Column(name="nb_place_dispo", type="integer", nullable=true)
     */
    private $nbPlaceDispo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateVoyageRetour", type="date", nullable=true)
     */
    private $datevoyageretour;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="hdepartVoyageRetour", type="date", nullable=true)
     */
    private $hdepartvoyageretour;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="harriveeVoyageRetour", type="date", nullable=true)
     */
    private $harriveevoyageretour;

    /**
     * @var integer
     *
     * @ORM\Column(name="prix", type="integer", nullable=false)
     */
    private $prix;

    /**
     * @var integer
     *
     * @ORM\Column(name="num", type="integer", nullable=false)
     */
    private $num;

    /**
     * @var string
     *
     * @ORM\Column(name="compagnie", type="string", length=20, nullable=false)
     */
    private $compagnie;

    /**
     * @return int
     */
    public function getIdvoyage()
    {
        return $this->idvoyage;
    }

    /**
     * @param int $idvoyage
     */
    public function setIdvoyage($idvoyage)
    {
        $this->idvoyage = $idvoyage;
    }

    /**
     * @return string
     */
    public function getDestinationvoyage()
    {
        return $this->destinationvoyage;
    }

    /**
     * @param string $destinationvoyage
     */
    public function setDestinationvoyage($destinationvoyage)
    {
        $this->destinationvoyage = $destinationvoyage;
    }

    /**
     * @return \DateTime
     */
    public function getDatevoyagealler()
    {
        return $this->datevoyagealler;
    }

    /**
     * @param \DateTime $datevoyagealler
     */
    public function setDatevoyagealler($datevoyagealler)
    {
        $this->datevoyagealler = $datevoyagealler;
    }

    /**
     * @return \DateTime
     */
    public function getHdepartvoyagealler()
    {
        return $this->hdepartvoyagealler;
    }

    /**
     * @param \DateTime $hdepartvoyagealler
     */
    public function setHdepartvoyagealler($hdepartvoyagealler)
    {
        $this->hdepartvoyagealler = $hdepartvoyagealler;
    }

    /**
     * @return \DateTime
     */
    public function getHarriveevoyagealler()
    {
        return $this->harriveevoyagealler;
    }

    /**
     * @param \DateTime $harriveevoyagealler
     */
    public function setHarriveevoyagealler($harriveevoyagealler)
    {
        $this->harriveevoyagealler = $harriveevoyagealler;
    }

    /**
     * @return string
     */
    public function getDepartvoyage()
    {
        return $this->departvoyage;
    }

    /**
     * @param string $departvoyage
     */
    public function setDepartvoyage($departvoyage)
    {
        $this->departvoyage = $departvoyage;
    }

    /**
     * @return int
     */
    public function getNbPlaceDispo()
    {
        return $this->nbPlaceDispo;
    }

    /**
     * @param int $nbPlaceDispo
     */
    public function setNbPlaceDispo($nbPlaceDispo)
    {
        $this->nbPlaceDispo = $nbPlaceDispo;
    }

    /**
     * @return \DateTime
     */
    public function getDatevoyageretour()
    {
        return $this->datevoyageretour;
    }

    /**
     * @param \DateTime $datevoyageretour
     */
    public function setDatevoyageretour($datevoyageretour)
    {
        $this->datevoyageretour = $datevoyageretour;
    }

    /**
     * @return \DateTime
     */
    public function getHdepartvoyageretour()
    {
        return $this->hdepartvoyageretour;
    }

    /**
     * @param \DateTime $hdepartvoyageretour
     */
    public function setHdepartvoyageretour($hdepartvoyageretour)
    {
        $this->hdepartvoyageretour = $hdepartvoyageretour;
    }

    /**
     * @return \DateTime
     */
    public function getHarriveevoyageretour()
    {
        return $this->harriveevoyageretour;
    }

    /**
     * @param \DateTime $harriveevoyageretour
     */
    public function setHarriveevoyageretour($harriveevoyageretour)
    {
        $this->harriveevoyageretour = $harriveevoyageretour;
    }

    /**
     * @return int
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * @param int $prix
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;
    }

    /**
     * @return int
     */
    public function getNum()
    {
        return $this->num;
    }

    /**
     * @param int $num
     */
    public function setNum($num)
    {
        $this->num = $num;
    }

    /**
     * @return string
     */
    public function getCompagnie()
    {
        return $this->compagnie;
    }

    /**
     * @param string $compagnie
     */
    public function setCompagnie($compagnie)
    {
        $this->compagnie = $compagnie;
    }


}
