<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Route
      </h1>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-md-4">

          <div class="box box-primary">
          <?php echo $this->session->flashdata('messages'); ?>
            <div class="box-header">
              <h3 class="box-title">Input masks</h3>
            </div>
            <div class="box-body">
              <form action="<?php echo base_url();?>admin_con/addUserbyAdmin" method="post">
                <div class="form-group">
                  <label>Username</label>
                  <input type="text" class="form-control" name="username" required="true">
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="text" class="form-control" name="password" id="password" required="true">
                </div>
                <div class="form-group">
                  <label>ID Card</label>
                  <input type="text" class="form-control" name="idcard" required="true">
                </div>
                <div class="form-group">
                  <label>Nama Panjang</label>
                  <input type="text" class="form-control" name="namapanjang" required="true">
                </div>
                <div class="form-group">
                  <label>Jenis Kelamin</label>
                  <br>
                  <input type="radio" name="jenkel"  value="Laki-Laki">Laki - Laki
                  <input type="radio" name="jenkel" value="Perempuan">Perempuan
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input type="text" class="form-control" name="email" required="true">
                </div>
                <div class="form-group">
                  <label>Alamat</label>
                  <input type="text" class="form-control" name="alamat" required="true">
                </div>
                <div class="form-group">
                  <label>Nomor Telepon</label>
                  <input type="text" class="form-control" name="notelp" required="true">
                </div>
                <div class="form-group">
                  <input type="hidden" class="form-control" name="level" value="user" required="true">
                </div>
                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->



        </div>
       

      </div>
      <!-- /.row -->

    </section>
  </div>