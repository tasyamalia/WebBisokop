<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>asset/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>asset/stylebioskop.css">
  <link rel="stylesheet" href="<?=base_url()?>asset/font-awesome/css/font-awesome.min.css">
  <script type="text/javascript" src="<?=base_url()?>asset/js/jquery-3.2.js"></script>
  <script type="text/javascript" src="<?=base_url()?>asset/js/bootstrap.js"></script>

</head>
<body>
<div class="paralax">
  <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container-fluid">
     <div class="navbar-header">
     <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
     <a class="navbar-brand" href="#"><img src="<?=base_url()?>asset/img/logo1.png" ></a>

     </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
        <li><a href="<?=base_url()?>index.php/bioskop/home">HOME</a></li>
        <li><a href="<?=base_url()?>index.php/bioskop/tiket">BOOKING</a></li>
        <li><a href="<?=base_url()?>index.php/bioskop/kritik">KRITIK SARAN</a></li>
        <li><a href="<?=base_url()?>index.php/bioskop/tm_film">FILM</a></li>
        <li><a href="<?=base_url()?>index.php/pesanan">PESANAN</a></li>
        <li><a href="<?=base_url()?>index.php/bioskop/logout">
        <?php if($this->session->userdata('login')==TRUE){
          echo "LOGOUT";
        }else{
          echo "LOGIN";
        }
        ?>
          </a></li>
    </ul>
     <ul class="nav navbar-nav navbar-right">
        <li><a href="<?=base_url()?>index.php/cart" class="" >
          <span class="glyphicon glyphicon-shopping-cart"></span>
              <span class="label label-success">
              <?=$this->cart->total_items();?>
              </span></a></li>
        <li><a href="#"><?php echo $this->session->userdata('username');?></a></li>
        <li><a href="<?=base_url()?>index.php/bioskop/register"><button type="button"  style="background-color: #17EFF9; border:transparent;" class="btn btn-default">DAFTAR</button></a></li>    
    </ul>

  </div>
  </div>

</nav>

<div class="container jarak-atas">


<?php
  $this->load->view($konten);
?>


  
    <!--<div class="col-md-4">
      <div class="panel panel-default">
        <div class="panel-heading">
        <h3 class="panel-title">Profil</h3>
      </div>
      <div class="panel-body">
        <img class="img-circle" src="<?=base_url()?>asset/img/namecard9tas.png" style="width:100%" alt="...">
        </div>
      </div>
    </div>-->
<div class="paralax2">


      
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
<div Id="gambar1" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">Beauty and The Beast</h4>
      </div>
      <div class="modal-body">

        <iframe width="560" height="315" src="<?=base_url()?>asset/https://www.youtube.com/embed/SqQvZ_VUtg8" frameborder="0" allowfullscreen></iframe>
        <h4>Sinopsis</h4>
        <p>Film Beauty and the Beast akan menceritakan kisah dari seorang wanita muda, cantik dan pintar bernama Belle (Emma Watson) yang ditawan oleh "Beast" (Dan Stevens) diistananya yang besar. Belle melakukan hal tersebut karena perjanjian untuk kebebasan ayahnya, Maurice (Kevin Kline). Meskipun ia ketakutan, ia dapat berteman dengan para staff disana yang telah tersihir dan berusaha belajar untuk memahami sikap dari Beast agar ia bisa membuatnya menjadi bersikap baik dan menghilangkan sifat menyeramkannya. Tanpa Belle sadari, ia telah mengeluarkan sisi pangeran yang ada didalam dirinya Beast, namun dapatkah Beast keluar dari kutukan yang menyeramkan tersebut dan kembali menjadi pangeran?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" style="background-color: #cc00ff;color:white">Booking</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<div Id="gambar2" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">Spiderman Homecoming</h4>
      </div>
      <div class="modal-body">
        <iframe width="560" height="315" src="<?=base_url()?>asset/https://www.youtube.com/embed/39udgGPyYMg" frameborder="0" allowfullscreen></iframe>
        <h4>Sinopsis</h4>
        <p>Beberapa bulan setelah kejadian difilm Captain America: Civil War, Peter Parker (Tom Holland), seorang anak muda yang memperlihatkan aksinya dalam film tersebut kembali kekehidupannya bersama bibi May dibawah pengawasan sang mentor, Tony Stark (Robert Downey Jr) yang mempersiapkan Spidey dalam kelompok 'Avengers'. Dengan kostum pemberiannya yang super canggih, Peter berusaha untuk menunjukan kehebatannya. Namun ia harus berhadapan dengan Vulture (Michael Keaton), sang villain yang berusaha mengancam orang-orang terdekatnya.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" style="background-color: #cc00ff;color:white">Booking</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<div Id="gambar3" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">Wonder Woman</h4>
      </div>
      <div class="modal-body">
       <iframe width="560" height="315" src="<?=base_url()?>asset/https://www.youtube.com/embed/5HUlW21v1fQ" frameborder="0" allowfullscreen></iframe>
        <h4>Sinopsis</h4>
        <p>Setelah seorang pilot Amerika bernama Steve Trevor (Chris Pine) mengalami kecelakaan dan jatuh di sebuah pulau bernama Themyscira, ia bertemu dengan Diana Prince (Gal Gadot) dan menceritakan kepadanya tentang apa yang sedang terjadi yaitu perang dunia. Diana berusaha menolong dengan meninggalkan tempat asalnya dan berusaha untuk menghentikan perang dunia pertama dengan menjadi Wonder Woman.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" style="background-color: #cc00ff;color:white">Booking</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<div Id="gambar4" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">Cinderella</h4>
      </div>
      <div class="modal-body">
        <iframe width="560" height="315" src="<?=base_url()?>asset/https://www.youtube.com/embed/20DF6U1HcGQ" frameborder="0" allowfullscreen></iframe>
        <h4>Sinopsis</h4>
        <p>Setelah sang ayah meninggal, Ella yang pada awalnya memiliki hidup yang senang kini harus menderita karena diperlakukan sebagai pembantu oleh ibu tiri dan kedua anaknya. Ella bersabar demi memenuhi janjinya kepada sang ibu kandung sebelum meninggal bahwa Ella harus tetap bersabar dan berbuat baik. Kehidupan Ella pun berubah berkat dari sebuah pesta dansa yang membuatnya bertemu dengan pangeran impian bernama Kit ( Richard Madden ).</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" style="background-color: #cc00ff;color:white">Booking</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div Id="gambar5" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">Justice League</h4>
      </div>
      <div class="modal-body"><center>
        <img src="<?=base_url()?>asset/img/justiceq.png"style="width:30% ;float:left;padding-right:20px" alt="..."></center>
        <h4>Sinopsis</h4>
        <p>Bersama Diana Prince, alias Wonder Woman, Batman berkumpul dengan Aquaman, The Flash dan Cyborg. Hanya saja, mungkin musuh yang mereka hadapi kali ini akan jadi terlalu kuat. Sementara itu, kita akan melihat Superman bangkit kembali dan bergabung dalam team Justice League membantu mereka menyelamatkan dunia dari kehancuran.
</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<div Id="gambar6" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">Before I Fall</h4>
      </div>
      <div class="modal-body"><center>
        <img src="<?=base_url()?>asset/img/bif.png"style="width:30% ;float:left;padding-right:20px" alt="..."></center>
        <h4>Sinopsis</h4>
        <p>Bagaimana jika Anda hanya punya satu hari untuk mengubah benar benar semuanya? Samantha Kingston memiliki semuanya, teman teman yang sempurna, pria yang sempurna, dan masa depan yang tampaknya sempurna. Kemudian, segalanya berubah. Setelah satu malam yang naas, Sam bangun tanpa masa depan sama sekali.
</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<div Id="gambar7" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">Fantastic Beast</h4>
      </div>
      <div class="modal-body"><center>
        <img src="<?=base_url()?>asset/img/fb.png"style="width:30% ;float:left;padding-right:20px" alt="..."></center>
        <h4>Sinopsis</h4>
        <p>sebuah buku yang awalnya dimiliki oleh Harry Potter dan ditulis ulang oleh seorang ahli sihir Newt Scamander. Akan terdapat 85 jenis sihir di dalam buku ini, dan ternyata sihir tersebut telah tersebar ke seluruh dunia. Salah seorang mengumpulkan beberapa informasi dengan meneliti selama bertahun tahun  dan mengarungi 5 benua serta  menghabisi setengah umurnya.
</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<div Id="gambar8" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">Allegiant</h4>
      </div>
      <div class="modal-body"><center>
        <img src="<?=base_url()?>asset/img/al.png"style="width:30% ;float:left;padding-right:20px" alt="..."></center>
        <h4>Sinopsis</h4>
        <p>Suatu ketika Tris merasa bimbang, karena harus memilih antara pengorbanan, kebaikan, ketegasan atau malah cinta. Karena jika ingin pergi keluar dari Chicago tersebut mereka berdua juga harus sipa menghadapi masalah yang besar.

Setelah mereka berhasil keluar, ternyata benar, tidak seperti yang mereka bayangkan, dan mereka juga tidak bisa melangkah kembali lagi karena harus menghadapi sebuah pertempuran yang sangat hebat dan juga akan bertemu dengan sebuah organisasi misterius yang dikenal sebagai Badan Kesejahteraan Genetik (Bureau of Genetic Welfare). 
</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</div>

<div class="footer"><center>
<center><img src="<?=base_url()?>asset/img/logo1.png" style="width:10%; margin-left:30px;">
<br>
<br>
<p style="color:white;margin-left:30px">Jalan Danau Poso 1 G2E No 9.</p>
<p style="color:white;margin-left:30px">Sawojajar, Kedungkandang, Malang</p>
<p style="color:white;margin-left:30px">Indonesia</p>
<p style="color:white;margin-left:30px">No Telp : 081234567890</p></center>
</div>
</body>
</html>
<script>
var acuan=$(".carousel").offset().top;
var menu1=function(){
  var scrol=$(window).scrollTop();
  if(scrol>acuan){
    $(".navbar-default").addClass("berubah-menu");
  }else{
    $(".navbar-default").removeClass("berubah-menu");
  }
}
menu1();
$(window).scroll(function(){
  menu1();
});


</script>
