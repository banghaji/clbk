<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Data Tempat Pembayaran</title>
</head>
<body>
	
	<h1>Data Tempat Pembayaran</h1>

	<p>
		[<?php echo anchor('tempatbayar/tambah', 'tambah'); ?>]
	</p>
	
	<table border="1" width="100%">
		<thead>
			<tr>
				<th>ID</th>
				<th>Tempat Pembayaran</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
		<?
		$no=1;
		foreach($dTempat as $tr) {
		//foreach($dTransaksi->result() as $tr) {
		?>
			<tr>
				<td><?=$tr->id_tempat;?></td>
				<td><?=$tr->nama_tempat;?></td>
				<td>
					<?php echo anchor('tempatbayar/ubah/'.$tr->id_tempat, 'ubah'); ?> 
					- 
					<?php echo anchor('tempatbayar/hapus/'.$tr->id_tempat, 'hapus', 'onclick="return confirm(\'Yakin akan menghapus data ini?\');"'); ?>
				</td>
			</tr>
		<?
		}
		?>
		</tbody>
	</table>

</body>
</html>