<?php

namespace AppBundle\Entity;

/**
 * @ORM\Entity
 * @ORM\Table(name="Horario")
 */
class Horario
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     *
     * @var integer
     */
    protected $id;

    /**
     * @ORM\Column(type="integer", nullable=false)
     *
     * @var integer
     */
    protected $dia;

    /**
     * @ORM\Column(type="DateTime", nullable=false)
     *
     * @var \DateTime
     */
    protected $apertura;

    /**
     * @ORM\Column(type="DateTime", nullable=false)
     *
     * @var \DateTime
     */
    protected $cierre;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getDia()
    {
        return $this->dia;
    }

    /**
     * @param int $dia
     */
    public function setDia($dia)
    {
        $this->dia = $dia;
    }

    /**
     * @return \DateTime
     */
    public function getApertura()
    {
        return $this->apertura;
    }

    /**
     * @param \DateTime $apertura
     */
    public function setApertura($apertura)
    {
        $this->apertura = $apertura;
    }

    /**
     * @return \DateTime
     */
    public function getCierre()
    {
        return $this->cierre;
    }

    /**
     * @param \DateTime $cierre
     */
    public function setCierre($cierre)
    {
        $this->cierre = $cierre;
    }

}