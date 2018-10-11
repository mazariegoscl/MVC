<?php
class users_model extends db {
  public function __construct() {
    parent::__construct();
  }

  public function get_states() {
    $query = $this->_db->prepare("SELECT * FROM states");
    $query->execute();
    $rows = array();
    while($row = $query->fetch()) {
        $rows[] = $row;
    }
    return $rows;
  }
}
?>
