<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome {
    function welcome_name($nama) {
        echo "Hello, <b>".$nama."</b> Welcome";
    }

    function myEmail($email) {
        echo "Your email is, <b>".$email."</b>";
    }
}