<?php

namespace Dupriez\ProductBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PC_portable
 *
 * @ORM\Table(name="p_c_portable")
 * @ORM\Entity(repositoryClass="Dupriez\ProductBundle\Repository\PC_portableRepository")
 */
class PC_portable
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
     * @ORM\Column(name="dimenssion", type="string", length=20)
     */
    private $dimenssion;

    /**
     * @var string
     *
     * @ORM\Column(name="os", type="string", length=20)
     */
    private $os;

    /**
     * @var string
     *
     * @ORM\Column(name="ecran", type="string", length=15)
     */
    private $ecran;

    /**
     * @var string
     *
     * @ORM\Column(name="utilisation", type="string", length=20)
     */
    private $utilisation;

    /**
     * @var string
     *
     * @ORM\Column(name="poid", type="decimal", precision=4, scale=2)
     */
    private $poid;

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
     * Set marque
     *
     * @param string $marque
     *
     * @return PC_portable
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
     * @return PC_portable
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
     * Set dimenssion
     *
     * @param string $dimenssion
     *
     * @return PC_portable
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
     * Set os
     *
     * @param string $os
     *
     * @return PC_portable
     */
    public function setOs($os)
    {
        $this->os = $os;

        return $this;
    }

    /**
     * Get os
     *
     * @return string
     */
    public function getOs()
    {
        return $this->os;
    }

    /**
     * Set ecran
     *
     * @param string $ecran
     *
     * @return PC_portable
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
     * Set utilisation
     *
     * @param string $utilisation
     *
     * @return PC_portable
     */
    public function setUtilisation($utilisation)
    {
        $this->utilisation = $utilisation;

        return $this;
    }

    /**
     * Get utilisation
     *
     * @return string
     */
    public function getUtilisation()
    {
        return $this->utilisation;
    }

    /**
     * Set poid
     *
     * @param string $poid
     *
     * @return PC_portable
     */
    public function setPoid($poid)
    {
        $this->poid = $poid;

        return $this;
    }

    /**
     * Get poid
     *
     * @return string
     */
    public function getPoid()
    {
        return $this->poid;
    }

    /**
     * Set products
     *
     * @param integer $products
     *
     * @return PC_portable
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

