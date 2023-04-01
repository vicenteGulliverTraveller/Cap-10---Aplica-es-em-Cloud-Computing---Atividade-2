<?php
abstract class Connection {
    private static $conn;

    public static function getConnection(){
        if (!self::$conn) {
            
            self::$conn = new PDO('mysql:host=localhost;dbname=viajante', 'root', '');
        }

        return self::$conn;
    }
}
