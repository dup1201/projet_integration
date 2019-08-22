<?php

namespace Dupriez\ProductBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vetements
 *
 * @ORM\Table(name="vetements")
 * @ORM\Entity(repositoryClass="Dupriez\ProductBundle\Repository\VetementsRepository")
 */
class Vetements
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
     * @ORM\Column(name="categorie", type="string", length=25)
     */
    private $categorie;

    /**
     * @var string
     *
     * @ORM\Column(name="taille", type="string", length=10)
     */
    private $taille;

    /**
     * @var string
     *
     * @ORM\Column(name="manche", type="string", length=10)
     */
    private $manche;

    /**
     * @var string
     *
     * @ORM\Column(name="couleur", type="string", length=20)
     */
    private $couleur;

    /**
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="Products", cascade={"persist","remove"})
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
     * Set categorie
     *
     * @param string $categorie
     *
     * @return Vetements
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
     * Set taille
     *
     * @param string $taille
     *
     * @return Vetements
     */
    public function setTaille($taille)
    {
        $this->taille = $taille;

        return $this;
    }

    /**
     * Get taille
     *
     * @return string
     */
    public function getTaille()
    {
        return $this->taille;
    }

    /**
     * Set manche
     *
     * @param string $manche
     *
     * @return Vetements
     */
    public function setManche($manche)
    {
        $this->manche = $manche;

        return $this;
    }

    /**
     * Get manche
     *
     * @return string
     */
    public function getManche()
    {
        return $this->manche;
    }

    /**
     * Set couleur
     *
     * @param string $couleur
     *
     * @return Vetements
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
     * Set products
     *
     * @param integer $product
     *
     * @return Vetements
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

