<div class="col-md-12 jarak-atas col-md-offset">
<div class="panel panel-default" >
  <div class="panel-heading">
    <h3 class="panel-title">Daftar Pesanan Saya</h3>
  </div>
  <div class="panel-body" style="background-color: white">
<table id="example1" class="table table-hover table-striped datatable">
	<thead>
		<tr>
			<td>No</td>
			<td>No Nota</td>
			<td>GrandTotal</td>
			<td>Status</td>
			<td>Konfirm</td>
			<td>Detail</td>
		</tr>
	</thead>
	<tbody>
		<?php 
$no=0;
		foreach ($pesanan as $psn): 
			$no++;?>
			<tr>
			<td><?=$no?></td>
			<td><?=$psn->id_nota?></td>
			<td><?=$psn->grandtotal?></td>
			<td><?=$psn->status?></td>
			<td>
				<?php  if ($psn->status==""): ?>
				<a href="<?=base_url('index.php/cart/konfirm/'.$psn->id_nota)?>">Konfirmasi</a> |
				<a href="<?=base_url('index.php/pesanan/hapus/'.$psn->id_nota)?>">Cancel</a>
			<?php else: ?>
				LUNAS
			<?php endif ?>
			</td>
			<td>Lihat Barang</td>
			</tr>	
		<?php endforeach ?>

	</tbody>
</table>
</div>
</div>
</div>