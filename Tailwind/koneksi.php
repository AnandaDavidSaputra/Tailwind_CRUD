<?php

class DB{
private static $host = "localhost";
private static $name = "root";
private static $password = "";
private static $db = "clases_ranks";

public static $conn;

public static function connect(){
self::$conn = mysqli_connect(self::$host, self::$name, self::$password, self::$db);

    return self::$conn;
}
}
?>