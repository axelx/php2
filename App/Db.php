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

    /**
     * @return \PDO
     */
    public function query($sql, $class)
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute();
        if (false !== $res) {
//            return $sth->fetchAll(\PDO::FETCH_CLASS, 'App\\Models\\User');
            return $sth->fetchAll(\PDO::FETCH_CLASS, $class);
        }


        return [];
    }
}