<!DOCTYPE html>
<html>
<head>
	<title>Contact Us Form in PHP</title>
	<link href = "bootstrap.css" rel = "stylesheet" type = "text/css">
</head>
<body>
	<div class = "container">
		<div class = "row">
			<div class = "col-lg-6 m-auto">
				<div class = "card">
					<div class = "card-header text-center bg-dark text-white">
						<h3> Contact Us </h3>
					</div>

					<div class = "card-body">

						<div class = "card-title">

							<?php
                              $message ="";
                              if(isset($_GET['error']))
                              {
                              	$message = "Please Fill in the Blanks";
                              	echo '<div class ="alert alert-danger">'.$message.'</div>';
                              }

                              if(isset($_GET['success']))
                              {
                              	$message = "Your message has been sent";
                              	echo '<div class ="alert alert-success">'.$message.'</div>';
                              }

							?>
							


						</div>
						<form  action = "process.php" method="post">

							<input type="text" name = 'name' class = "form-control mb-2" placeholder = "Enter Your name">
                            <input type="email" name = 'email' class = "form-control mb-2" placeholder = "Enter Email">

                            <input type="text" name = 'subject' class = "form-control mb-2" placeholder = "Subject">

                            <textarea name = 'msg' class = "form-control" placeholder="Write The Message" ></textarea>

                        
					</div>

					<div class = "card-footer text-center bg-dark">
						<button class = "btn btn-outline-primary" name = "btn-send">Send</button>
					</div>

                        
				</form>
					

				</div>
				
			</div>
			

		</div>
		






	</div>

</body>
</html>