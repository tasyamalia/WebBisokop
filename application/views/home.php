    <center><img src="<?=base_url()?>asset/img/logo1.png"></center>
       <div style="color:white"><h1><center>Welcome
        <?php if (@$user_data['username']){
        echo ",",$user_data['username'];
       }else {echo @$user_data['username'];}?>
     </h1></center></div>
  <!--slider carosel-->
  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="<?=base_url()?>asset/img/cb2.png" alt="...">
      <div class="carousel-caption">
        <h2>Beauty and The Beast</h2>
      </div>
    </div>
    <div class="item">
      <img src="<?=base_url()?>asset/img/avangers2.png" alt="...">
      <div class="carousel-caption">
        <h2>Avangers</h2>
      </div>
    </div>
    <div class="item">
      <img src="<?=base_url()?>asset/img/spidercb.png" alt="...">
      <div class="carousel-caption">
        <h2>Spiderman Homecoming</h2>
      </div>
    </div>
        <div class="item">
      <img src="<?=base_url()?>asset/img/cin2.png" alt="...">
      <div class="carousel-caption">
        <h2>Cinderella</h2>
      </div>
    </div>
      <div class="item">
      <img src="<?=base_url()?>asset/img/ww5.png" alt="...">
      <div class="carousel-caption">
        <h2>Wonder Women</h2>
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>

</div>

<div class="container jarak-atas">

  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading">
        <h3 class="panel-title">TODAY SHOW</h3>
      </div>
      <div class="panel-body">

      <div class="row">
      <div class="col-sm-6 col-md-3">
      <div class="thumbnail">
      <img src="<?=base_url()?>asset/img/bbe.png" alt="...">
      <div class="caption">
      <br>
      <center>
      <h4>Beauty and The Beast</h4>
      <p><a href="#gambar1" data-toggle="modal" class="btn btn-primary"  role="button">See Detail</a> <a href="#booking"  data-toggle="modal"  class="btn btn-default" role="button" style="background-color: #cc00ff;color:white;">Booking</a></p></center>
      </div>
      </div>
      </div>
      <div class="col-sm-6 col-md-3">
      <div class="thumbnail">
      <img src="<?=base_url()?>asset/img/spidere.png" alt="...">
      <div class="caption"><center>
      <br>
      <h4> Spiderman Homecoming</h4>
      <p><a href="#gambar2" data-toggle="modal" class="btn btn-primary" role="button">See Detail</a> 
      <a href="#booking" class="btn btn-default" role="button" style="background-color: #cc00ff;color:white;">Booking</a></p>
      </center></div>
      </div>
      </div>
       <div class="col-sm-6 col-md-3">
      <div class="thumbnail">
      <img src="<?=base_url()?>asset/img/wwe.png" alt="...">
      <div class="caption">
      <br><center>
      <h4>Wonder Woman</h4>
      <p><a href="#gambar3" data-toggle="modal" class="btn btn-primary" role="button">See Detail</a> <a href="#" class="btn btn-default" role="button" style="background-color: #cc00ff;color:white;">Booking</a></p></center>
      </div>
      </div>
      </div> 

       <div class="col-sm-6 col-md-3">
      <div class="thumbnail">
      <img src="<?=base_url()?>asset/img/cine.png" alt="...">
      <div class="caption"><center><br>
      <h4>Cinderella</h4>
      <p><a href="#gambar4" data-toggle="modal" class="btn btn-primary" role="button">See Detail</a> <a href="#" class="btn btn-default" role="button" style="background-color: #cc00ff;color:white;">Booking</a></p></center>
      </div>
      </div>
      </div>      
      <!--<div class="row">
      <div class="col-sm-6 col-md-3">
      <div class="thumbnail">
      <img src="<?=base_url()?>asset/img/avangerse.png" alt="...">
      <div class="caption"><center>
      <h4>Avangers</h4>
      <p><a href="#gambar1" data-toggle="modal" class="btn btn-primary" role="button">See Detail</a> <a href="#" class="btn btn-default" role="button">Booking</a></p></center>
      </div>
      </div>
      </div>
      <div class="col-sm-6 col-md-3">
      <div class="thumbnail">
      <img src="<?=base_url()?>asset/img/moanae.png" alt="...">
      <div class="caption"><center>
      <h4>Moana</h4>
      <p><a href="#gambar1" data-toggle="modal" class="btn btn-primary" role="button">See Detail</a> <a href="#" class="btn btn-default" role="button">Booking</a></p></center>
      </div>
      </div>
      </div>
      </div>-->

        </div>
      </div>  
    </div>
  
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
</div>
</div>
<div class="paralax2">

          <div class="container jarak-atas">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="panel panel-default">
                        <div class="panel-heading">
                        <h3 class="panel-title">MOVIES</h3>
                      </div>
                      <div class="panel-body">
                        <div class="col-sm-6 col-md-3">
                          <div class="thumbnail">
                          <img src="<?=base_url()?>asset/img/justiceq.png" alt="...">
                          <div class="caption">
                          <br><center>
                          <h4>Justice League</h4>
                          <p><a href="#gambar5" data-toggle="modal" class="btn btn-primary" role="button">See Detail</a> 
                          </div>
                          </div>
                          </div>
                          <div class="col-sm-6 col-md-3">
                          <div class="thumbnail">
                          <img src="<?=base_url()?>asset/img/bif.png" alt="...">
                          <div class="caption">
                          <br><center>
                          <h4>Before I Fall</h4>
                          <p><a href="#gambar6" data-toggle="modal" class="btn btn-primary" role="button">See Detail</a> 
                          </div>
                          </div>
                          </div>
                          <div class="col-sm-6 col-md-3">
                          <div class="thumbnail">
                          <img src="<?=base_url()?>asset/img/fb.png" alt="...">
                          <div class="caption">
                          <br><center>
                          <h4>Fantastic Beast</h4>
                          <p><a href="#gambar7" data-toggle="modal" class="btn btn-primary" role="button">See Detail</a> 
                          </div>
                          </div>
                          </div>
                          <div class="col-sm-6 col-md-3">
                          <div class="thumbnail">
                          <img src="<?=base_url()?>asset/img/al.png" alt="...">
                          <div class="caption">
                          <br><center>
                          <h4>Allegiant</h4>
                          <p><a href="#gambar8" data-toggle="modal" class="btn btn-primary" role="button">See Detail</a> 
                          </div>
                          </div>
                          </div>
                  </div>
                  </div>
                  </div>
                  </div>
<div class="container jarak-atas">
        <div class="row">
          <div class="col-md-12">
            <div class="panel panel-default" style="width:98%">
              <div class="panel-heading">
              <h3 class="panel-title">SCHEDULE</h3>
            </div>
            <div class="panel-body">
              <table class="table table-hover" style="background-color:white">
                  <tr>
                      <th>Studio</th>
                      <th>Jam Tayang</th>
                      <th>Judul Film</th>
                      <th>Harga</th>
                      <th>Keterangan</th>
                  </tr>
                  <tr align="center">
                      <td>Studio 1</td>
                      <td>13.00</td>
                      <td>Beauty and The Beast</td>
                      <td>25.000</td>
                      <td><button type="button" style="background-color: #cc00ff;color:white;" class="btn btn-default">Booking</button></td>
                  </tr>
                  <tr align="center">
                      <td> Studio 2</td>
                      <td> 15.00</td>
                      <td> Spiderman Homecoming</td>
                      <td>25.000</td>
                      <td><button type="button"  style="background-color: #cc00ff;color:white;" class="btn btn-default">Booking</button></td>
                  </tr>
                  <tr align="center">
                      <td> Studio 3</td>
                      <td> 17.00</td>
                      <td> Wonder Woman</td>
                      <td>25.000</td>
                      <td><button type="button"  style="background-color: #cc00ff;color:white;" class="btn btn-default">Booking</button></td>
                  </tr>
                  <tr align="center">
                      <td> Studio 4</td>
                      <td> 19.00</td>
                      <td> Cinderella</td>
                      <td>25.000</td>
                      <td><button type="button"  style="background-color: #cc00ff;color:white;" class="btn btn-default">Booking</button></td>
                  </tr>
              </table></table>
            </div>
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
