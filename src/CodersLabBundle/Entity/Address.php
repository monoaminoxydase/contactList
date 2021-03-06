<?php

namespace CodersLabBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Address
 *
 * @ORM\Table(name="address")
 * @ORM\Entity(repositoryClass="CodersLabBundle\Repository\AddressRepository")
 */
class Address
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
     * @ORM\Column(name="city", type="string", length=255)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="street", type="string", length=255)
     */
    private $street;

    /**
     * @var int
     *
     * @ORM\Column(name="house_number", type="integer")
     */
    private $houseNumber;

    /**
     * @var int
     *
     * @ORM\Column(name="appartment_number", type="integer")
     */
    private $appartmentNumber;

    /**
     * @ORM\OneToMany(targetEntity="Person", mappedBy="address")
     */
    private $persons;
    public function __construct() {
        $this->persons = new ArrayCollection();
    }


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
     * Set city
     *
     * @param string $city
     * @return Address
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set street
     *
     * @param string $street
     * @return Address
     */
    public function setStreet($street)
    {
        $this->street = $street;

        return $this;
    }

    /**
     * Get street
     *
     * @return string 
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Set houseNumber
     *
     * @param integer $houseNumber
     * @return Address
     */
    public function setHouseNumber($houseNumber)
    {
        $this->houseNumber = $houseNumber;

        return $this;
    }

    /**
     * Get houseNumber
     *
     * @return integer 
     */
    public function getHouseNumber()
    {
        return $this->houseNumber;
    }

    /**
     * Set appartmentNumber
     *
     * @param integer $appartmentNumber
     * @return Address
     */
    public function setAppartmentNumber($appartmentNumber)
    {
        $this->appartmentNumber = $appartmentNumber;

        return $this;
    }

    /**
     * Get appartmentNumber
     *
     * @return integer 
     */
    public function getAppartmentNumber()
    {
        return $this->appartmentNumber;
    }

    /**
     * Add persons
     *
     * @param \CodersLabBundle\Entity\Person $persons
     * @return Address
     */
    public function addPerson(\CodersLabBundle\Entity\Person $persons)
    {
        $this->persons[] = $persons;

        return $this;
    }

    /**
     * Remove persons
     *
     * @param \CodersLabBundle\Entity\Person $persons
     */
    public function removePerson(\CodersLabBundle\Entity\Person $persons)
    {
        $this->persons->removeElement($persons);
    }

    /**
     * Get persons
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPersons()
    {
        return $this->persons;
    }

    public function __toString(){
        return "$this->city $this->street $this->houseNumber $this->appartmentNumber";
    }
    
}
