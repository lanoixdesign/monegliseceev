<?php
require 'vendor/autoload.php';
$key = require ('config.php');

    $solde = $_POST['montant'];
    if (!empty($solde) && is_numeric($solde)){
        \Stripe\Stripe::setApiKey($key['key']);

        \Stripe\Customer::create(array(
            "description"=>'client',
            "email" =>"jeandupont@test.fr"
        ));

        $Charge = \Stripe\Charge::create(array(
            "amount"=>$solde * 100 ,
            "currency"=>"eur",
            "source"=>$_POST['stripeToken'],
            "description"=>'client de monsite.com',
        ));

    var_dump($Charge->values());
    }




?>

