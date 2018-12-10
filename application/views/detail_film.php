<div class="col-md-4">
	<img style="width:100%" src="<?=base_url()?>asset/img/<?=$detail->gambar_film;?>" >
</div>
<div class="col-md-8">
	<table class="table table-hover">
		<tr class="info">
			<td>Judul Film</td><td>:<?=$detail->judul_film;?></td>
		</tr>
		<tr class="info">
			<td>Sinopsis</td><td>:<?=$detail->deskripsi_film;?></td>
		</tr>
	</table>
  <a href="<?=base_url($url)?>"><button class="btn btn-default" style="background-color: #cc00ff;color:white;"><?= $booking ?></button></a>
</div>
</div>