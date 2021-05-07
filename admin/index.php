<?php 
	session_start();
	// load file connection.php
	include "../application/Connection.php";
	// load file controller
	include "../application/Controller.php";
 ?>

 <?php 
 	$controller = isset($_GET["controller"]) ? $_GET["controller"]: "Home";
 	$action = isset($_GET["action"]) ? $_GET["action"]: "index";
 	// nối chuỗi để tạo thành file controller vật lý
 	$fileController = "controllers/$controller" . "Controller.php";
 	$classController = "$controller"."Controller";
 	if(file_exists($fileController)){
 		include $fileController;
 		//khởi tạo object
 		$obj = new $classController();
 		//gọi đến hàm trong object
 		$obj->$action();
 	}
  ?>