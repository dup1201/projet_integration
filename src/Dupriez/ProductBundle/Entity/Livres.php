<?php

namespace Dupriez\ProductBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Livres
 *
 * @ORM\Table(name="livres")
 * @ORM\Entity(repositoryClass="Dupriez\ProductBundle\Repository\LivresRepository")
 */
class Livres
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="categorie", type="string", length=50)
     */
    private $categorie;

    /**
     * @var int
     *
     * @ORM\Column(name="nb_pages", type="integer")
     */
    private $nbPages;

    /**
     * @var string
     *
     * @ORM\Column(name="isbn", type="string", length=20)
     */
    private $isbn;

    /**
     * @var string
     *
     * @ORM\Column(name="editeur", type="string", length=255)
     */
    private $editeur;

    /**
     * @var string
     *
     * @ORM\Column(name="dimenssion", type="string", length=20)
     */
    private $dimenssion;

    /**
     * @var string
     *
     * @ORM\Column(name="auteur", type="string", length=255)
     */
    private $auteur;

    /**
     * @var string
     *
     * @ORM\Column(name="resume", type="text", length=400, nullable=true)
     */
    private $resume;

    /**
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="Products", cascade={"persist","remove"})
     *

     */
    private $products;


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
     * @return Livres
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
     * Set categorie
     *
     * @param string $categorie
     *
     * @return Livres
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return string
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set nbPages
     *
     * @param integer $nbPages
     *
     * @return Livres
     */
    public function setNbPages($nbPages)
    {
        $this->nbPages = $nbPages;

        return $this;
    }

    /**
     * Get nbPages
     *
     * @return int
     */
    public function getNbPages()
    {
        return $this->nbPages;
    }

    /**
     * Set isbn
     *
     * @param string $isbn
     *
     * @return Livres
     */
    public function setIsbn($isbn)
    {
        $this->isbn = $isbn;

        return $this;
    }

    /**
     * Get isbn
     *
     * @return string
     */
    public function getIsbn()
    {
        return $this->isbn;
    }

    /**
     * Set editeur
     *
     * @param string $editeur
     *
     * @return Livres
     */
    public function setEditeur($editeur)
    {
        $this->editeur = $editeur;

        return $this;
    }

    /**
     * Get editeur
     *
     * @return string
     */
    public function getEditeur()
    {
        return $this->editeur;
    }

    /**
     * Set dimenssion
     *
     * @param string $dimenssion
     *
     * @return Livres
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
     * Set auteur
     *
     * @param string $auteur
     *
     * @return Livres
     */
    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;

        return $this;
    }

    /**
     * Get auteur
     *
     * @return string
     */
    public function getAuteur()
    {
        return $this->auteur;
    }

    /**
     * Set resume
     *
     * @param string $resume
     *
     * @return Livres
     */
    public function setResume($resume)
    {
        $this->resume = $resume;

        return $this;
    }

    /**
     * Get resume
     *
     * @return string
     */
    public function getResume()
    {
        return $this->resume;
    }

    /**
     * Set products
     *
     * @param integer $products
     *
     * @return Livres
     */
    public function setProducts($products)
    {
        $this->products = $products;

        return $this;
    }

    /**
     * Get products
     *
     * @return int
     */
    public function getProducts()
    {
        return $this->products;
    }


}

