<?php

require_once($_SERVER['DOCUMENT_ROOT'].'/projetweb_stapa/STAPA/model/configAccessDb.php');

// Nouvelle fonction qui nous permet d'éviter de répéter du code
function dbConnect()
{
    try
    {
        $db = new PDO('mysql:host='. DB_HOST .';dbname='. DB_NAME .';charset=utf8', DB_USER, DB_PASS);
        return $db;
    }
    catch(Exception $e)
    {
        die('Error : '.$e->getMessage());
    }
}
