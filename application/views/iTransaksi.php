<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Tambah Transaksi</title>
</head>
<body>

	<?php echo validation_errors(); ?>

	<?php echo form_open('transaksi/tambah'); ?>

	Tanggal
	<br>
	<input type="text" name="tanggal" value="<?php echo set_value('tanggal'); ?>">
	<br>
	Semester
	<br>
	<input type="text" name="semester" value="<?php echo set_value('semester'); ?>">
	<br>
	Jenis Pembayaran
	<br>
	<select name="id_jenis">
		<option value="">--pilih jenis--</option>
		<?php
		foreach($jenis_bayar as $jb) {
		?>
			<option value="<?php echo $jb->id_jenis; ?>"><?php echo $jb->nama_jenis; ?></option>
		<?php
		}
		?>
	</select>
	<br>
	Tempat Pembayaran
	<br>
	<select name="id_tempat">
		<option value="">--pilih jenis--</option>
		<?php
		foreach($tempat_bayar as $tb) {
		?>
			<option value="<?php echo $tb->id_tempat; ?>"><?php echo $tb->nama_tempat; ?></option>
		<?php
		}
		?>
	</select>
	<br>
	Jumlah
	<br>
	<input type="text" name="jumlah" value="<?php echo set_value('jumlah'); ?>">
	<br>
	Keterangan
	<br>
	<textarea name="keterangan"><?php echo set_value('keterangan'); ?></textarea>
	<br>
	<input type="submit" value="Simpan">

	<?php echo form_close(); ?>

</body>
</html>