<?php
require_once("models/panel/users.php");
class users_controller {
  private $model;
  public function __CONSTRUCT() {
    $this->model = new users_model();
  }

  public function index() {
    isset($_SESSION['user']) ?
    header("Location: index.php?system=panel&controller=users&action=home") :
    header("Location: index.php?system=panel&controller=users&action=login");
  }

  public function login() {
    require_once("views/panel/login.php");
  }

  public function get_states() {
    $info = $this->model->get_states();
    require_once("views/panel/states.php");
  }
}
?>
