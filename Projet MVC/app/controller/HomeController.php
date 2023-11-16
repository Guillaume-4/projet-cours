<?php
class HomeController {
 private $model;
 public function __construct($model) {
 $this->model = $model;
 }
 public function index() {
 $users = $this->model->getUsers();
 // Code pour charger la vue et passer les données des utilisateurs
 }
}
?>