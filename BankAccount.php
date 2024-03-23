<?php
class BankAccount {
    private $username;
    private $password = '12345';
    private $transactions = [];
    private $balance = 0;

    public function login($userInput) {
        if ($this->password === $userInput) {
            // login user
            return true;
        }

        return false;
    }

    public function deposit($amount) {
        $this->transactions[] = [
            'action' => 'deposit',
            'value' => $amount
        ];

        $this->balance += $amount;
    }

    public function withdraw($amount) {
        $this->transactions[] = [
            'action' => 'withdraw',
            'value' => $amount
        ];

        $this->balance -= $amount;
    }

    public function getBalance() {
        return $this->balance;
    }

    public function setUsername($username) {
        $this->username = $username;
    }

    public function getLoan($amount) {
        // check for user credit from transaction property
        // $this->transaction
        // $this->balanace
        if ($this->checkCredit()) {
            $this->deposit($amount);
            return true;
        }

        return false;
    }

    private function checkCredit() {

    }
}