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
class User {
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

}