<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Srmklive\PayPal\Services\PayPal as PayPalClient;

class PayPalController extends Controller
{
    public function createPayment(Request $request)
    {
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $paypalToken = $provider->getAccessToken();

        $data = [
            'intent' => 'CAPTURE',
            'application_context' => [
                "return_url" => route('paypal.success'),
                "cancel_url" => route('paypal.cancel')
            ],
            "purchase_units" => [
                [
                    "amount" => [
                        "currency_code" => "USD",
                        "value" => "80.00",
                        "breakdown" => [
                            "item_total" => [
                                "currency_code" => "USD",
                                "value" => "80.00"
                            ],
                            "tax_total" => [
                                "currency_code" => "USD",
                                "value" => "0.00"
                            ]
                        ]
                    ],
                    "items" => [
                        [
                            "name" => "Laptop",
                            "quantity" => "1",
                            "description" => "14-inch laptop with 256GB SSD",
                            "sku" => "LAP123",
                            "url" => "https://example.com/laptop",
                            "category" => "PHYSICAL_GOODS",
                            "image_url" => "https://example.com/images/laptop.jpg",
                            "unit_amount" => [
                                "currency_code" => "USD",
                                "value" => "70.00"
                            ],
                            "tax" => [
                                "currency_code" => "USD",
                                "value" => "0.00"
                            ]
                            ],
                            [
                                "name" => "Laptop 242353",
                                "quantity" => "1",
                                "description" => "14-inch laptop with 2434 SSD",
                                "sku" => "LAP123",
                                "url" => "https://example.com/laptop",
                                "category" => "PHYSICAL_GOODS",
                                "image_url" => "https://example.com/images/laptop.jpg",
                                "unit_amount" => [
                                    "currency_code" => "USD",
                                    "value" => "10.00"
                                ],
                                "tax" => [
                                    "currency_code" => "USD",
                                    "value" => "0.00"
                                ]
                            
                        ]
                    ],
                ]
            ]
        ];

        $response = $provider->createOrder($data);
        // dd($response);

        if (!empty($response['id'])) {
            foreach ($response['links'] as $link) {
                if ($link['rel'] == 'approve') {
                    return redirect()->away($link['href']);
                }
            }
        } else {
            return redirect()->route('paypal.cancel');
        }
    }

    public function paymentSuccess(Request $request)
    {
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $paypalToken = $provider->getAccessToken();
        $response = $provider->capturePaymentOrder($request->token);

        $order = $provider->showOrderDetails($request->token);

        if (isset($response['status']) && ($response['status'] == 'COMPLETED')) {
            // Insert data in Database


            return 'Payment success';
            // return redirect()->route('payment.success')->with('message', 'Payment success');

            // Delete product from cart and khi nhấn vào sản phẩm đã mua thì hiện chữ "Download" thay vì "Add to cart"
            // TO DO: Send email or notification to customer
        } else {
            return redirect()->route('payment.cancel');
        }
    }

    public function paymentCancel()
    {
        return 'Payment canceled';
        // return redirect()->route('payment.cancel')->with('message', 'Payment canceled');
    }
}
