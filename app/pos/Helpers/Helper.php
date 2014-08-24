<?php namespace pos\Helpers;

class Helper {

    public static function isSubscribed($storeUrl){
        $count = \Subscriber::where('store_url',$storeUrl)->count();
        return $count > 0 ? true : false;
    }
} 