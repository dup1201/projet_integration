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
    private $user;

    /**
     * @var array
     *
     * @ORM\OneToMany(targetEntity="Dupriez\CommandeBundle\Entity\Contenu", mappedBy="panier", fetch="EAGER")
     */
    private $contenu;

    /**
     * @var \integer
     *
     * @ORM\Column(name="etat")
     */
    private $etat;

    public function __construct()
    {
        $this->contenu = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set users
     *
     * @param \stdClass $user
     *
     * @return Panier
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get users
     *
     * @return \stdClass
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @return array
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * @param array $contenu
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;
    }

    /**
     * @return int
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * @param int $etat
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;
    }

}

