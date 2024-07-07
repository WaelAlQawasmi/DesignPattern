<?php
namespace Payment;

class PaymentAdapter {

    public function pay (int $euro){
        $dollars= $euro/1.08;
        $payment= new PaymentPossessor();
        $payment->pay($dollars);
    }
}