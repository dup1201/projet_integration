<?php

namespace Dupriez\CommandeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commande
 *
 * @ORM\Table(name="commande")
 * @ORM\Entity(repositoryClass="Dupriez\CommandeBundle\Repository\CommandeRepository")
 */
class Commande
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
     * @var int
     *
     * @ORM\Column(name="panier", type="integer")
     */
    private $panier;




    /**
     * @var int
     *
     * @ORM\OneToOne(targetEntity="Dupriez\UserBundle\Entity\Adresses", mappedBy="id")
     * @ORM\Column(name="adresse_liv", type="integer")
     */
    private $adresseLiv;

    /**
     * @var int
     *
     * @ORM\OneToOne(targetEntity="Dupriez\UserBundle\Entity\Adresses", mappedBy="id")
     * @ORM\Column(name="adresse_fact", type="integer")
     */
    private $adresseFact;

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
     * Set panier
     *
     * @param integer $panier
     *
     * @return Commande
     */
    public function setPanier($panier)
    {
        $this->panier = $panier;

        return $this;
    }

    /**
     * Get panier
     *
     * @return int
     */
    public function getPanier()
    {
        return $this->panier;
    }



    /**
     * @return int
     */
    public function getAdresseLiv()
    {
        return $this->adresseLiv;
    }

    /**
     * @param int $adresseLiv
     */
    public function setAdresseLiv($adresseLiv)
    {
        $this->adresseLiv = $adresseLiv;
    }

    /**
     * @return int
     */
    public function getAdresseFact()
    {
        return $this->adresseFact;
    }

    /**
     * @param int $adresseFact
     */
    public function setAdresseFact($adresseFact)
    {
        $this->adresseFact = $adresseFact;
    }


}

