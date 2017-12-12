<?php
/**
 * Created by PhpStorm.
 * User: HP11
 * Date: 12.12.2017
 * Time: 9:16
 */

namespace App;


class Db
{
    protected $dbh;
    public function __construct()
    {
        $this->dbh = new \PDO('mysql:host=127.0.0.1;dbname=profit', 'root', '');
    }
    public function execute($sql)
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute();
        return $res;
    }
}