<?php

namespace App\Http\Controllers;

abstract Class CouponsController
{


    public $numOfCoupon;
    public $typeCoupon;
    public $idCoupon;
    public $discountValue;
    public $unUsedCoupon = true;
    public $validDate;
    public $validCoupon = true;


    /**
     * Coupons constructor.
     * @param $numOfCoupon
     * @param $currentPrice
     * @param $typeCoupon
     * @param $idCoupon
     * @param $discountValue
     * @param $unUsedCoupon
     * @param $useDate
     * @param $validDate
     * @param $validCoupon
     */
    public function __construct($numOfCoupon, $currentPrice, $typeCoupon, $idCoupon, $discountValue, $unUsedCoupon, $validDate, $validCoupon)
    {
        $this->numOfCoupon = $numOfCoupon;
        $this->currentPrice = $currentPrice;
        $this->typeCoupon = $typeCoupon;
        $this->idCoupon = $idCoupon;
        $this->discountValue = $discountValue;
        $this->unUsedCoupon = $unUsedCoupon;
        $this->validDate = $validDate;
        $this->validCoupon = $validCoupon;
    }


    /**
     * @return mixed
     */
    public function getNumOfCoupon()
    {
        return $this->numOfCoupon;
    }

    /**
     * @param mixed $numOfCoupon
     */
    public function setNumOfCoupon($numOfCoupon): void
    {
        $this->numOfCoupon = $numOfCoupon;
    }

    /**
     * @return int
     */
    public function getCurrentPrice(): int
    {
        return $this->currentPrice;
    }

    /**
     * @param int $currentPrice
     */
    public function setCurrentPrice(int $currentPrice): void
    {
        $this->currentPrice = $currentPrice;
    }

    /**
     * @return mixed
     */
    public function getTypeCoupon()
    {
        return $this->typeCoupon;
    }

    /**
     * @param mixed $typeCoupon
     */
    public function setTypeCoupon($typeCoupon): void
    {
        $this->typeCoupon = $typeCoupon;
    }
    /**
     * @return mixed
     */
    public function getDiscountValue()
    {
        return $this->discountValue;
    }

    /**
     * @param mixed $discountValue
     */
    public function setDiscountValue($discountValue)
    {
        $this->discountValue = $discountValue;
    }

    /**
     * @return string
     */
    public function getIdCoupon(): string
    {
        return $this->idCoupon;
    }

    /**
     * @param string $idCoupon
     */
    public function setIdCoupon(string $idCoupon): void
    {
        $this->idCoupon = $idCoupon;
    }


    /**
     * @return mixed
     */
    public function getUnUsedCoupon()
    {
        return $this->unUsedCoupon;
    }

    /**
     * @param mixed $unUsedCoupon
     */
    public function setUnUsedCoupon($unUsedCoupon)
    {
        $this->unUsedCoupon = $unUsedCoupon;
    }


    /**
     * @return mixed
     */
    public function getValidDate()
    {
        return $this->validDate;
    }

    /**
     * @param mixed $validDate
     */
    public function setValidDate($validDate)
    {
        $this->validDate = $validDate;
    }

    /**
     * @return mixed
     */
    public function getValidCoupon()
    {
        return $this->validCoupon;
    }

    /**
     * @param mixed $validCoupon
     */
    public function setValidCoupon($validCoupon)
    {
        $this->validCoupon = $validCoupon;
    }



}
