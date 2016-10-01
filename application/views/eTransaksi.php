<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Edit Transaksi</title>
</head>
<body>

	<?php echo validation_errors(); ?>

	<?php
	foreach($detailTransaksi as $dT) {
	?>

	<?php echo form_open('transaksi/ubah/'.$dT->id_bayar); ?>

	Tanggal
	<br>
	<input type="text" name="tanggal" value="<?php echo $dT->tanggal; ?>">
	<input type="hidden" name="id_bayar" value="<?php echo $dT->id_bayar; ?>">
	<br>
	Semester
	<br>
	<input type="text" name="semester" value="<?php echo $dT->semester; ?>">
	<br>
	Jenis Pembayaran
	<br>
	<select name="id_jenis">
		<option value="">--pilih jenis--</option>
		<?php
		foreach($jenis_bayar as $jb) {
			$jenisTerpilih=($jb->id_jenis==$dT->id_jenis)?"selected":"";
		?>
			<option value="<?php echo $jb->id_jenis; ?>" <?php echo $jenisTerpilih; ?>><?php echo $jb->nama_jenis; ?></option>
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
			$tempatTerpilih=($tb->id_tempat==$dT->id_tempat)?"selected":"";
		?>
			<option value="<?php echo $tb->id_tempat; ?>" <?php echo $tempatTerpilih; ?>><?php echo $tb->nama_tempat; ?></option>
		<?php
		}
		?>
	</select>
	<br>
	Jumlah
	<br>
	<input type="text" name="jumlah" value="<?php echo $dT->jumlah; ?>">
	<br>
	Keterangan
	<br>
	<textarea name="keterangan"><?php echo $dT->keterangan; ?></textarea>
	<?php 
	}
	?>
	
	<br>
	<input type="submit" value="Perbarui">

	<?php echo form_close(); ?>

</body>
</html>