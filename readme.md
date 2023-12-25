

## Student Login Form 


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
			/**in_array() */
		}elseif( $ph != '018' && $ph != '017'){
			$msg = "<p class=\" alert alert-info\"> Phone number should be started 018|017 <button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";
		}else{
			$msg = "<p class=\" alert alert-success\">Data is stable<button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";
		}


	}
