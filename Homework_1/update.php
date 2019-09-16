<?php 
include "config.php";

// if the form's update button is clicked, we need to process the form
	if (isset($_POST['update'])) {
		$firstname = $_POST['firstname'];
		$user_id = $_POST['user_id'];
		$lastname = $_POST['lastname'];
		$email = $_POST['email'];
		

		// write the update query
		$sql = "UPDATE `users` SET `firstname`='$firstname',`lastname`='$lastname',`email`='$email' WHERE `id`='$user_id'";

		// execute the query
		$result = $conn->query($sql);

		if ($result == TRUE) {
			echo "Record updated successfully.";
		}else{
			echo "Error:" . $sql . "<br>" . $conn->error;
		}
	}


// if the 'id' variable is set in the URL, we know that we need to edit a record
if (isset($_GET['id'])) {
	$user_id = $_GET['id'];

	// write SQL to get user data
	$sql = "SELECT * FROM `users` WHERE `id`='$user_id'";

	//Execute the sql
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		
		while ($row = $result->fetch_assoc()) {
			$first_name = $row['firstname'];
			$lastname = $row['lastname'];
			$email = $row['email'];
			
			$id = $row['id'];
		}

	?>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<h2>User Update Form</h2>
		<form action="" method="post">
		  <fieldset>
		    <legend>Personal information:</legend>
		    First name:<br>
		    <input type="text" name="firstname" value="<?php echo $first_name; ?>">
		    <input type="hidden" name="user_id" value="<?php echo $id; ?>">
		    <br>
		    Last name:<br>
		    <input type="text" name="lastname" value="<?php echo $lastname; ?>">
		    <br>
		    Email:<br>
		    <input type="email" name="email" value="<?php echo $email; ?>">
		    <br>
		   
		    <input type="submit" value="Update" name="update">
		  </fieldset>
		  <a class="btn btn-info" href="view.php">Back</a>
		</form>

		</body>
		</html>




	<?php
	} else{
		// If the 'id' value is not valid, redirect the user back to view.php page
		header('Location: view.php');
	}

}
?>