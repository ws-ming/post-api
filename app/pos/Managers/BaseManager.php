<?php namespace pos\Managers;

use pos\Helpers\Helper;

class BaseManager {
    protected $helper;
    function __construct(){
        $this->helper = new Helper();
    }
} 