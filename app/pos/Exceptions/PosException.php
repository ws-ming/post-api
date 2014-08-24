<?php namespace pos\Exceptions;

use Webshaper\Core\Exception\BaseException;

class PosException extends BaseException{

    public function __construct($errorCode){
        parent::__construct($errorCode);
    }
}