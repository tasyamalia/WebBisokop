  <center><img src="<?=base_url()?>asset/img/logo1.png"></center>
<div class="container jarak-atas">
        <div class="row">
          <div class="col-md-12">
            <div class="panel panel-default">
              <div class="panel-heading">
              <h3 class="panel-title">SCHEDULE</h3>
            </div>
            <div class="panel-body">
              <table class="table table-hover" style="background-color:white">
                  <tr>
                      <th>Cover</th>
                      <th>Studio</th>
                      <th>Jam Tayang</th>
                      <th>Judul Film</th>
                      <th>Harga</th>
                      <th>Keterangan</th>
                  </tr>
                  <tr align="center">
                    <td> <img src="<?=base_url()?>asset/img/bbe.png"style="width:60% ;padding-right:20px" alt="..."></td>
                      <td><br><br><br><br><br>Studio 1</td>
                      <td><br><br><br><br><br>13:00</td>
                      <td><br><br><br><br><br>Beauty and The Beast</td>
                      <td><br><br><br><br><br>25.000</td>
                      <td><br><br><br><br><button type="button" class="btn btn-default"><a href="#book2" data-toggle="modal" class="btn btn-primary" style="background-color: #cc00ff;color:white;" role="button">Booking</a></button></td>
                  </tr>
                  <tr align="center">
                      <td> <img src="<?=base_url()?>asset/img/Spidere.png"style="width:60% ;padding-right:20px" alt="..."></td>
                      <td><br><br><br><br><br> Studio 2</td>
                      <td><br><br><br><br><br> 15.00</td>
                      <td><br><br><br><br><br> Spiderman Homecoming</td>
                      <td><br><br><br><br><br>25.000</td>
                      <td><br><br><br><br><br><button type="button" class="btn btn-default"><a href="#book2" data-toggle="modal" class="btn btn-primary" style="background-color: #cc00ff;color:white;" role="button">Booking</a></button></td>
                  </tr>
                  <tr align="center">
                    <td> <img src="<?=base_url()?>asset/img/wwe.png"style="width:60% ;padding-right:20px" alt="..."></td>
                      <td><br><br><br><br><br> Studio 3</td>
                      <td><br><br><br><br><br> 17.00</td>
                      <td><br><br><br><br><br> Wonder Woman</td>
                      <td><br><br><br><br><br>25.000</td>
                      <td><br><br><br><br><br><button type="button" class="btn btn-default"><a href="#book2" data-toggle="modal" class="btn btn-primary" style="background-color: #cc00ff;color:white;" role="button">Booking</a></button></td>
                  </tr>
                  <tr align="center">
                    <td> <img src="<?=base_url()?>asset/img/cine.png"style="width:60% ;padding-right:20px" alt="..."></td>
                      <td><br><br><br><br><br> Studio 4</td>
                      <td><br><br><br><br><br> 19.00</td>
                      <td><br><br><br><br><br> Cinderella</td>
                      <td><br><br><br><br><br>25.000</td>
                      <td><br><br><br><br><br><button type="button" class="btn btn-default"><a href="#book2" data-toggle="modal" class="btn btn-primary" style="background-color: #cc00ff;color:white;" role="button">Booking</a></button></td>
                  </tr>
              </table></table>
            </div>
          </div>
        </div>
      </div>
    </div>

<div Id="book2" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">Booking</h4>
      </div>
      <div class="modal-body">
        
        <form action="/action_page.php">
          <center><div>
            <div style="width:30px;height50px;font-size:20px;display:inline-block;">A </div>
            <input type="checkbox" style="width:50px;height:50px;magin:15px;">
            <input type="checkbox" style="width:50px;height:50px;magin:15px;">
            <input type="checkbox" style="width:50px;height:50px;magin:15px;">
            <input type="checkbox" style="width:50px;height:50px;magin:15px;">
            <input type="checkbox" style="width:50px;height:50px;magin:15px;">
          </div><br>
          <center><div>
            <div style="width:30px;height50px;font-size:20px;display:inline-block;">B </div>
            <input type="checkbox" style="width:50px;height:50px;magin:15px;">
            <input type="checkbox"style="width:50px;height:50px;magin:15px;">
            <input type="checkbox" style="width:50px;height:50px;magin:15px;">
            <input type="checkbox" style="width:50px;height:50px;magin:15px;">
            <input type="checkbox" style="width:50px;height:50px;magin:15px;">
          </div><br>
          <center><div>
            <div style="width:30px;height50px;font-size:20px;display:inline-block;">C </div>
            <input type="checkbox" style="width:50px;height:50px;magin:15px;">
            <input type="checkbox"style="width:50px;height:50px;magin:15px;">
            <input type="checkbox" style="width:50px;height:50px;magin:15px;">
            <input type="checkbox" style="width:50px;height:50px;magin:15px;">
            <input type="checkbox" style="width:50px;height:50px;magin:15px;">
          </div><br>
                    <center><div>
            <div style="width:30px;height50px;font-size:20px;display:inline-block;">D </div>
            <input type="checkbox" style="width:50px;height:50px;magin:15px;">
            <input type="checkbox"style="width:50px;height:50px;magin:15px;">
            <input type="checkbox" style="width:50px;height:50px;magin:15px;">
            <input type="checkbox" style="width:50px;height:50px;magin:15px;">
            <input type="checkbox" style="width:50px;height:50px;magin:15px;">
          </div><br>
        </form>

        <form class="form-horizontal" role="form">
    <div class="form-group">
  <label for="inputEmail3" class="col-sm-2 control-label">Judul</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" placeholder="Judul Film">
    </div>
  </div>
    <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Tanggal</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" placeholder="Tanggal">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3" placeholder="Email">
    </div>
  </div>
  <br>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default"style="background-color: #cc00ff;color:white;" >Booking</button>
    </div>
  </div>
</form>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal" >Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
