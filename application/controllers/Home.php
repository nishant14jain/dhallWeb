<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home extends MY_Controller {

    public function index() {
        $this->middle = 'pages/home'; // its your view name, change for as per requirement.
        $this->layout();
    }

    public function machine() {
        $this->middle = 'pages/machine'; // its your view name, change for as per requirement.
        $this->layout();
    }      
    
    public function tbh(){
        $this->middle = 'pages/sandbox1'; // its your view name, change for as per requirement.
        $this->layout();
    }
    
    public function credit(){
        $this->middle = 'pages/credit'; // its your view name, change for as per requirement.
        $this->layout();
    }
}
