<?php

namespace CodersLabBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Person
 *
 * @ORM\Table(name="person")
 * @ORM\Entity(repositoryClass="CodersLabBundle\Repository\PersonRepository")
 */
class Person
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
     * @ORM\Column(name="name", type="string", length=60)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="surname", type="string", length=255)
     */
    private $surname;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @ORM\ManyToOne(targetEntity="Address", inversedBy="persons")
     * @ORM\JoinColumn(name="address_id", referencedColumnName="id")
     */
    private $address;

    /**
     * @ORM\ManyToOne(targetEntity="PhoneNumber", inversedBy="persons")
     * @ORM\JoinColumn(name="phone_number_id", referencedColumnName="id")
     */
    private $personsPhoneNumber;

    /**
     * @ORM\ManyToOne(targetEntity="Email", inversedBy="persons")
     * @ORM\JoinColumn(name="email_id", referencedColumnName="id")
     */
    private $email;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Person
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set surname
     *
     * @param string $surname
     * @return Person
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;

        return $this;
    }

    /**
     * Get surname
     *
     * @return string 
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Person
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set address
     *
     * @param \CodersLabBundle\Entity\Address $address
     * @return Person
     */
    public function setAddress(\CodersLabBundle\Entity\Address $address = null)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return \CodersLabBundle\Entity\Address 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set personsPhoneNumber
     *
     * @param \CodersLabBundle\Entity\PhoneNumber $personsPhoneNumber
     * @return Person
     */
    public function setPersonsPhoneNumber(\CodersLabBundle\Entity\PhoneNumber $personsPhoneNumber = null)
    {
        $this->personsPhoneNumber = $personsPhoneNumber;

        return $this;
    }

    /**
     * Get personsPhoneNumber
     *
     * @return \CodersLabBundle\Entity\PhoneNumber 
     */
    public function getPersonsPhoneNumber()
    {
        return $this->personsPhoneNumber;
    }

    /**
     * Set email
     *
     * @param \CodersLabBundle\Entity\Email $email
     * @return Person
     */
    public function setEmail(\CodersLabBundle\Entity\Email $email = null)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return \CodersLabBundle\Entity\Email 
     */
    public function getEmail()
    {
        return $this->email;
    }
}
