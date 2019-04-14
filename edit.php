<?php

	include_once("config.php");

	if(isset($_POST['update']))
	{
		$id = mysqli_real_escape_string($mysqli, $_POST['id']);

		$contactType = mysqli_real_escape_string($mysqli, $_POST['contactType']);
		$businessName = mysqli_real_escape_string($mysqli, $_POST['businessName']);
		$name = mysqli_real_escape_string($mysqli, $_POST['name']);
		$phone = mysqli_real_escape_string($mysqli, $_POST['phone']);
		$email = mysqli_real_escape_string($mysqli, $_POST['email']);

		$result = mysqli_query($mysqli, "UPDATE contacts SET businessName='$businessName',contactType='$contactType',name='$name',phone='$phone',email='$email' WHERE id=$id");

		header("Location: index.php");
	}
?>

<?php
		$id = $_GET['id'];

		$result = mysqli_query($mysqli, "SELECT * FROM contacts WHERE id=$id");

		while($res = mysqli_fetch_array($result))
		{
			$contactType = $res['contactType'];
			$businessName = $res['businessName'];
			$name = $res['name'];
			$phone = $res['phone'];
			$email = $res['email'];
		}
?>


<!DOCTYPE html>

<head>
	<title>Edit</title>
	<link rel="stylesheet" href="styles.css" />
</head>

<body>
	<header><a href="index.php">Home</a></header>
	<div id="main">
		<article>
				<form name="form1" method="post" action="edit.php">
					<table border="0">
						<tr>
									<td>Contact Type</td>
								  <td>
									<select name = contactType>
									<option selected="selected"><?php echo $contactType;?>
									</option>
									<option value="Employee">Employee</option>
									<option value="Organisation">Organisation</option>
								</select>
							</td>
						</tr>

				<tr>
					<td>businessName</td>
					<td><input type="text" name="businessName" value="<?php echo $businessName;?>"></td>
				</tr>

						<tr>
							<td>Name</td>
							<td><input type="text" name="name" value="<?php echo $name;?>"></td>
						</tr>
						<tr>
							<td>Phone</td>
							<td><input type="text" name="phone" value="<?php echo $phone;?>"></td>
						</tr>
						<tr>
							<td>Email</td>
							<td><input type="text" name="email" value="<?php echo $email;?>"></td>
						</tr>
						<tr>
							<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
							<td><input type="submit" name="update" value="Update"></td>
						</tr>
					</table>
				</form>

</article>
</div>

<footer>Created by Jordan Walker
</footer>

</body>
</html>
