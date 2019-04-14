<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php

include_once("config.php");

		if(isset($_POST['Submit'])) {
			$contactType = mysqli_real_escape_string($mysqli, $_POST['contactType']);
			$businessName = mysqli_real_escape_string($mysqli, $_POST['businessName']);
			$name = mysqli_real_escape_string($mysqli, $_POST['name']);
			$phone = mysqli_real_escape_string($mysqli, $_POST['phone']);
			$email = mysqli_real_escape_string($mysqli, $_POST['email']);


				$result = mysqli_query($mysqli, "INSERT INTO `contacts` (`id`, `contactType`, `businessName`, `name`, `phone`, `email`)
				 VALUES (NULL, '$contactType', '$businessName', '$name', '$phone', '$email')");

				header("Location: index.php");
			}
?>
</body>
</html>
