	<h1>Data Transaksi</h1>

	<p>
		[<?php echo anchor('transaksi/tambah', 'tambah'); ?>]
	</p>
	
	<table class="table table-striped table-bordered table-hover">
		<thead>
			<tr>
				<th>No.</th>
				<th>Tanggal</th>
				<th>SMT</th>
				<th>Jenis Bayar</th>
				<th>Tempat Bayar</th>
				<th>Jumlah</th>
				<th>Keterangan</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
		<?
		$no=1;
		foreach($dTransaksi as $tr) {
		//foreach($dTransaksi->result() as $tr) {
		?>
			<tr>
				<td><?=$no;?></td>
				<td><?=$tr->tanggal;?></td>
				<td><?=$tr->semester;?></td>
				<td><?=$tr->nama_jenis;?></td>
				<td><?=$tr->nama_tempat;?></td>
				<td><?=$tr->jumlah;?></td>
				<td><?=$tr->keterangan;?></td>
				<td>
					<?php echo anchor('transaksi/ubah/'.$tr->id_bayar, 'ubah'); ?> 
					- 
					<?php echo anchor('transaksi/hapus/'.$tr->id_bayar, 'hapus', 'onclick="return confirm(\'Yakin akan menghapus data ini?\');"'); ?>
				</td>
			</tr>
		<?
		$no++;
		}
		?>
		</tbody>
	</table>
