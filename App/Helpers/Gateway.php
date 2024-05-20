<?php

namespace App\Helpers;

class Gateway
{
    protected string $api_key;
    protected int $gateway_code;

    public function __construct(protected bool $sandbox = false)
    {
        $this->api_key = env('IDPAY_API_KEY');
        $this->gateway_code = 1; // 1 = idpay
    }

    public function start($payment_order_id): array
    {
        $user = auth()->user();

        $params = [
            'order_id' => $payment_order_id,
            'amount' => 10000,
            'name' => $user->name,
            'phone' => $user->phone,
            'mail' => $user->email,
            'desc' => '',
            'callback' => url('checkout.callback'),
        ];

        return $this->sendRequest('https://api.idpay.ir/v1.1/payment', $params);
    }


    public function verify(?string $id, ?string $order_id): array
    {
        $params = [
            'id' => $id,
            'order_id' => $order_id
        ];

        return $this->sendRequest('https://api.idpay.ir/v1.1/payment/verify', $params);
    }

    public function code(): int
    {
        return $this->gateway_code;
    }

    protected function sendRequest(string $url, array $params): array
    {
        $headers = [
            'Content-Type: application/json',
            "X-API-KEY: {$this->api_key}"
        ];
        if ($this->sandbox) {
            $headers[] = 'X-SANDBOX: 1';
        }

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($params));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $result = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        // TODO :: handle curl errors

        return [
            'result' => json_decode($result),
            'httpCode' => $httpCode
        ];
    }
}