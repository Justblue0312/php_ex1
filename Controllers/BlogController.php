<?php
	//lay duong dan tu Models
	include "Models/BlogModel.php";
	class BlogControllers{
		use BlogModel;
		
		public function __construct(){
			//lay action từ view
			$action = isset($_GET["action"])?$_GET["action"]:"admin";
			switch($action){
				default:
				// trỏ read() từ model và gán vào biến
				$page 	=$this->paginator();
				$result = $this->read();
				//in ra thông tin
				include "View/admin.php";
				break;
			case 'delete':
				$this->delete();
				header("location:index.php");
				break;	
			case 'add':
				//$result = $this->read();
				$this->add();	
				include "View/add.php"; 
				break;
			case 'Edit':
				$row=$this->edit();
				include "View/Edit.php";
				$this->editpost();
				break;
			case 'userpost':
				$result = $this->userpost();
				include"View/userpost.php";
				break;
			case 'user':
				$page 	=$this->paginator();
				$result = $this->read();
				include "View/user.php";
			case 'show':
				$rows= $this->show();
				include "View/show.php";
				break;
			}
		}
	}
	new BlogControllers();
?>