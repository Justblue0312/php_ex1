
<!DOCTYPE html>
<html>
<head>
	<title>edit</title>
	<meta charset="utf-8">
</head>
<body>
	<h1>SHOW</h1>
	<br>
	<a href="index.php">Back</a>
	<p>Title: <?php echo $rows['title']; ?></p>
	<p>Description: <?php echo $rows['description']; ?></p>
	<p>Status: <?php echo $rows['status']; ?></p>
	<p>Image: </p>
	<img src="img/<?php echo $rows['image']; ?>" alt="">
	<p>Create at:<?php echo $rows['create_at']; ?></p>
	<p>Update at: <?php
		if(strtotime($rows['update_at']) != '0000-00-00' ) {
			echo "Chưa update lần nào!"; 
		}else{
			echo $rows['update_at'];
		}
	?></p>
	
	
	
	
	
	
</body>
</html>