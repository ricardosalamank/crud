<?php
class Database
{
    public static function StartUp()
    {

        $pdo = new PDO('mysql:host=localhost;dbname=pruebadev;charset=utf8;port=3307', 'root', 'usbw');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }
}