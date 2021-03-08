<?php

class AjaxModel extends Model{
	
	function __construct(){
		$this->model = new Model();
	}

	public function login($email,$senha){
		return $this->model->query("SELECT * FROM `usuarios` WHERE `email` = '$email' and `password` = md5($password);");
	}

}

?>