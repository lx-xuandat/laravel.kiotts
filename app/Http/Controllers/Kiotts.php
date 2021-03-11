<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Kiotts extends Controller
{
    private static $selectOption = '<option value="0"> -- Root --</option>';
    private static $selectOptionLevel = '';
    public static function selectOption($categories, $parent_id = 0, $text = '')
    {
        $_categories = $categories;
        foreach ($_categories as $key => $value) {
            if ($value['parent_id'] == $parent_id) {
                self::$selectOption .=  '<option value="' . $value['id'] . '">'
                    . $text . $value['name']
                    . '</option>';
                unset($_categories[$key]);
                self::selectOption($_categories, $value['id'], $text . '&nbsp; &nbsp; &nbsp;');
            }
        }
        return self::$selectOption;
    }
}
