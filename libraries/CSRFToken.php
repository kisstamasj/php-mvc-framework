<?php

namespace libraries;

class CSRFToken
{
    /**
     * This function generate CSRF Token to SESSION
     *
     * @return void
     */
    public static function generateToken()
    {
        $_SESSION['CSRF_TOKEN'] = bin2hex(openssl_random_pseudo_bytes(32));
    }

    /**
     * This function check token
     *
     * @return blooean
     */
    public static function validToken()
    {
        $header = apache_request_headers();
        if(!isset($_SESSION['CSRF_TOKEN']) || !isset($header['CSRF_TOKEN']) || $header['CSRF_TOKEN'] != $_SESSION['CSRF_TOKEN']){
            return false;
        }

        return true;
    }
}