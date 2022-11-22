<?php include 'header.php'?>

<?php
include "koneksi.php";
$id = $_GET['id_user']; //ganti user

//fungsi untuk mengambil data id

$result = mysqli_query($connection, "SELECT * FROM user WHERE id_user = $id");

while ($data = mysqli_fetch_array($result)) {
	$email = $data['email'];
	$username = $data['username'];
	$password = $data['password'];
	$status = $data['status'];
	$password_new = $data['password'];
}

?>

<div class="container" style="margin-top: 40px;">
<div class="panel panel-default">
	<div class="panel-heading">
		Edit data user
	</div>
	<div class="panel-body">
		<form method="POST" action="update_user.php">
			<input type="hidden" value="<?php echo $id; ?>" name="id_user">

		<div class="form-group col-md-6">
			<label>Email</label>
			<input type="email" class="form-control" name="email" value="<?php echo $email; ?>">
		</div>

		<div class="form-group col-md-6">
			<label>Username</label>
			<input type="text" class="form-control" name="username" value="<?php echo $username; ?>">
		</div>

		<div class="form-group col-md-6">
			<label>Password</label>
			<input type="text" class="form-control" name="password" value="<?php echo $password_new; ?>">
		</div>

		<div class="form-group col-md-6">
			<label>Status User</label>
			<select class="form-control" name="status">
				<option value="Belum Aktif" <?php if ($status =='Belum Aktif') { echo "selected";}?>>Belum Aktif</option>
				<option value="Aktif" <?php if ($status =='Aktif') { echo "selected";}?>>Aktif</option>
			</select>
		</div>

		<div class="form-group col-md-6">
			<button type="submit" class="btn btn-default">Simpan</button>
		</div>
		</form>
</div>	
</div>
