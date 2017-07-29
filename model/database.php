<?php
class Database {
    private static $dsn = 'mysql:host=sql1.njit.edu;dbname=pg376';
    private static $username = 'pg376';
    private static $password = 'oOA310Yzl';
    private static $db;

    private function __construct() {}

    public static function getDB () {
        if (!isset(self::$db)) {
            try {
                self::$db = new PDO(self::$dsn,
                                     self::$username,
                                     self::$password);
            } catch (PDOException $e) {
                $error_message = $e->getMessage();
                include('../errors/database_error.php');
                exit();
            }
        }
        return self::$db;
    }
}
?>