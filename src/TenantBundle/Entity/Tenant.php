<?php

namespace TenantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tenant
 *
 * @ORM\Table(name="tenant")
 * @ORM\Entity(repositoryClass="TenantBundle\Entity\TenantRepository")
 */
class Tenant
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
     * @ORM\Column(name="name", type="string", length=200)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=100)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="rg", type="string", length=12)
     */
    private $rg;

    /**
     * @var string
     *
     * @ORM\Column(name="cpf", type="string", length=15)
     */
    private $cpf;

    /**
     * @var string
     *
     * @ORM\Column(name="phone_res", type="string", length=13)
     */
    private $phoneRes;

    /**
     * @var string
     *
     * @ORM\Column(name="phone_com", type="string", length=13)
     */
    private $phoneCom;

    /**
     * @var string
     *
     * @ORM\Column(name="phone_cel", type="string", length=14)
     */
    private $phoneCel;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer")
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="street", type="string", length=60)
     */
    private $street;

    /**
     * @var string
     *
     * @ORM\Column(name="number", type="string", length=20)
     */
    private $number;

    /**
     * @var string
     *
     * @ORM\Column(name="complement", type="string", length=20)
     */
    private $complement;

    /**
     * @var string
     *
     * @ORM\Column(name="neighborhood", type="string", length=60)
     */
    private $neighborhood;

    /**
     * @var integer
     *
     * @ORM\Column(name="city_id", type="integer")
     */
    private $cityId;

    /**
     * @var integer
     *
     * @ORM\Column(name="state_id", type="integer")
     */
    private $stateId;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="text")
     */
    private $comment;

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
     * Set name
     *
     * @param string $name
     *
     * @return Tenant
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
     * Set email
     *
     * @param string $email
     *
     * @return Tenant
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
     * Set rg
     *
     * @param string $rg
     *
     * @return Tenant
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
     * Set cpf
     *
     * @param string $cpf
     *
     * @return Tenant
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
     * Set phoneRes
     *
     * @param string $phoneRes
     *
     * @return Tenant
     */
    public function setPhoneRes($phoneRes)
    {
        $this->phoneRes = $phoneRes;

        return $this;
    }

    /**
     * Get phoneRes
     *
     * @return string
     */
    public function getPhoneRes()
    {
        return $this->phoneRes;
    }

    /**
     * Set phoneCom
     *
     * @param string $phoneCom
     *
     * @return Tenant
     */
    public function setPhoneCom($phoneCom)
    {
        $this->phoneCom = $phoneCom;

        return $this;
    }

    /**
     * Get phoneCom
     *
     * @return string
     */
    public function getPhoneCom()
    {
        return $this->phoneCom;
    }

    /**
     * Set phoneCel
     *
     * @param string $phoneCel
     *
     * @return Tenant
     */
    public function setPhoneCel($phoneCel)
    {
        $this->phoneCel = $phoneCel;

        return $this;
    }

    /**
     * Get phoneCel
     *
     * @return string
     */
    public function getPhoneCel()
    {
        return $this->phoneCel;
    }

    /**
     * Set status
     *
     * @param integer $status
     *
     * @return Tenant
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set street
     *
     * @param string $street
     *
     * @return Tenant
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
     * Set number
     *
     * @param string $number
     *
     * @return Tenant
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
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set complement
     *
     * @param string $complement
     *
     * @return Tenant
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
     * Set neighborhood
     *
     * @param string $neighborhood
     *
     * @return Tenant
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
     * Set cityId
     *
     * @param integer $cityId
     *
     * @return Tenant
     */
    public function setCityId($cityId)
    {
        $this->cityId = $cityId;

        return $this;
    }

    /**
     * Get cityId
     *
     * @return integer
     */
    public function getCityId()
    {
        return $this->cityId;
    }

    /**
     * Set stateId
     *
     * @param integer $stateId
     *
     * @return Tenant
     */
    public function setStateId($stateId)
    {
        $this->stateId = $stateId;

        return $this;
    }

    /**
     * Get stateId
     *
     * @return integer
     */
    public function getStateId()
    {
        return $this->stateId;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return Tenant
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
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

