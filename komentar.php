<!DOCTYPE html>
<html>
<head>
	<title>komentar</title>
</head>
<body>
	<form action="" method="POST">
	

	 Komentar : <textarea name="komentar"> </textarea>
	
	<br>
	<br>
	<input type="submit" name="submit" value="simpan">
	</form>
</body>
</html>

<?php
	if (isset($_POST['submit'])) {
		$komentar = $_POST['komentar'];
		$input = explode(" ", $komentar);
		if (count($input) < 5 ) {
			echo " <br> ERROR!";

		} else {
			echo "<br> Komentar anda : <br>". $komentar;
		}
	}
		
?>
