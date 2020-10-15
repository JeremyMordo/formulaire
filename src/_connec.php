<?php

$dns = "mysql:host=localhost;dbname=pdo_quest";
$user ="jeremy";
$pass = "Megalol88!";


try
    {
        $pdo = new PDO($dns, $user, $pass);
    }
    catch(Exception $e)
    {
        echo'Error!: ' . $e->getMessage() . '<br\>';
        die();
    }