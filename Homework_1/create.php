<?php 
include "config.php";

// if the form's submit button is clicked, we need to process the form
	if (isset($_POST['submit'])) {
		// get variables from the form
		$first_name = $_POST['firstname'];
		$last_name = $_POST['lastname'];
		$email = $_POST['email'];
		

		//write sql query

		$sql = "INSERT INTO `users`(`firstname`, `lastname`, `email`) VALUES ('$first_name','$last_name','$email')";

		// execute the query

		$result = $conn->query($sql);

		if ($result == TRUE) {
			echo "New record created successfully.";
		}else{
			echo "Error:". $sql . "<br>". $conn->error;
		}

		$conn->close();

	}



?>

<!DOCTYPE html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<html>
<body>

<h2>Signup Form</h2>

<form action="" method="POST">
  <fieldset>
    <legend>Personal information:</legend>
    First name:<br>
    <input type="text" name="firstname">
    <br>
    Last name:<br>
    <input type="text" name="lastname">
    <br>
    Email:<br>
    <input type="email" name="email">
    <br>
    
    <input type="submit" name="submit" value="submit">
  </fieldset>
</form>
<a class="btn btn-info" href="view.php">Back</a>
</body>
</html>