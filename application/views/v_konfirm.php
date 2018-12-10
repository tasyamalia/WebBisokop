<br><div class="col-md-6 jarak-atas col-md-offset-3">
<div class="panel panel-default" >
  <div class="panel-heading">
    <h3 class="panel-title">Upload Data Bukti Pembayaran</h3>
  </div>
  <div class="panel-body" style="background-color: white">
<?php if ($this->session->flashdata('pesan')): ?>
 <div class="alert alert-warning">
 <?= $this->session->flashdata('pesan');?>
</div>
<?php endif ?>

<form action="<?=base_url('index.php/cart/proses_upload')?>" method="post" enctype="multipart/form-data">
	<input type="hidden" name="id_nota" value="<?=$id_nota?>">
	<input type="file" name="bukti" class="form-control"><br>
	<input type="submit" name="upload" value="UPLOAD" class="btn btn-success">
	
</form>
</div>
</div><br><br><br><br><br><br>
<br>
</div>