<?php

namespace Dupriez\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Adresses
 *
 * @ORM\Table(name="adresses")
 * @ORM\Entity(repositoryClass="Dupriez\UserBundle\Repository\AdressesRepository")
 */
class Adresses
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\ManyToOne(targetEntity="Users")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="rue", type="string", length=255)
     *
     * @Assert\NotBlank()
     */
    private $rue;

    /**
     * @var string
     *
     * @ORM\Column(name="numero", type="string", length=10)
     *
     * @Assert\NotBlank()
     */
    private $numero;

    /**
     * @var string
     *
     * @ORM\Column(name="boite", type="string", length=10, nullable=true)
     *
     *
     */
    private $boite;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=50)
     *
     * @Assert\NotBlank()
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="code_postal", type="string", length=10)
     *
     * @Assert\NotBlank()
     */
    private $codePostal;

    /**
     * @var int
     *
     * @ORM\Column(name="users", type="integer")
     *
     *
     */
    private $users;

    /**
     * @var int
     *
     * @ORM\Column(name="pays", type="string", length=50)
     *
     * @Assert\NotBlank()
     */
    private $pays;


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
     * Set rue
     *
     * @param string $rue
     *
     * @return Adresses
     */
    public function setRue($rue)
    {
        $this->rue = $rue;

        return $this;
    }

    /**
     * Get rue
     *
     * @return string
     */
    public function getRue()
    {
        return $this->rue;
    }

    /**
     * Set numero
     *
     * @param string $numero
     *
     * @return Adresses
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get numero
     *
     * @return string
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set boite
     *
     * @param string $boite
     *
     * @return Adresses
     */
    public function setBoite($boite)
    {
        $this->boite = $boite;

        return $this;
    }

    /**
     * Get boite
     *
     * @return string
     */
    public function getBoite()
    {
        return $this->boite;
    }

    /**
     * Set ville
     *
     * @param string $ville
     *
     * @return Adresses
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set codePostal
     *
     * @param string $codePostal
     *
     * @return Adresses
     */
    public function setCodePostal($codePostal)
    {
        $this->codePostal = $codePostal;

        return $this;
    }

    /**
     * Get codePostal
     *
     * @return string
     */
    public function getCodePostal()
    {
        return $this->codePostal;
    }

    /**
     * Set users
     *
     * @param integer $users
     *
     * @return Adresses
     */
    public function setUsers($users)
    {
        $this->users = $users;

        return $this;
    }

    /**
     * Get users
     *
     * @return int
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * @return int
     */
    public function getPays()
    {
        return $this->pays;
    }

    /**
     * @param int $pays
     */
    public function setPays($pays)
    {
        $this->pays = $pays;
    }


}

