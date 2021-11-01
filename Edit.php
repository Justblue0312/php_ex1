
<!DOCTYPE html>
<html>
<head>
	<title>edit</title>
	<meta charset="utf-8">
</head>
<body>

<fieldset style="width:100%;">
	<h1>EDIT</h1>
	<form method="post" action="" enctype="multipart/form-data">
		<table cellpadding="5">
			<tr>
				<td>Title</td>
				<td><input type="text" required value="<?php echo $row['title']; ?>" name="title" ></td>
			</tr>
			<tr>
				<td>description</td>
				<td><textarea name="description"><?php echo $row['description'];?></textarea></td>
			</tr>
			<tr>
				<td>Image</td>
				<td><input type="file" name="image"></td>			
			</tr>
			<tr>
				<td>Status</td>
				<td>
					<select name='status'>
						<option value="1">enabled</option>
						<option value="0">disabled</option>
					</select>
				</td>
			</tr>
		
			<tr>
				<td></td>
				<td><input type="submit" value="Submit" name="Update"></td>
			</tr>
		</table>
	</form>

</fieldset>

</body>
</html>