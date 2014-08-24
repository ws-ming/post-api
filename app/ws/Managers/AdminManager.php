<?php namespace ws\Managers;

/**
 * Handle all the administrator works, such as register the store to the post service
 * Class AdminManager
 * @package ws
 */
class AdminManager {


    public function subscribePostService($storeName){
        //check the store is exists
        if(!WSHelper::isStoreExists($storeName)){
        }
        //generate activate pin

        //store in to database
        //store to store db as well
    }

    public function unsubscribePostService($storeName){
        //remove the store from database
    }


}