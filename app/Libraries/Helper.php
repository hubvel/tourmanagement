<?php

namespace App\Libraries;

class Helper {
    public static function vehiclesLists($key = null) {
        $vehicles = [
            'plan' => 'Plan',
            'train' => 'Train',
            'oto' => 'Oto',
            'moto' => 'Moto',
            'others' => 'Others'
        ];

        if( !empty($key) && array_key_exists($key, $vehicles) ) {
            return $vehicles[$key];
        }
        else{
            return $vehicles;
        }
    }
    
}
