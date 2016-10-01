<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Data Jenis Pembayaran</title>
</head>
<body>
	
	<h1>Data Jenis Pembayaran</h1>

	<p>
		[<?php echo anchor('jenisbayar/tambah', 'tambah'); ?>]
	</p>
	
	<table border="1" width="100%">
		<thead>
			<tr>
				<th>ID</th>
				<th>Jenis Pembayaran</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
		<?
		$no=1;
		foreach($dJenis as $tr) {
		//foreach($dTransaksi->result() as $tr) {
		?>
			<tr>
				<td><?=$tr->id_jenis;?></td>
				<td><?=$tr->nama_jenis;?></td>
				<td>
					<?php echo anchor('jenisbayar/ubah/'.$tr->id_jenis, 'ubah'); ?> 
					- 
					<?php echo anchor('jenisbayar/hapus/'.$tr->id_jenis, 'hapus', 'onclick="return confirm(\'Yakin akan menghapus data ini?\');"'); ?>
				</td>
			</tr>
		<?
		}
		?>
		</tbody>
	</table>

</body>
</html>