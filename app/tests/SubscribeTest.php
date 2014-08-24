<?php 
class SubscribeTest extends TestCase{

    protected $adminManager;
    protected $helper;
    function __construct(){
        $this->adminManager = new \pos\Managers\AdminManager();
        $this->helper = new \pos\Helpers\Helper();
    }

//    public function test_subscribe(){
//           $this->adminManager->subscribePostService('igemilang.com');
//    }
} 