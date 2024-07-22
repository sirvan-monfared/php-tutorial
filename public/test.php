<?php

abstract class NewGateway {

    public function image() {
        return  "/images/gateways/". strtolower(basename($this::class)) .".png";
    }

    abstract public function getGatewayToken();

    abstract public function verify($amount);
}

class Mellat extends NewGateway
{
    public function getGatewayToken()
    {
        echo 'Connecting To Mellat Gateway...';
    }

    public function verify($amount)
    {
        // TODO: Implement verify() method.
    }
}
class Parsian extends NewGateway
{

    public function getGatewayToken()
    {
        // TODO: Implement getGatewayToken() method.
    }

    public function verify($amount)
    {
        // TODO: Implement verify() method.
    }
}
class IdPay extends NewGateway
{

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
    public function pay(NewGateway $gateway)
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

//echo (new NewGateway())->image();

