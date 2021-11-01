<?php
	class Connection{
		public static function getConnect(){
			try {
				@$conn = mysqli_connect("localhost", "root","", "ex1");
			} catch (Exception $e) {
				echo 'a',  $e->getMessage(), "\n";
			}finally{
				if ($conn){
					$conn = mysqli_connect("localhost", "root","", "ex1");
					return $conn;
				}else{
					include "db/create_database.php";
					include "db/create_table.php";
					$conn = mysqli_connect("localhost", "root","", "ex1");
					return $conn;	
				}	
			}
		}
	}
?>