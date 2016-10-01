<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Tambah Jenis Pembayaran</title>
</head>
<body>

	<?php echo validation_errors(); ?>

	<?php echo form_open('jenisbayar/tambah'); ?>

	Nama Jenis Pembayaran
	<br>
	<input type="text" name="nama_jenis" value="<?php echo set_value('nama_jenis'); ?>">
	<br>
	<input type="submit" value="Simpan">

	<?php echo form_close(); ?>

</body>
</html>