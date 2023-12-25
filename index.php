<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Student Form Collection</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>

<?php
	/**
	 * Student Data From
	 */

	if( isset($_POST['insert']) ){

		//Form Value Get
		$name = $_POST['name'];
		$email = $_POST['email'];
		$cell = $_POST['cell'];
		$roll = $_POST['name'];


		if( isset($email)) {
			// Check Email
			$email_check = explode('@', $email);
			$ins_mail = end($email_check);
		}


		$ph = substr($cell, 0, 3);



		if( empty($name) ){
			$err['name'] = "<p style= \" color:red;\"> * Required</p>";
		}
		
		if( empty($email) ){
			$err['email'] = "<p style= \" color:red;\"> * Required</p>";
		}
		
		if( empty($cell) ){
			$err['cell'] = "<p style= \" color:red;\"> * Required</p>";
		}
		
		if( empty($roll) ){
			$err['roll'] = "<p style= \" color:red;\"> * Required</p>";
		}




		// Form Validation
		if( empty($name) || empty($email) || empty($cell) || empty($roll) ){
			$msg = "<p class=\" alert alert-danger\">All fill are requiered!! <button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";
		}else if( filter_var($email, FILTER_VALIDATE_EMAIL) == false ){
			$msg = "<p class=\" alert alert-warning\">Invalid Email Address!! <button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";
		}elseif( $ins_mail != 'sorobindu.com' && $ins_mail != 'habibialbi.com'){
			$msg = "<p class=\" alert alert-info\">Email should be our instutute mail!!! <button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";
		}elseif( $ph != '018' && $ph != '017'){
			$msg = "<p class=\" alert alert-info\"> Phone number should be started 018|017 <button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";
		}else{
			$msg = "<p class=\" alert alert-success\">Data is stable<button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";
		}


	}

	



?>	

	<div class="wrap shadow">
		<div class="card">
			<div class="card-body">
				<h2>Student Form Collection</h2>
				<?php 
				if( isset($msg) ){
					echo $msg;		
				}
				  
				?>
				<form action="" method="POST" enctype="multipart/form-data">
					<div class="form-group">
						<label for="name">Name</label>
						<input name="name" id="name" class="form-control" type="text">
						<?php 
							if( isset($err['name']) ){
								echo $err['name'];
							}
						?>
					</div>
					<div class="form-group">
						<label for="email">Email</label>
						<input name="email" id="email" class="form-control" type="text">
						<?php 
							if( isset($err['email']) ){
								echo $err['email'];
							}
						?>
					</div>
					<div class="form-group">
						<label for="cell">Cell</label>
						<input name="cell" id="cell" class="form-control" type="text">
						<?php 
							if( isset($err['cell']) ){
								echo $err['cell'];
							}
						?>
					</div>
					<div class="form-group">
						<label for="roll">Roll</label>
						<input name="roll" id="roll" class="form-control" type="text">
						<?php 
							if( isset($err['roll']) ){
								echo $err['roll'];
							}
						?>
					</div>
					<div class="form-group">
						<input name="insert" class="btn btn-primary" type="submit" value="Insert">
					</div>
				</form>
			</div>
		</div>
	</div>
	







	<!-- JS FILES  -->
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
</body>
</html>