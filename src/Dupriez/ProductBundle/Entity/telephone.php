<?php

namespace Dupriez\ProductBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * telephone
 *
 * @ORM\Table(name="telephone")
 * @ORM\Entity(repositoryClass="Dupriez\ProductBundle\Repository\telephoneRepository")
 */
class telephone extends Products
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
     * @ORM\Column(name="marque", type="string", length=50)
     */
    private $marque;

    /**
     * @var string
     *
     * @ORM\Column(name="modele", type="string", length=50)
     */
    private $modele;

    /**
     * @var string
     *
     * @ORM\Column(name="couleur", type="string", length=50)
     */
    private $couleur;

    /**
     * @var string
     *
     * @ORM\Column(name="capacite", type="string", length=10)
     */
    private $capacite;

    /**
     * @var string
     *
     * @ORM\Column(name="ecran", type="string", length=15)
     */
    private $ecran;

    /**
     * @var string
     *
     * @ORM\Column(name="dimenssion", type="string", length=15)
     */
    private $dimenssion;

    /**
     * @var int
     *
     * @ORM\Column(name="product", type="integer")
     */
    private $product;


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
     * Set marque
     *
     * @param string $marque
     *
     * @return telephone
     */
    public function setMarque($marque)
    {
        $this->marque = $marque;

        return $this;
    }

    /**
     * Get marque
     *
     * @return string
     */
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * Set modele
     *
     * @param string $modele
     *
     * @return telephone
     */
    public function setModele($modele)
    {
        $this->modele = $modele;

        return $this;
    }

    /**
     * Get modele
     *
     * @return string
     */
    public function getModele()
    {
        return $this->modele;
    }

    /**
     * Set couleur
     *
     * @param string $couleur
     *
     * @return telephone
     */
    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;

        return $this;
    }

    /**
     * Get couleur
     *
     * @return string
     */
    public function getCouleur()
    {
        return $this->couleur;
    }

    /**
     * Set capacite
     *
     * @param string $capacite
     *
     * @return telephone
     */
    public function setCapacite($capacite)
    {
        $this->capacite = $capacite;

        return $this;
    }

    /**
     * Get capacite
     *
     * @return string
     */
    public function getCapacite()
    {
        return $this->capacite;
    }

    /**
     * Set ecran
     *
     * @param string $ecran
     *
     * @return telephone
     */
    public function setEcran($ecran)
    {
        $this->ecran = $ecran;

        return $this;
    }

    /**
     * Get ecran
     *
     * @return string
     */
    public function getEcran()
    {
        return $this->ecran;
    }

    /**
     * Set dimenssion
     *
     * @param string $dimenssion
     *
     * @return telephone
     */
    public function setDimenssion($dimenssion)
    {
        $this->dimenssion = $dimenssion;

        return $this;
    }

    /**
     * Get dimenssion
     *
     * @return string
     */
    public function getDimenssion()
    {
        return $this->dimenssion;
    }

    /**
     * Set product
     *
     * @param integer $product
     *
     * @return telephone
     */
    public function setProduct($product)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * Get product
     *
     * @return int
     */
    public function getProduct()
    {
        return $this->product;
    }
}

