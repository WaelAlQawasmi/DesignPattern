<?php
namespace Payment;


class PaymentApp {
    public function pay (int $euro){
        $payment = new PaymentAdapter();
        $payment->pay($euro);
    }
}