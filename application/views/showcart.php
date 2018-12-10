<div class="col-md-12 jarak-atas col-md-offset">
<div class="panel panel-default" >
  <div class="panel-heading">
    <h3 class="panel-title">Detail Pemesanan Tiket Bioskop</h3>
  </div>
  <div class="panel-body" style="background-color: white">
<form action="<?=base_url('index.php/cart/simpan')?>" method="post">
<table class="table table-hover table-striped" style="background-color:white">
	<tr class="info">
		<td>ID Film</td>
		<td>Nama Film</td>
		<td>Jumlah</td>
		<td>Harga</td>
		<td>Subtotal</td>
		<td></td>
	</tr>
	<?php 
		foreach($this->cart->contents() as $items){
	?>
	<tr>
		<td><input type="hidden" name="id_film[]" value="<?=$items['id']?>">
		<input type="hidden" name="qty[]" value="<?=$items['qty']?>">

		<?=$items['id']?></td>
		<td><?=$items['name']?></td>
		<td><?=$items['qty']?></td>
		<td><?=$items['price']?></td>
		<td><?=$items['subtotal']?></td>
		<td><a href="<?=base_url('index.php/cart/hapus_item/'.$items['rowid'])?>" onclick="return confirm('Apakah Yakin?')">Hapus</a></td>
	</tr>
	<?php  }?>
		<tr>
		<td colspan="5">GrandTotal</td>
		<input type="hidden" name="grandtotal" value="<?=$this->cart->total()?>">
		<td><?=$this->cart->total()?></td>
	</tr>
</table>
<center><input type="submit" name="simpan" value="Check-Out" class="btn btn-success"></center>
</form><br>
</div></div></div>
<br><br><br><br>