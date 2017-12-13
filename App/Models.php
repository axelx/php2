<?php
/**
 * Created by PhpStorm.
 * User: HP11
 * Date: 13.12.2017
 * Time: 10:51
 */

namespace App;




class Models
{
    const TABLE = '';


    public static function findAll()
    {

        $db = new Db();
        return $db->query(
            'SELECT * FROM ' . static::TABLE,
            static::class
        );


    }
}