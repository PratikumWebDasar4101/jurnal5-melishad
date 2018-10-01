<?php 
session_start();
if (isset($_POST['submit'])) {
	if (!isset($_SESSION['user'])) {
		$user = array();
	}else{
		$user = $_SESSION['user'];
	}
	$nim = $_POST['nim'];
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$userbaru = array (
					'nim' => $nim,
					'nama' => $nama,
					'email' => $email
					);
	array_push($user, $userbaru);
	$_SESSION['user'] = $user;
	
}

 ?>
<table>

 <tr>
 	<th>NIM</th>
 </tr>
 <?php  
$user = $_SESSION['user'];
$num = 0;
	while ($num < count ($user)) {
 ?>
 <tr>
 	<td> <?php  echo $user[$num] ['nim']; ?></td>
 </tr>
<?php
$num++;
} 
?>
	<tr>
		<th>NAMA</th>
	</tr>

<?php 
$user = $_SESSION['user'];
$num = 0;
	while ($num < count ($user)) {
 ?>
 <tr>
 	<td><?php echo $user[$num]['nama']; ?></td>
 </tr>
 <?php
 $num++;
}
 ?>
<tr>
	<th>Email</th>
</tr>
<?php 
$user = $_SESSION['user'];
$num = 0;
	while ($num < count ($user)) {
 ?>

 <tr>
 	<td><?php echo $user[$num] ['email']; ?></td>
 </tr>

<?php 
$num++;
}
 ?>
</table>
<br>
<a href="registrasi.php">TAMBAH DATA BARU</a>
