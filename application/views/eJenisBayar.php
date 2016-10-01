<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Edit Jenis Pembayaran</title>
</head>
<body>

	<?php echo validation_errors(); ?>

	<?php
	foreach($detailJenis as $dT) {
	?>

	<?php echo form_open('jenisbayar/ubah/'.$dT->id_jenis); ?>

	Nama Jenis Pembayaran
	<br>
	<input type="text" name="nama_jenis" value="<?php echo $dT->nama_jenis; ?>">
	<input type="hidden" name="id_jenis" value="<?php echo $dT->id_jenis; ?>">

	<?
	}
	?>
	<br>
	<input type="submit" value="Perbarui">

	<?php echo form_close(); ?>

</body>
</html>