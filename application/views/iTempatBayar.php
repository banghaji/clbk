<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Tambah Tempat Pembayaran</title>
</head>
<body>

	<?php echo validation_errors(); ?>

	<?php echo form_open('tempatbayar/tambah'); ?>

	Nama Tempat Pembayaran
	<br>
	<input type="text" name="nama_tempat" value="<?php echo set_value('nama_tempat'); ?>">
	<br>
	<input type="submit" value="Simpan">

	<?php echo form_close(); ?>

</body>
</html>