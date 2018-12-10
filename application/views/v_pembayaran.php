<div class="col-md-6 jarak-atas col-md-offset-3">
<div class="panel panel-default" >
  <div class="panel-heading">
    <h3 class="panel-title">Pembayaran</h3>
  </div>
  <div class="panel-body" style="background-color: white">
<center><h4>Total Bayar :</h4> 
<h3><?="Rp. ".number_format($total)?><br></h3>
Silahkan Transfer ke Rekening BCA <br>
a.n Tasya Amalia Salsabila <br>
No.Rekening : 1234567
<br>
<br>
<a href="<?=base_url('index.php/cart/konfirm/'.$this->uri->segment(3))?>" class="btn btn-danger">KONFIRMASI PEMBAYARAN</a></center>
</div></div><br><br>
</div>
