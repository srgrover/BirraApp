<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="Usuario")
 */
class User
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     *
     * @var integer
     */
    protected $id;

    /**
     * @ORM\Column(type="boolean", nullable=false)
     *
     * @var boolean
     */
    protected $admin = false;

    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     *
     * @Assert\NotBlank(message="Por favor, introduce tu nombre.", groups={"Registration", "Profile"})
     * @Assert\Length(
     *     min=3,
     *     max=255,
     *     minMessage="El nombre es demasiado corto. Introduce como mínimo 3 caracteres.",
     *     maxMessage="El nombre es demasiado largo, no debe sobrepasar los 255 caracteres.",
     *     groups={"Registration", "Profile"}
     * )
     *
     * @var string
     */
    protected $name;

    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     *
     * @Assert\NotBlank(message="Por favor, introduce al menos un apellido.", groups={"Registration", "Profile"})
     * @Assert\Length(
     *     min=3,
     *     max=255,
     *     minMessage="El/los apellido/s son demasiado cortos",
     *     maxMessage="El/los apellido/s son demasiado largos",
     *     groups={"Registration", "Profile"}
     * )
     *
     * @var string
     */
    protected $surname;

    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     *
     * @Assert\NotBlank(message="Por favor, introduce un email válido.")
     *
     * @var string
     */
    protected $email;

    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     *
     * @Assert\NotBlank(message="Por favor, introduce una contraseña.")
     * @Assert\Length(
     *     min=8,
     *     max=16,
     *     minMessage="La contraseña es demasiado corta. Mínimo 8 caracteres",
     *     maxMessage="La contraseña es demasiado larga. Máximo 16 caracteres",
     * )
     *
     * @var string
     */
    protected $password;

    /**
     * @ORM\Column(type="string", length=5, nullable=false)
     * @Assert\Length(
     *     max=5,
     *     min=5,
     *     exactMessage="El código postal debe tener 5 dígitos",
     * )
     *
     * @var string
     */
    protected $cPostal;

    /**
     * @ORM\Column(type="string", nullable=true)
     *
     * @var string
     */
    protected $city;

    /**
     * @ORM\Column(type="string", nullable=true)
     *
     * @var string
     */
    protected $imgProfile;

    /**
     * @ORM\Column(type="datetime", nullable=false)
     *
     * @var \DateTime
     */
    protected $registered_at;

    /**
     * @ORM\Column(type="boolean", nullable=false)
     *
     * @var boolean
     */
    protected $activated = false;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return User
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return bool
     */
    public function isAdmin()
    {
        return $this->admin;
    }

    /**
     * @param bool $admin
     * @return User
     */
    public function setAdmin($admin)
    {
        $this->admin = $admin;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return User
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * @param string $surname
     * @return User
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    /**
     * @return string
     */
    public function getCPostal()
    {
        return $this->cPostal;
    }

    /**
     * @param string $cPostal
     * @return User
     */
    public function setCPostal($cPostal)
    {
        $this->cPostal = $cPostal;
        return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $city
     * @return User
     */
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return string
     */
    public function getImgProfile()
    {
        return $this->imgProfile;
    }

    /**
     * @param string $imgProfile
     * @return User
     */
    public function setImgProfile($imgProfile)
    {
        $this->imgProfile = $imgProfile;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getRegisteredAt()
    {
        return $this->registered_at;
    }

    /**
     * @param \DateTime $registered_at
     * @return User
     */
    public function setRegisteredAt($registered_at)
    {
        $this->registered_at = $registered_at;
        return $this;
    }

    /**
     * @return bool
     */
    public function isActivated()
    {
        return $this->activated;
    }

    /**
     * @param bool $activated
     * @return User
     */
    public function setActivated($activated)
    {
        $this->activated = $activated;
        return $this;
    }

    
}