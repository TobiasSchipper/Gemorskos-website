<?php

class Database {
    private static $connection;

    public static function getConnection() {
        if (!self::$connection) {
            self::$connection = new PDO('mysql:host=localhost;dbname=germorskos_db', 'root', '');
            self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        return self::$connection;
    }
}
?>