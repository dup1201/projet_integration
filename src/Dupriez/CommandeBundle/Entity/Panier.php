<?php

namespace Dupriez\CommandeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Panier
 *
 * @ORM\Table(name="panier")
 * @ORM\Entity(repositoryClass="Dupriez\CommandeBundle\Repository\PanierRepository")
 */
class Panier
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
     * @var \stdClass
     *
     * @ORM\ManyToOne(targetEntity="Dupriez\UserBundle\Entity\Users")
     */
    private $users;

    /**
     * @var \stdClass
     *
     * @ORM\OneToMany(targetEntity="Dupriez\ProductBundle\Entity\Products", mappedBy="panier")
     * @Assert\NotNull
     * @ORM\Column(name="product_id", type="integer")
     */
    private $products;

    /**
     * @var int
     *
     * @ORM\Column(name="quantite", type="integer")
     */
    private $quantite;



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
     * Set users
     *
     * @param \stdClass $users
     *
     * @return Panier
     */
    public function setUsers($users)
    {
        $this->users = $users;

        return $this;
    }

    /**
     * Get users
     *
     * @return \stdClass
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * Set products
     *
     * @param \stdClass $products
     *
     * @return Panier
     */
    public function setProducts($products)
    {
        $this->products = $products;

        return $this;
    }

    /**
     * Get products
     *
     * @return \stdClass
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * Set quantite
     *
     * @param integer $quantite
     *
     * @return Panier
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;

        return $this;
    }

    /**
     * Get quantite
     *
     * @return int
     */
    public function getQuantite()
    {
        return $this->quantite;
    }


}

