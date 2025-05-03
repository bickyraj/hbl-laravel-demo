<?php

namespace App\Http\Controllers;

use Bickyraj\Hbl\Api\HblPayment;
use Bickyraj\Hbl\Api\PaymentObject;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function storePaymentFromFooter(Request $request) {
        $paymentObj = new PaymentObject();
        $paymentObj->setOrderNo("123");
        $paymentObj->setAmount("100");
        $paymentObj->setSuccessUrl("https://localhost:8000/success");
        $paymentObj->setCancelUrl("https://localhost:8000/success");
        $paymentObj->setBackendUrl("https://localhost:8000/success");
        $paymentObj->setFailedUrl("https://localhost:8000/success");
        $paymentObj->setCustomFields([
            "refId" => "123"
        ]);
        HblPayment::pay($paymentObj);

    }
}
