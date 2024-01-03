<?php 
include_once "autoload.php";


if( isset($_GET['delete_id'])){
	$delete_id = $_GET['delete_id'];
	$photo_name = $_GET['photo'];

	unlink('assets/pp/'. $photo_name);
	delete('users', $delete_id);
	header("location:index.php");
}
 


?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>All Student Info</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
	
	

	<div class="wrap-table">
		<a class="btn btn-primary btn-sm" href="create.php">Admit new student</a>
		<br>
		<br>
		<div class="card shadow">
			<div class="card-body">
				<h2>All Student Info</h2>
				<table class="table table-striped">
					<thead>
						<tr>
							<th>#</th>
							<th>Name</th>
							<th>Email</th>
							<th>Cell</th>
							<th>Roll</th>
							<th>Location</th>
							<th>Gender</th>
							<th>Photo</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>

						<?php 

						$data = all('users');

						$o= 1;
						while( $user_da = $data->fetch_assoc()) :

						
						?>



						<tr>
							<td><?php echo $o; $o++;  ?></td>
							<td><?php echo $user_da['name']?></td>
							<td><?php echo $user_da['email'] ?></td>
							<td><?php echo $user_da['cell'] ?></td>
							<td><?php echo $user_da['roll'] ?></td>
							<td><?php echo $user_da['location'] ?></td>
							<td><?php echo $user_da['gender'] ?></td>
							<td><img src="assets/pp/<?php echo $user_da['photo'] ?>" alt=""></td>
							<td>
								<a class="btn btn-sm btn-info" href="show.php?show_id=<?php echo $user_da['id']?>">View</a>
								<a class="btn btn-sm btn-warning" href="edit.php?edit_id=<?php echo $user_da['id']?>">Edit</a>
								<a class="btn btn-sm btn-danger delete_btn" href="?delete_id=<?php echo $user_da['id']?>&photo=<?php echo $user_da['photo']?>">Delete</a>
							</td>
						</tr>
						
						<?php endwhile; ?>	

					</tbody>
				</table>
			</div>
		</div>
	</div>
	







	<!-- JS FILES  -->
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
	<script>
		$('.delete_btn').click(function(){
			let conf = confirm('Are you sure ?');
			if ( conf == true) {
				return true;
			}else{
				return false;
			}
		});
 
	</script>

</body>
</html>