<?php

require __DIR__ . '/autoload.php';

echo "<pre>";

//echo \App\Models\User::class;

echo "<br>";
//$db  = new \App\Db();

//$res = $db->execute('CREATE TABLE foo (id SERIAL)');

/*$data = $db->query(
    'SELECT * FROM users',
//    'App\Models\User'
    \App\Models\User::class
);*/

/*
$user = new \App\Models\User();
$users = $user->findAll();
*/

$users = \App\Models\User::findAll();

//echo $user->getClass();
//echo $user->getEmail();
echo "<br>";
echo "<br>";

var_dump($users);

//echo "hi Alexey";