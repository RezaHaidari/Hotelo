<?php

namespace App\libs;

class Menu{

    public static function fetchList(){

        $menu =  storage_path().'/app/menu/menu.json';
        $string = file_get_contents($menu);
        $list = json_decode($string, true);

        return $list;

    }


}