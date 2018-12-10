<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>asset/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>asset/style_login.css">
	<script type="text/javascript" src="<?=base_url()?>asset/js/jquery-3.2.js"></script>
	<script type="text/javascript" src="<?=base_url()?>asset/js/bootstrap.js"></script>
</head>
<body>
<div class="paralax">
	<div class="col-md-4 jarak-atas col-md-offset-4"><center>
		<div class="panel panel-default">
  		<div class="panel-heading">
   		<center><img src="<?=base_url()?>asset/img/logo.png" style="width:30%"></center>
  		</div>
  		<div class="panel-body">
<div class="register-box-body">
  <?php
      if($this->session->flashdata('pesan')!=null){
    echo "<div class='alert alert-danger'>".$this->session->flashdata('pesan')."</div>";}?>
    <p class="login-box-msg">Register a new membership</p>

<form action="<?=base_url('index.php/bioskop/simpan')?>" method="post">
      <div class="form-group has-feedback">
        <input name="nama_pembeli" type="text" class="form-control" placeholder="Name">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input name="username" type="text" class="form-control" placeholder="Username">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input name="password" type="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
      </div>
      <center>
      <input type="submit" class="btn btn-primary btn-block btn-flat" value="Register" name="submit">
      <br><a href="<?=base_url('index.php/bioskop/login')?>" class="text-center">I already have a membership</a>

      </center>
         
		</div>
	</div>
	</div></center>
</body>
</html>
<script>
$("#warning").hide();
$("#login").on("click",function(){
	$("#warning").show('fade');
	$("#warning").html('Sukses LOGIN');
	setTimeout(function(){location.href='indextasya2.html';},1000)
});
</script>