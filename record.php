<?php

var_dump($_POST);

$pdo = new PDO("mysql:host=127.0.0.1; dbname=g031o167; charset=utf8", 'root', 'devfnit');

$sql = "select * from users";

$res = $pdo->query($sql, $pdo)->fetch();

var_dump($res);
