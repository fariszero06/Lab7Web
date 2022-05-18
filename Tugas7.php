<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>PHP Dasar</title>
</head>
<body>
<h2>Form Input</h2>
<form method="post">
<label>Nama: </label>
<label>Tanggal_Lahir: </label>
<label>pekerjaan:</label>
<input type="text" name="nama">
<input type="text" name="tanggal_lahir">
<input type="text" name="pekerjaan">
<input type="submit" value="Kirim">
</form>
<?php
echo 'Selamat Datang ' . $_POST['nama'];
?>
</body>
</html>