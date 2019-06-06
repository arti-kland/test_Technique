<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;


const currentPrice = 1000 ;

class CouponValueController extends CouponsController
{


    public function __construct()
    {

    }

    public function createCoupn(){
        $typeCoupon = Input::get("euros");
        $typeCoupon = Input::get("pourcentage");
        if($typeCoupon === euros){
            $this->createCouponValue();
        }else{
            $this->createCouponPourcentage();
        }
    }

    public function createCouponValue(){

        $nbCoupon = Input::get('numberOfCoupon');
        $coupons = [];
        for($i=0; $i < $nbCoupon; $i++){
        $coupon = new CouponValueController();

        $coupon->setTypeCoupon(Input::get("euros"));
        $coupon->setIdCoupon(rand(1, 20000));
        $coupon->setDiscountValue(Input::get('value'));
        $coupon->setValidDate(Input::get('limitDate'));
        $coupon->setNumOfCoupon(Input::get('numberOfCoupon'));
        var_dump($coupons);
        array_push($coupons, $coupon);
        }

        /** @var TYPE_NAME $coupon */
        return view('welcome', ['coupon' => $coupon, 'coupons' => $coupons] );
    }
    public function createCouponPourcentage(){

        $nbCoupon = Input::get('numberOfCoupon');
        $coupons = [];
        for($i=0; $i < $nbCoupon; $i++){
            $coupon = new CouponValueController();

            $coupon->setTypeCoupon(Input::get("euros"));
            $coupon->setIdCoupon(rand(1, 20000));
            $coupon->setDiscountValue(Input::get('value'));
            $coupon->setValidDate(Input::get('limitDate'));
            $coupon->setNumOfCoupon(Input::get('numberOfCoupon'));
            var_dump($coupons);
            array_push($coupons, $coupon);
        }

        /** @var TYPE_NAME $coupon */
        return view('welcome', ['coupon' => $coupon, 'coupons' => $coupons] );
    }

    public function testCoupon($coupons){
        $userIdCoupon = Input::get('userIdCoupon');
        $userUseDate = date('Y/m/d');
        foreach ($coupons as $coupon){
            if($userIdCoupon === $this->getIdCoupon()){
               compareDate($userUseDate, $coupon);
                if ($this->getUnUsedCoupon() === true && $this->getValidCoupon() === true && $userUseDate < $this->getValidDate() ) {
                    if($this->getTypeCoupon() === "euros") {
                        $newPrice = $coupon->currentPrice - $this->getDiscountValue();
                        $coupon->setUnUsedCoupon(false);
                        alert("Le montant de votre facture et de : " . $newPrice);
                        return view('welcome', ['coupon' => $coupon]);
                    }else{
                        $tempDiscount = $this->getDiscountValue();
                        $discount = ($tempDiscount * currentPrice) / 100;


                        $newPrice = $coupon->currentPrice - $discount;
                        $coupon->setUnUsedCoupon(false);
                        alert("Le montant de votre facture et de : " . $newPrice);
                        return view('welcome', ['coupon' => $coupon]);
                    }
                }
            }else {
                alert("Votre numéro de coupon n'est pas valid, veuillez recommencer !");
            }
        }
    }

    public function compareDate($userUseDate, $coupon){

        //explode pour mettre la date du fin en format numerique: 2019/12/31  -> 20191231
        $finab = explode("/", $coupon->getValidDate());
        $auj = explode("/", $userUseDate);

        if ($auj>$finab)
        {
            echo "Votre coupon à expiré !";
            return false;
        }
        else
        {
            echo "Votre coupon est accepté !";
            return true;
        }
    }
}
