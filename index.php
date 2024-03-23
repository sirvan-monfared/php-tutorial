<?php
/*-------- 4 Pillars of OOP ---------*/

// 1. Encapsulation
// 1. Public Interface (API)
// 2. Internal Methods and properties (Pivate)
require('BankAccount.php');

$account = new BankAccount();
// $account->password = '123456789';
// $account->login('123456789');
$account->getLoan(50000);

$account->getBalance();

$account->setUsername('sirvan');



// 2. Abstraction






// 3. Inheritance







// 4. Polymorphism