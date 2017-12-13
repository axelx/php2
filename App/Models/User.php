<?php


namespace App\Models;


use App\Db;

class User
{
    public $email;
    public $name;

    public static function findAll()
    {

        $db = new Db();
        return $db->query(
            'SELECT * FROM users',
            self::class
        );


    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }
    /**
     * @return mixed
     */
    public function getClass()
    {
        return self::class;
    }


}