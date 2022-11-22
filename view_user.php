<?php include 'header.php'?>

<div class="container" style="margin-top: 40px;">
<div class="panel panel-default">
	<div class="panel-heading">
		Add data User
	</div>
	<div class="panel-body">
		<form method="POST" action="insert_user.php" name="form" onsubmit="return validasiForm()">

		<div class="form-group col-md-6">
			<label>Email</label>
			<input type="email" class="form-control" placeholder="email" name="email">
		</div>

		<div class="form-group col-md-6">
			<label>Username</label>
			<input type="text" class="form-control" placeholder="Username" name="username">
		</div>

		<div class="form-group col-md-6">
			<label>Password</label>
			<input type="text" class="form-control" placeholder="Password" name="password">
		</div>

		<div class="form-group col-md-6">
			<label>Status User</label>
			<select class="form-control" name="status">
				<option value="Belum Aktif">Belum Aktif</option>
				<option value="Aktif">Aktif</option>
			</select>
		</div>

		<div class="form-group col-md-6">
			<button type="submit" class="btn btn-default">Simpan</button>
		</div>
		</form>
</div>	
</div>

<div class="panel panel-default" style="margin-top: 20px;">
<div class="panel panel-heading"> Data User</div>
<div class="panel panel-body">
<div class="table-container">

<table id="customers" style="margin-bottom: 20px;">
	<tr>
		<th>No</th>
		<th>Email</th>
		<th>Status</th>
		<th>Action</th>
	</tr>
<?php 

include "koneksi.php";

$query = mysqli_query($connection, "SELECT * FROM user ORDER BY id_user ASC");//ganti user
$nomer = 1;

$cekData = $query->num_rows;
if ($cekData > 0) {
	while ($hasil = mysqli_fetch_array($query)) { ?>
		<tr>
			<td><?php echo $nomer ?></td>
			<td><?php echo $hasil ["email"];?></td>
			<td><?php echo $hasil ["status"];?></td>
			<td>
				<a href="edit_user.php?id_user=<?php echo $hasil['id_user']; ?> " class="btn btn-success" role="button"><span class="glyphicon glyphicon-edit"></span> edit </a>
				<a href="delete_user.php?id_user=<?php echo $hasil['id_user']; ?> " onclick="return confirm('Yakin untuk menghapus data ?')" class="btn btn-danger" role="button"><span class="glyphicon glyphicon-trash"></span> delete </a>
			</td>
		</tr>
		<?php $nomer++;
	}
}else{ ?>
	<td colspan="4"><center>Data Masih Kosong</center></td>
<?php } ?>
</table>
</div>
</div>

<script type="text/javascript">
  function validasiForm(){
    var email=document.forms['form']['email'].value;
    var username=document.forms['form']['username'].value;
	var password=document.forms['form']['password'].value;

    if (email.length == 0) {
      alert('Email wajib diisi');
      return false;
    }

    if (username.length == 0) {
			alert('Username harus diisi');
			return false;

	}
	if (password.length == 0) {
			alert('password harus diisi');
			return false;
	}
    
  }  
</script>