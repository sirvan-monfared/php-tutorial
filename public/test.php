<?php

interface Gateway
{
    public function getGatewayToken();

    public function verify($amount);
}

interface MustAuthenticate
{
    public function authenticate($username, $password);
}

class Mellat implements Gateway, MustAuthenticate
{
    public function image() {
        return  "/images/gateways/". strtolower(basename($this::class)) .".png";
    }

    public function getGatewayToken()
    {
        echo 'Connecting To Mellat Gateway...';
    }

    public function verify($amount)
    {
        $this->authenticate('safsaf', 'safsaf');
    }

    public function authenticate($username, $password) {
        echo "authenticating...";
    }

}
class Parsian implements Gateway
{
    public function image() {
        return "/images/gateways/". strtolower(basename($this::class)) .".png";
    }

    public function getGatewayToken()
    {
        echo 'Connecting To Parsian Gateway...';
    }

    public function verify($amount)
    {

    }
}
class IdPay implements Gateway
{
    public function image() {
        return "/images/gateways/". strtolower(basename($this::class)) .".png";
    }

    public function getGatewayToken()
    {
        echo 'Connecting To IdPay Gateway...';
    }

    public function verify($amount)
    {

    }
}

class Order
{
    public function pay(Gateway $gateway)
    {
        $gateway->getGatewayToken();

        $gateway->verify(32532);
    }
}

if ($_GET['gateway']) {
    $gateway_name = $_GET['gateway'];
    (new Order())->pay(new $gateway_name());

    echo (new $gateway_name())->image();
}

