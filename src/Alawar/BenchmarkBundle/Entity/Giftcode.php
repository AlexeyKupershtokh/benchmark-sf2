<?php

namespace Alawar\BenchmarkBundle\Entity;

use Doctrine\ORM\Mapping\Entity as Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\Table;
use Doctrine\ORM\Mapping\Column;

/**
 * @Entity @Table(name="f2p_giftcode")
 **/
class Giftcode
{
    /**
     * @Id @Column(type="integer")
     * @GeneratedValue
     * @var int
     */
    protected $id;

    /**
     * @Column(name="giftcode", type="string")
     * @var string
     */
    protected $giftcode;

    /**
     * @Column(name="uid", type="string", nullable=true)
     * @var string
     */
    protected $uid;

    /**
     * @Column(name="appid", type="string")
     * @var string
     */
    protected $appid;

    /**
     * @Column(name="type", type="string")
     * @var string
     */
    protected $type;

    /**
     * @Column(name="valid", type="boolean")
     * @var bool
     */
    protected $valid;

    /**
     * @Column(name="validFrom", type="integer", nullable=true)
     * @var int
     */
    protected $validFrom;

    /**
     * @Column(name="validTo", type="integer", nullable=true)
     * @var int
     */
    protected $validTo;

    /**
     * @Column(name="deleted", type="boolean")
     * @var bool
     */
    protected $deleted;

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
     * Set giftcode
     *
     * @param string $giftcode
     * @return Giftcode
     */
    public function setGiftcode($giftcode)
    {
        $this->giftcode = $giftcode;

        return $this;
    }

    /**
     * Get giftcode
     *
     * @return string
     */
    public function getGiftcode()
    {
        return $this->giftcode;
    }

    /**
     * Set uid
     *
     * @param string $uid
     * @return Giftcode
     */
    public function setUid($uid)
    {
        $this->uid = $uid;

        return $this;
    }

    /**
     * Get uid
     *
     * @return string
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Set appid
     *
     * @param string $appid
     * @return Giftcode
     */
    public function setAppid($appid)
    {
        $this->appid = $appid;

        return $this;
    }

    /**
     * Get appid
     *
     * @return string
     */
    public function getAppid()
    {
        return $this->appid;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return Giftcode
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set valid
     *
     * @param boolean $valid
     * @return Giftcode
     */
    public function setValid($valid)
    {
        $this->valid = $valid;

        return $this;
    }

    /**
     * Get valid
     *
     * @return boolean
     */
    public function getValid()
    {
        return $this->valid;
    }

    /**
     * Set validFrom
     *
     * @param integer $validFrom
     * @return Giftcode
     */
    public function setValidFrom($validFrom)
    {
        $this->validFrom = $validFrom;

        return $this;
    }

    /**
     * Get validFrom
     *
     * @return integer
     */
    public function getValidFrom()
    {
        return $this->validFrom;
    }

    /**
     * Set validTo
     *
     * @param integer $validTo
     * @return Giftcode
     */
    public function setValidTo($validTo)
    {
        $this->validTo = $validTo;

        return $this;
    }

    /**
     * Get validTo
     *
     * @return integer
     */
    public function getValidTo()
    {
        return $this->validTo;
    }

    /**
     * Set deleted
     *
     * @param boolean $deleted
     * @return Giftcode
     */
    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;

        return $this;
    }

    /**
     * Get deleted
     *
     * @return boolean
     */
    public function getDeleted()
    {
        return $this->deleted;
    }
}
