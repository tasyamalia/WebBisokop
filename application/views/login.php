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
	<div class="col-md-4 jarak-atas col-md-offset-4">
		<div class="panel panel-default">
  		<div class="panel-heading">
   		<center><img src="<?=base_url()?>asset/img/logo.png" style="width:30%"></center>
  		</div>
  		<div class="panel-body">
  			  <div class="login-box-body">
    <?php
      if($this->session->flashdata('pesan')!=null){
    echo "<div class='alert alert-danger'>".$this->session->flashdata('pesan')."</div>";}?>

    <form action="<?=base_url('index.php/bioskop/proses_login')?>" method="post">
           <div class="form-group has-feedback">
        <input type="text" name="username" class="form-control" placeholder="Username">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
			<br><center>
			<input name= "login" type="submit" class="btn btn-primary btn-block btn-flat" value="Sign In">
			<br><a href="<?=base_url('index.php/bioskop/register')?>" class="text-center">Register a new membership</a>
		</center>
		</form>
  		</div>
	</div>
	</div>
</div>
</div>
</body>
</html>