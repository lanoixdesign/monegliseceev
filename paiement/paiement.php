<?php
require 'vendor/autoload.php';
$key = require ('config.php');

    $solde = $_POST['montant'];
    $nomClient = $_POST['nom'];
    if (!empty($solde) && is_numeric($solde)) {
        try {
            \Stripe\Stripe::setApiKey($key['key']);

            \Stripe\Customer::create(array(
                "description" => 'client',
                "email" => "contact@ceev.fr",

            ));
            if (!empty($nomClient)){
                $Charge = \Stripe\Charge::create(array(
                    "amount" => $solde * 100,
                    "currency" => "eur",
                    "description" => $nomClient,
                    "source" => $_POST['stripeToken'],
                ));
            } else {
                $Charge = \Stripe\Charge::create(array(
                    "amount" => $solde * 100,
                    "currency" => "eur",
                    "source" => $_POST['stripeToken'],
                ));
            }

            require 'messageValider.php';

        } catch(\Stripe\Exception\CardException $e) {
            // Since it's a decline, \Stripe\Exception\CardException will be caught
            require 'messageErreur.php';
        } catch (\Stripe\Exception\RateLimitException $e) {
            // Too many requests made to the API too quickly
            require 'messageErreur.php';
        } catch (\Stripe\Exception\InvalidRequestException $e) {
            // Invalid parameters were supplied to Stripe's API
            require 'messageErreur.php';
        } catch (\Stripe\Exception\AuthenticationException $e) {
            // Authentication with Stripe's API failed
            // (maybe you changed API keys recently)
            require 'messageErreur.php';
        } catch (\Stripe\Exception\ApiConnectionException $e) {
            // Network communication with Stripe failed
            require 'messageErreur.php';
        } catch (\Stripe\Exception\ApiErrorException $e) {
            // Display a very generic error to the user, and maybe send
            // yourself an email
            require 'messageErreur.php';
        } catch (Exception $e) {
            // Something else happened, completely unrelated to Stripe
            require 'messageErreur.php';
        }

    }else{
        require 'messageErreur.php';
    }




?>

