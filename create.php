<?php

include_once "autoload.php";

?>




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
		$roll = $_POST['roll'];
		$location = $_POST['location'];
		$gender = $_POST['gender'];
	


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
		if( empty($location) ){
			$err['location'] = "<p style= \" color:red;\"> * Required</p>";
		}
		if( empty($gender) ){
			$err['gender'] = "<p style= \" color:red;\"> * Required</p>";
		}





		// Form Validation

		if( empty($name) || empty($email) || empty($cell) || empty($roll) || empty($location) || empty($gender) ){
			$msg = validate('All fields are required!!!!');
			$msgfl = validate('Please select a image', 'info');
		}else if( filter_var($email, FILTER_VALIDATE_EMAIL) == false ){
			$msg = validate('Invalid Email Address!!');
		}elseif( $ins_mail != 'sorobindu.com' && $ins_mail != 'habibialbi.com'){
			$msg = validate('Email should be our instutute mail!!!', 'info');
			/**in_array() $ph != '018' && $ph != '017'*/
		}elseif( in_array($ph, ['018', '016', '017', '013', '019', '014', '015']) == false ){
			$msg = validate('Phone should be BD number', 'info');
		}elseif( dataChecker('users', 'email', $email)){
			$msg = validate('Email is already exits!!!', 'warning');
		}else{	
				$data = move($_FILES['file'], 'assets/pp/',['jpg','png','gif'], 500);

				/// Get data from function 
				$unique_name = $data['unique_name'];

				$ee_rr = $data['err_msg'];
				

			if( empty($ee_rr)){
				// Data insert 
				create("INSERT INTO users (name, email, cell , roll, location, gender, photo) VALUES ('$name','$email','$cell','$roll', '$location', '$gender', '$unique_name')");
				 $msg = validate('Data is stable', 'success');
				 $msgfl = validate('File upload success!', 'success');
			}else{
				$msgfl =  $ee_rr;
			}


				

				
				
			




		}
		
		
		
		
			
			
		


	
 



	}


	





?>	

	<div class="wrap">
		<a class="btn btn-primary btn-sm" href="index.php">All Students</a>
		<br>
		<br>
		<div class="card shadow">
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
						<input name="email" id="email" class="form-control" type="text" placeholder="name@habibialbi.com/name@sorobindu.com">
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
								<label for="">Location</label>
								<select class="form-control" name="location" id="">
									<option value="">-select-</option>
									<option value="Mirpur">Mirpur</option>
									<option  value="Banani">Banani</option>
									<option  value="Uttara">Uttara</option>
									<option value="Mohammadpur">Mohammadpur</option>
									<option value="Badda">Badda</option>
									<option value="Gualshan">Gualshan</option>
								</select>
							</div>
					
						<?php 
							if( isset($err['location']) ){
								echo $err['location'];
							}
						?>
					
					<div class="form-group">
						<label for="gender">Gender</label> <br>
						<input name="gender" checked id="male" type="radio" value="Male"> <label for="male">Male</label> <br>
						<input name="gender" id="female" type="radio" value="Female"> <label for="female">Female</label>
						<?php 
							if( isset($err['gender']) ){
								echo $err['gender'];
							}
						?>
					</div>

					<div class="form-group">		
									<?php 
										if( isset($msgfl) ){
											echo $msgfl;		
												}
									?>	
					</div>
					<div class="container">
						<div class="row">
							<div class="col">
								<div class="form-group">								
									<h6>Upload Here</h6>					
									<label for="file"><img style="cursor: pointer;" width="80" data-toggle="tooltip" data-placement="right" title="Profile Photo" src="pic.png" alt=""></label>
									<input style="display: none;" name="file" type="file" id="file">
												
								</div>
							</div>
							<div class="col">
								<div class="form-group"> 
									<h6>Preview Here</h6>
									<img class="border border-gray rounded-circle" width='75' height="75" id="up_file" src="" alt="">
								</div>					
							</div>
							<div class="col-6">
								
							</div>


						</div>
					</div>


					
					<div class="form-group">
						<input name="insert" class="btn btn-primary" type="submit" value="Insert">
					</div>
				</form>
			</div>
		</div>
	</div>



	<?php
	/**
	 * fetch();	
	 * fetchAll();
	 * 
	 * fetch_array();
	 * fetch_assoc();
	 * fetch_object();
	 */
											

	// $sql = "SELECT * FROM users";

	// $sehi = $connection->query($sql);

	
												

	// while($user_ds = $sehi->fetch_object()){
	// 	echo "ID: " . $user_ds->id;
	// 	echo "<br>";
	// 	echo  "Name: " . $user_ds->name;
	// 	echo "<br>";
	// 	echo  "Email: " . $user_ds->email;
	// 	echo "<br>";
	// 	echo  "Cell: " . $user_ds->cell;
	// 	echo "<br>";
	// 	echo  "Roll: " . $user_ds->roll;
	// 	echo "<hr>";

	// }
	
	
	
	// ?>
	







	<!-- JS FILES  -->
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
	<script>
		$(function () {

		$('[data-toggle="tooltip"]').tooltip()
		})


		$('input[name="file"]').change(function(e){

			let file_url = URL.createObjectURL(e.target.files[0]);

			$('img#up_file').attr('src', file_url);

		});



	</script>
</body>
</html>