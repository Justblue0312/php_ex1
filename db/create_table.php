<?php  
//establish the connection
$link = mysqli_connect("localhost","root", "", "ex1");
//query statement
$sql = "CREATE TABLE blog (
		    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
		    title VARCHAR(500) NOT NULL,
		    description TEXT(500) NOT NULL,
		    image VARCHAR(500) NOT NULL,
		    status int(10),
		    create_at datetime DEFAULT NULL,
		    update_at datetime DEFAULT NULL
		)";

mysqli_query($link, $sql);
//Close connection
mysql_close($link);
?>