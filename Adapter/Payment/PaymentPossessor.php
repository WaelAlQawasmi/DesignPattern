<?php
namespace  Payment;
class PaymentPossessor implements PaymentPossessorImp {
    public function pay (int $dollar){
        echo " You paid $dollar dollars successfully";
    }

}