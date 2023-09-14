<?php

namespace Modules\Payment\Gateways;

use Illuminate\Http\Request;
use Modules\Order\Entities\Order;
use Modules\Payment\GatewayInterface;
use Modules\Payment\Responses\RazerpayResponse;

class Razerpay implements GatewayInterface
{
    public $label;
    public $description;

    public function __construct()
    {
        $this->label = setting('razerpay_label');
        $this->description = setting('razerpay_description');
        $this->instructions = setting('razerpay_instructions');
    }

    public function client()
    {
        $apiCreds   =   array('apiKey'  =>  setting('razerpay_key_id'),
                            'apiSecret' =>  setting('razerpay_key_secret'));
        return json_encode($apiCreds);
    }

    public function purchase(Order $order, Request $request)
    {
        $razerpayOrder = $this->client()->order->create([
            'receipt' => $order->id,
            'amount' => $order->total->convertToCurrentCurrency()->subunit(),
            'currency' => currency(),
            'payment_capture' => true,
        ]);

        return new RazerpayResponse($razerpayOrder);
    }

    public function complete(Order $order)
    {
        /*$attributes = [
            'razerpay_payment_id' => request('razerpay_payment_id'),
            'razerpay_order_id' => request('razerpay_order_id'),
            'razerpay_signature' => request('razerpay_signature'),
        ];

        $this->client()->utility->verifyPaymentSignature($attributes);

        $razerpayOrder = new RazerpayOrder;
        $razerpayOrder->fill($attributes);

        return new RazerpayResponse($razerpayOrder);*/
    }
}
