<?php 
include_once "autoload.php";

/**
 * Show single 
 */
if( isset($_GET['show_id'])){
	$id = $_GET['show_id'];

	$stu = find('users', $id);

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $stu->name; ?></title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-7 mx-auto" >
				<div class="card">
					<img width="250" class="mx-auto border border-gray rounded-circle shadow" src="assets/pp/<?php echo $stu->photo ?>" alt="">
				
					<div class="card-body">
						<table class="table">
							<h1 class="text-center"><?php echo $stu->name; ?></h1>
							<p class="text-center"><?php echo $stu->roll; ?></p>
							<tr>
								<td>Name :</td>
								<td><?php echo $stu->name; ?></td>
							</tr>
							<tr>
								<td>Email :</td>
								<td><?php echo $stu->email; ?></td>
							</tr>
							<tr>
								<td>Cell :</td>
								<td><?php echo $stu->cell; ?></td>
							</tr>
							<tr>
								<td>Location :</td>
								<td><?php echo $stu->location; ?></td>
							</tr>
							<tr>
								<td>Gender :</td>
								<td><?php echo $stu->gender; ?></td>
							</tr>
							
						</table>
						<a class='btn btn-sm btn-primary' href="index.php">Back</a>

					</div>
				</div>
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