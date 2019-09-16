<?php

namespace Dupriez\CommandeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contenu
 *
 * @ORM\Table(name="contenu")
 * @ORM\Entity(repositoryClass="Dupriez\CommandeBundle\Repository\ContenuRepository")
 */
class Contenu
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
     * @ORM\ManyToOne(targetEntity="Dupriez\CommandeBundle\Entity\Panier", inversedBy="contenu")
     */
    private $panier;

    /**
     * @var \stdClass
     *
     * @ORM\ManyToOne(targetEntity="Dupriez\ProductBundle\Entity\Products", fetch="EAGER")
     */
    private $product;

    /**
     * @var int
     *
     * @ORM\Column(name="quantite", type="integer")
     */
    private $quantite;

    /**
     * @var
     * @ORM\Column(name="total",type="decimal", precision=10, scale=2)
     */
    private $total;

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
     * @return \stdClass
     */
    public function getPanier()
    {
        return $this->panier;
    }

    /**
     * Set panier
     *
     * @param \stdClass $panier
     *
     * @return Contenu
     */
    public function setPanier($panier)
    {
        $this->panier = $panier;

        return $this;
    }

    /**
     * Set quantite
     *
     * @param integer $quantite
     *
     * @return Contenu
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

    /**
     * Set product
     *
     * @param \stdClass $product
     *
     * @return Contenu
     */
    public function setProduct($product)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * Get product
     *
     * @return \stdClass
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @return mixed
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @param mixed $total
     */
    public function setTotal($total)
    {
        $this->total = $total;
    }


}

