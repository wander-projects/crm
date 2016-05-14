<?php

namespace OwnerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * owner
 *
 * @ORM\Table(name="owner")
 * @ORM\Entity
 */
class Owner
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
     * @ORM\Column(name="owner_name", type="string", length=100)
     */
    private $ownerName;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=70)
     */
    private $email;
    
    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=100)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="number", type="string", length=10)
     */
    private $number;
    
    /**
     * @var string
     *
     * @ORM\Column(name="complement", type="string", length=30)
     */
    private $complement;
    
    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=100)
     */
    private $city;
    
    /**
     * @var string
     *
     * @ORM\Column(name="state", type="string", length=20)
     */
    private $state;
    
    /**
     * @var string
     *
     * @ORM\Column(name="postcode", type="string", length=15)
     */
    private $postcode;
    
    /**
     * @var string
     *
     * @ORM\Column(name="neighborhood", type="string", length=50)
     */
    private $neighborhood;

    /**
     * @var string
     *
     * @ORM\Column(name="cpf", type="string", length=20)
     */
    private $cpf;

    /**
     * @var string
     *
     * @ORM\Column(name="phone_number", type="string", length=40)
     */
    private $phoneNumber;
    
    /**
     * @var string
     *
     * @ORM\Column(name="cellphone", type="string", length=40)
     */
    private $cellphone;

    /**
     * @var string
     *
     * @ORM\Column(name="rg", type="string", length=15)
     */
    private $rg;
    
    /**
     * @var string
     * 
     * @ORM\Column(name="gender", type="string", length=1)
     */
    private $gender;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="birth_date", type="datetime")
     */
    private $birthDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime")
     */
    private $updatedAt;


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
     * Set ownerName
     *
     * @param string $ownerName
     *
     * @return owner
     */
    public function setOwnerName($ownerName)
    {
        $this->ownerName = $ownerName;

        return $this;
    }

    /**
     * Get ownerName
     *
     * @return string
     */
    public function getOwnerName()
    {
        return $this->ownerName;
    }
    
    /**
     * Set email
     *
     * @param string $email
     *
     * @return owner
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set address
     *
     * @param string $address
     *
     * @return owner
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
     * Set number
     *
     * @param string $number
     *
     * @return owner
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get number
     *
     * @return string
     */
    public function getNUmber()
    {
        return $this->number;
    }
    
    /**
     * Set complement
     *
     * @param string $complement
     *
     * @return owner
     */
    public function setComplement($complement)
    {
        $this->complement = $complement;

        return $this;
    }

    /**
     * Get complement
     *
     * @return string
     */
    public function getComplement()
    {
        return $this->complement;
    }
    
    /**
     * Set city
     *
     * @param string $city
     *
     * @return owner
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
     * Set state
     *
     * @param string $state
     *
     * @return owner
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }
    
    /**
     * Set postcode
     *
     * @param string $postcode
     *
     * @return owner
     */
    public function setPostcode($postcode)
    {
        $this->postcode = $postcode;

        return $this;
    }

    /**
     * Get postcode
     *
     * @return string
     */
    public function getPostcode()
    {
        return $this->postcode;
    }
    
    /**
     * Set neighborhood
     *
     * @param string $neighborhood
     *
     * @return owner
     */
    public function setNeighborhood($neighborhood)
    {
        $this->neighborhood = $neighborhood;

        return $this;
    }

    /**
     * Get neighborhood
     *
     * @return string
     */
    public function getNeighborhood()
    {
        return $this->neighborhood;
    }

    /**
     * Set cpf
     *
     * @param string $cpf
     *
     * @return owner
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;

        return $this;
    }

    /**
     * Get cpf
     *
     * @return string
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * Set phoneNumber
     *
     * @param string $phoneNumber
     *
     * @return owner
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * Get phoneNumber
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Set cellphone
     *
     * @param string $cellphone
     *
     * @return owner
     */
    public function setCellphone($cellphone)
    {
        $this->cellphone = $cellphone;

        return $this;
    }

    /**
     * Get cellphone
     *
     * @return string
     */
    public function getCellphone()
    {
        return $this->cellphone;
    }
    
    /**
     * Set rg
     *
     * @param string $rg
     *
     * @return owner
     */
    public function setRg($rg)
    {
        $this->rg = $rg;

        return $this;
    }

    /**
     * Get rg
     *
     * @return string
     */
    public function getRg()
    {
        return $this->rg;
    }
    
    /**
     * Set gender
     *
     * @param string $gender
     *
     * @return owner
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set birthDate
     *
     * @param \DateTime $birthDate
     *
     * @return owner
     */
    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;

        return $this;
    }

    /**
     * Get birthDate
     *
     * @return \DateTime
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return owner
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return owner
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }
}

