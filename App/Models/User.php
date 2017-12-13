<?php


namespace App\Models;


//use App\Db;
use App\Models;

class User extends Models
{
    public $email;
    public $name;

    public static $table = 'users';
    const TABLE = 'users';

    public function getName()
    {
        // TODO: Implement getName() method.


//        $db = new Db() ;
    }


}