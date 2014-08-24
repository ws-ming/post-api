<?php namespace pos\Managers;

use pos\Exceptions\PosException;
use pos\Exceptions\PosErrorMessage;
use Webshaper\Core\Exception\WSException;
use Webshaper\Core\Support\ErrorCode;

/**
 * Handle all the administrator works, such as register the store to the post service
 * Class AdminManager
 * @package ws
 */
class AdminManager extends BaseManager{


    public function subscribePostService($storeUrl, $activated_by='default'){
        //check the store is exists
        if(!\WSHelper::isStoreExists($storeUrl)){
            throw new WSException(ErrorCode::STORE_NOT_FOUND);
        }

        //generate activate pin
        $activatePin = rand(1000,9999);

        if($this->helper->isSubscribed($storeUrl)){
            throw new PosException(PosErrorMessage::HAS_SUBSCRIBED);
        }
        $subscriber = new \Subscriber();
        $subscriber->store_url = $storeUrl;
        $subscriber->activate_pin = $activatePin;
        $subscriber->activated = true;
        $subscriber->activated_by = $activated_by;

        $subscriber->save();

    }

    public function unsubscribePostService($storeUrl){
        //remove the store from database
        $subscriber = \Subscriber::where('store_url',$storeUrl)->first();
        $subscriber->activated = false;
        $subscriber->save();

    }

    public function addPosUserGroup($storeUrl){

    }

}