<?php
class Database {
  private static $servername = "localhost";
  private static $username = "root";
  private static $password = "";
  private static $dbname = "projet";
  private static $conn = NULL;

  public static function getConnection() {
    if (self::$conn == NULL) {
      self::$conn = new mysqli(self::$servername, self::$username, self::$password, self::$dbname);
      if (self::$conn->connect_error) {
        die("Connection failed: " . self::$conn->connect_error);
      }
    }
    return self::$conn;
  }

  public static function closeConnection() {
    if (self::$conn != NULL) {
      self::$conn->close();
      self::$conn = NULL;
    }
  }
}
?>