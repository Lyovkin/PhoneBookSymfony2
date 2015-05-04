<?php

namespace PB\PhoneBookBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Phonebook
 *
 * @ORM\Table(name="phonebook")
 * @ORM\Entity
 */
class Phonebook
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="text")
     */
    private $address;

    /**
     * @var integer
     *
     * @ORM\Column(name="phone_1", type="integer", length=13)
     */
    private $phone_1;

    /**
     * @var integer
     *
     * @ORM\Column(name="phone_2", type="integer", length=13)
     */
    private $phone_2;

    /**
     * @var text
     *
     * @ORM\Column(name="info", type="text")
     */
    private $info;


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
     * @return Phonebook
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
     * Set address
     *
     * @param string $address
     * @return Phonebook
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set phone_1
     *
     * @param integer $phone1
     * @return Phonebook
     */
    public function setPhone1($phone1)
    {
        $this->phone_1 = $phone1;

        return $this;
    }

    /**
     * Get phone_1
     *
     * @return integer 
     */
    public function getPhone1()
    {
        return $this->phone_1;
    }

    /**
     * Set phone_2
     *
     * @param integer $phone2
     * @return Phonebook
     */
    public function setPhone2($phone2)
    {
        $this->phone_2 = $phone2;

        return $this;
    }

    /**
     * Get phone_2
     *
     * @return integer 
     */
    public function getPhone2()
    {
        return $this->phone_2;
    }

    /**
     * Set info
     *
     * @param \text $info
     * @return Phonebook
     */
    public function setInfo(\text $info)
    {
        $this->info = $info;

        return $this;
    }

    /**
     * Get info
     *
     * @return \text
     */
    public function getInfo()
    {
        return $this->info;
    }
}
