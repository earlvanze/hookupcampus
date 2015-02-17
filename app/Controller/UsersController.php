<?php
class UsersController extends AppController{
	public function login(){
		$this->loadModel("Campus");
		$campuses = $this->Campus->find("list");
		$this->set(compact("campuses"));
	}
}
?>