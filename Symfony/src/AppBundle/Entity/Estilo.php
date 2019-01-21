<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Estilo
 *
 * @ORM\Table(name="estilo")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EstiloRepository")
 */
class Estilo
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=128)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="text")
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="foto", type="string", length=255)
     */
    private $foto;

    /**
    * @ORM\OneToMany(targetEntity="Festival", mappedBy="estilo")
    */
    private $festivales;

    public function __construct()
    {
      $this->festivales = new ArrayCollection();
    }


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
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Estilo
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Estilo
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set foto
     *
     * @param string $foto
     *
     * @return Estilo
     */
    public function setFoto($foto)
    {
        $this->foto = $foto;

        return $this;
    }

    /**
     * Get foto
     *
     * @return string
     */
    public function getFoto()
    {
        return $this->foto;
    }

    /**
     * Add festivale
     *
     * @param \AppBundle\Entity\Festival $festivale
     *
     * @return Estilo
     */
    public function addFestivale(\AppBundle\Entity\Festival $festivale)
    {
        $this->festivales[] = $festivale;

        return $this;
    }

    /**
     * Remove festivale
     *
     * @param \AppBundle\Entity\Festival $festivale
     */
    public function removeFestivale(\AppBundle\Entity\Festival $festivale)
    {
        $this->festivales->removeElement($festivale);
    }

    /**
     * Get festivales
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFestivales()
    {
        return $this->festivales;
    }

    //Conversion a cadena
    public function __toString()
    {
        return $this->nombre;
    }
}
