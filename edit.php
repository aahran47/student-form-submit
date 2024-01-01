<?php 
include_once "autoload.php";



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

		$id = $_GET['edit_id'];



		
		
		if(!empty($_FILES['new_photo']['name'])){
			$data = move($_FILES['new_photo'], 'assets/pp/', ['jpg','png','gif']);
			$photo_name = $data['unique_name'];
			unlink('assets/pp/'. $_POST['old_photo']);
		}else{
			$photo_name = $_POST['old_photo'];
		}
		
		
		/// Upload profile photo
		//$data = move($_FILES['file'], 'assets/pp/',['jpg','png','gif']);

		/// Get data from function 
		//$unique_name = $data['unique_name'];
		//$msgfl = $data['err_msg'];

		


		/**
		 * File Validation with move() function bro
		 */
		// if( empty($msgfl)){
		// 	$msgfl = validate('File upload success!', 'success');
		// }else{			
			
		// 	$msgfl = validate('Please selece photo !!!', 'info');

		// }

		
		
	

		



		


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
		}else if( filter_var($email, FILTER_VALIDATE_EMAIL) == false ){
			$msg = validate('Invalid Email Address!!');
		}elseif( $ins_mail != 'sorobindu.com' && $ins_mail != 'habibialbi.com'){
			$msg = validate('Email should be our instutute mail!!!', 'info');
			/**in_array() $ph != '018' && $ph != '017'*/
		}elseif( in_array($ph, ['018', '016', '017', '013', '019', '014', '015']) == false ){
			$msg = validate('Phone should be BD number', 'info');
		}else{

				
			

			/// Upate form data
			connect()->query("UPDATE users SET name='$name', email='$email', cell='$cell', roll='$roll', location='$location', gender='$gender', photo='$photo_name' WHERE id='$id'");
				
	
			$msg = validate('Profile updated successfully!!!', 'success');
		}


	
 



	}


	/**
 * Find Edit Student Data
 */
if(isset($_GET['edit_id'])){

	$id = $_GET['edit_id'];

	$e_stu = find('users', $id);
}








?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Edit <?php echo $e_stu->name; ?> info </title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
	
	

<div class="wrap">
		<a class="btn btn-primary btn-sm" href="index.php">Back</a>
		<br>
		<div class="card shadow">
			<div class="card-body">
				<h2>Student Profile Edit</h2>
				<p>
					<?php 
						if(isset($msg)){
							echo $msg;
						}

					?>

				</p>
				<hr>

				<form action="" method="POST" enctype="multipart/form-data">
					<div class="form-group">
						<label for="name">Name</label>
						<input name="name" id="name" class="form-control" type="text" value="<?php echo $e_stu->name; ?>">
						<?php 
							if( isset($err['name']) ){
								echo $err['name'];
							}
						?>
					</div>
					<div class="form-group">
						<label for="email">Email</label>
						<input name="email" id="email" class="form-control" type="text" placeholder="name@habibialbi.com/name@sorobindu.com" value="<?php echo $e_stu->email; ?>">
						<?php 
							if( isset($err['email']) ){
								echo $err['email'];
							}
						?>
					</div>
					<div class="form-group">
						<label for="cell">Cell</label>
						<input name="cell" id="cell" class="form-control" type="text" value="<?php echo $e_stu->cell; ?>">
						<?php 
							if( isset($err['cell']) ){
								echo $err['cell'];
							}
						?>
					</div>
					<div class="form-group">
						<label for="roll">Roll</label>
						<input name="roll" id="roll" class="form-control" type="text" value="<?php echo $e_stu->roll; ?>">
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
									<option <?php echo ($e_stu->location == 'Banani') ? 'selected' : ''; ?> value="Banani">Banani</option>
									<option <?php echo ($e_stu->location == 'Uttara') ? 'selected' : ''; ?> value="Uttara">Uttara</option>
									<option <?php echo ($e_stu->location == 'Mirpur') ? 'selected' : ''; ?> value="Mirpur">Mirpur</option>
									<option <?php echo ($e_stu->location == 'Mohammadpur') ? 'selected' : ''; ?> value="Mohammadpur">Mohammadpur</option>
									<option <?php echo ($e_stu->location == 'Badda') ? 'selected' : ''; ?> value="Badda">Badda</option>
									<option <?php echo ($e_stu->location == 'Gualshan') ? 'selected' : ''; ?> value="Gualshan">Gualshan</option>
								</select>
							</div>
					<div class="form-group">
						<label for="gender">Gender</label> <br>
						<input <?php echo ($e_stu->gender == 'Male') ? 'checked' : ''; ?> name="gender" id="male" type="radio" value="Male"> <label for="male">Male</label> <br>
						<input <?php echo ($e_stu->gender == 'Female') ? 'checked' : ''; ?> name="gender" id="female" type="radio" value="Female"> <label for="female">Female</label>

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

									<input style="display: none;" name="new_photo" type="file" id="file">
												
									<input name="old_photo" type="hidden" value="<?php echo $e_stu->photo; ?>"  id="file">
												
								</div>
							</div>
							<div class="col">
								<div class="form-group"> 
									<h6>Preview Here</h6>
									<img class="border border-gray rounded-circle" width='75' height="75" id="up_file" src="assets/pp/<?php echo $e_stu->photo; ?>" alt="">
								</div>					
							</div>
							<div class="col-6">
								
							</div>


						</div>
					</div>


					
					<div class="form-group">
						<input name="insert" class="btn btn-primary" type="submit" value="Update">
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
	<script>
		$(function () {

		$('[data-toggle="tooltip"]').tooltip()
		})


		$('input[name="new_photo"]').change(function(e){

			let file_url = URL.createObjectURL(e.target.files[0]);

			$('img#up_file').attr('src', file_url);

		});



	</script>

</body>
</html>