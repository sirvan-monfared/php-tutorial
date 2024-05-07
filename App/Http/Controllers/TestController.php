<?php

namespace App\Http\Controllers;

use App\Helpers\Gateway;

class TestController extends BaseController
{
    public function index()
    {
        $gateway = new Gateway(true);

        $response = $gateway->start();
        // ['result' => $result, 'httpCode' => $httpCode] = $gateway->start();

        $httpCode = $response['httpCode'];
        $result = $response['result'];

        if ($httpCode === 201 && $result->link) {
            redirectTo($result->link);
        }

        // TODO :: handle error status

    }

    public function callback()
    {
        $gateway =  new Gateway(true);

        $response = $gateway->verify($_POST['id'], $_POST['order_id']);

        $result = $response['result'];
        $httpCode = $response['httpCode'];

        if ($httpCode === 200 && $result->status === 100) {
            dd('yessss');
        } else {
            dd('noooo');
        }
    }
}