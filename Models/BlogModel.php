<?php
	date_default_timezone_set('UTC');
	trait BlogModel{
		public function show(){
			$conn=Connection::getConnect();
			$id=$_GET['id'];
			$query=mysqli_query($conn,"select * from `blog` where id='$id'");
			$row=mysqli_fetch_assoc($query);
			return $row;
		}

		public function read(){
			$conn=Connection::getConnect();
			if (isset($_GET['page'])) {
				$page = $_GET['page'];
			}
			else{
				$page=1;
			}
			$row =5;
			$from 	= ($page - 1)* $row;//vị trí lấy ra bản ghi
			$sql    = "SELECT *FROM blog limit $from,$row ";
			$result = $conn->query($sql);
			return $result;
		}
		public function add(){
			$conn=Connection::getConnect();
			if (isset($_POST['subm'])) {
			$title 		= $_POST['title'];
			$description= $_POST['description'];
			$create_at = date('Y-m-d H:i:s');  
			
			$photo= "";
			if($_FILES["image"]["name"] != ""){
				
				$photo = $_FILES["image"]["name"];
				//thuc hien upload file
				move_uploaded_file($_FILES["image"]["tmp_name"],"static/$photo");
			}

			$status		= $_POST['status'];	
			$sql 		= "insert into blog(title,description,image,status,create_at) 
			values('$title','$description','$photo','$status','$create_at') ";
			$result = $conn->query($sql);
			
			header("location:index.php");
			}
		}
		public function delete(){
			$conn=Connection::getConnect();
			$id 	= $_GET['id'];
			$result = $conn->query("delete from blog where id ='$id'")or die("Lỗi truy vẫn");
		}
		public function edit(){
			$conn=Connection::getConnect();
			$id=$_GET['id'];
			$query=mysqli_query($conn,"select * from `blog` where id='$id'");
			$row=mysqli_fetch_assoc($query);
			return $row;
		}
		public function editpost(){
			$conn=Connection::getConnect();
			$row=$this->edit();
			if (isset($_POST['Update'])) {

				$id 	= $_GET['id'];
				$title	= $_POST['title'];
				$descrip= $_POST['description'];
				$updated_at = date('Y-m-d H:i:s');

				
				if($_FILES["image"]["name"] == ""){
					$photo = $row['image'];
				
				}else{
					$photo = $_FILES["image"]["name"];
					move_uploaded_file($_FILES["image"]["tmp_name"],"static/$photo");
				}

				$status	= $_POST['status'];	
				$sql  	="update blog set title = '$title',description='$descrip', image='$photo',status='$status',update_at='$updated_at' where id='$id'" ;
				$result = $conn->query($sql);
				header("location:index.php");
			}
		}
		public function userpost(){
		    $id=$_GET['id'];
		    $conn=Connection::getConnect();
		    $sql    = "SELECT *FROM blog where id ='$id'";
		    $result = $conn->query($sql);
		    return $result;
		}
		public function paginator(){
			$conn=Connection::getConnect();
		    
		    $query=mysqli_query($conn,"select * from `blog` ");
		    $arr=array();
		    while ($row=mysqli_fetch_assoc($query)) {
		        $arr[]=$row;
		    }
		    $count   =  count($arr);
		    $grouppage=5;
		    $page    = ceil($count/$grouppage);
		    return $page;
		}

	}	
?>