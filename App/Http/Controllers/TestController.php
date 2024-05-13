<?php

namespace App\Http\Controllers;

use App\Helpers\Gateway;
use App\Models\User;

class TestController extends BaseController
{
    public function index()
    {
        $data = [
            'name' => '111',
            'last_name' => 22,
            'phone' => 333,
            'password' => '4444',
            'email' => '555',
            'address' => '6666'
        ];


        dd((new User())->insert($data));

        $gateway = new Gateway(true);

        $response = $gateway->start();
        // ['result' => $result, 'httpCode' => $httpCode] = $gateway->start();

        $httpCode = $response['httpCode'];
        $result = $response['result'];

        if ($httpCode === 201 && $result->link) {
            redirectTo($result->link);
        }

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