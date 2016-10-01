<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Edit Tempat Pembayaran</title>
</head>
<body>

	<?php echo validation_errors(); ?>

	<?php
	foreach($detailTempat as $dT) {
	?>

	<?php echo form_open('tempatbayar/ubah/'.$dT->id_tempat); ?>

	Nama Tempat Pembayaran
	<br>
	<input type="text" name="nama_tempat" value="<?php echo $dT->nama_tempat; ?>">
	<input type="hidden" name="id_tempat" value="<?php echo $dT->id_tempat; ?>">

	<?
	}
	?>
	<br>
	<input type="submit" value="Perbarui">

	<?php echo form_close(); ?>

</body>
</html>