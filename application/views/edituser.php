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
            <div class="box-header">
              <h3 class="box-title">Input masks</h3>
            </div>
            <div class="box-body">
            <?php foreach($user as $u){ ?>
              <form action="<?php echo base_url();?>admin_con/updateUser" method="post">
                <div class="form-group">
                  <input type="hidden" class="form-control" name="iduser" required="true" value="<?php echo $u->id_user; ?>">
                </div>
                <div class="form-group">
                  <label>Username</label>
                  <input type="text" class="form-control" name="username" value="<?php echo $u->username; ?>" required="true">
                </div>  
                <div class="form-group">
                  <label>Password</label>
                  <input type="text" class="form-control" name="password" id="password" value="<?php echo $u->password; ?>" required="true">
                </div>
                <div class="form-group">
                  <label>ID Card</label>
                  <input type="text" class="form-control" name="idcard" required="true" value="<?php echo $u->id_card; ?>">
                </div>
                <div class="form-group">
                  <label>Nama Panjang</label>
                  <input type="text" class="form-control" name="namapanjang" required="true" value="<?php echo $u->namapanjang; ?>">
                </div>
                <div class="form-group">
                  <label>Jenis Kelamin</label>
                  <br>
                  <input type="radio" name="jenkel"  value="Laki-Laki" <?php echo ($u->jenkel =='Laki-Laki')?'checked':'' ?>>Laki - Laki
                  <input type="radio" name="jenkel" value="Perempuan" <?php echo ($u->jenkel =='Perempuan')?'checked':'' ?>>Perempuan
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input type="text" class="form-control" name="email" value="<?php echo $u->email; ?>" required="true">
                </div>
                <div class="form-group">
                  <label>Alamat</label>
                  <input type="text" class="form-control" name="alamat" value="<?php echo $u->alamat; ?>" required="true">
                </div>
                <div class="form-group">
                  <label>Nomor Telepon</label>
                  <input type="text" class="form-control" name="notelp" value="<?php echo $u->notelp; ?>" required="true">
                </div>
                <div class="form-group">
                  <input type="hidden" class="form-control" name="level" value="<?php echo $u->level; ?>" required="true">
                </div>
                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
              <?php }?>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->



        </div>
       

      </div>
      <!-- /.row -->

    </section>
  </div>
  <script type="text/javascript">
$( "#myform" ).validate({
  rules: {
    password: "required",
    repassword: {
      equalTo: "#password"
    }
  }
});
</script>