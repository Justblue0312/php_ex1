<!DOCTYPE html>
<html>
<head>
	<title>Add </title>
	<meta charset="utf-8">
</head>
<body>
<fieldset style="width:100%;">
	<h1>add</h1>
	<form method="post" action="" enctype="multipart/form-data">
		<table cellpadding="5">
			<tr>
				<td>Title</td>
				<td><input type="text" value="" name="title" required></td>
			</tr>
			<tr>
				<td>description</td>
				<td><textarea name="description" rows="4" cols="50"></textarea></td>
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
				<td><input type="submit" value="Submit" name="subm"></td>
			</tr>
		</table>
	</form>
</fieldset>
</body>
</html>