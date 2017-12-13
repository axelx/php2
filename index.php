<?php

require __DIR__ . '/autoload.php';

echo "<pre>";


echo "<br>";

$users = \App\Models\User::findAll();

echo \App\Models\User::$table;
echo "<br>";
echo "<br>";
echo \App\Models\User::TABLE;
echo "<br>";

var_dump($users);

//echo "hi Alexey";