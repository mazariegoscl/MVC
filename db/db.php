<?php
class db {
  protected $_db;
  protected $_dbdriver = "mysql";
  protected $_dbhost = "localhost";
  protected $_dbname = "";
  protected $_dbuser = "";
  protected $_dbpass = "";

  public function __construct() {
    try {
      $this->_db = new PDO($this->_dbdriver . ':host=' . $this->_dbhost . ';dbname=' . $this->_dbname, $this->_dbuser, $this->_dbpass);
      $this->_db->query("SET NAMES utf8;");
    }catch (PDOexception $e) {
      echo "Error: " . $e->getMessage();
    }
  }
}
?>
