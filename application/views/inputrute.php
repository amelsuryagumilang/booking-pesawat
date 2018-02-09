  <!-- Content Wrapper. Contains page content -->
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
              <form action="<?php echo base_url();?>admin_con/addRute" method="post">
                <div class="bootstrap-datepicker">
                <div class="form-group">
                  <label>Tanggal Keberangkatan</label>
                  <div class="input-group">
                    <input type="date" name="tanggalbrngkt" class="form-control" value="Select date" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Select date';}">
                  </div>
                </div>
                </div>
                <div class="bootstrap-timepicker">
                <div class="form-group">
                  <label>Jam Keberangkatan</label>
                  <div class="input-group">
                    <input type="text" class="form-control timepicker" name="jambrngkt">
                    <div class="input-group-addon">
                      <i class="fa fa-clock-o"></i>
                    </div>
                  </div>
                </div>
                </div>
                <div class="form-group">
                  <label>Bandara Awal</label>
                  <input type="text" class="form-control" name="bandaraawal" required="true">
                </div>
                <div class="form-group">
                  <label>Kota Awal</label>
                  <input type="text" class="form-control" name="kotaawal" required="true">
                </div>
                <div class="bootstrap-datepicker">
                <div class="form-group">
                  <label>Tanggal Sampai</label>
                  <div class="input-group">
                    <input type="date" name="tanggalsampai" class="form-control" value="Select date" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Select date';}">
                  </div>
                </div>
                </div>
                <div class="bootstrap-timepicker">
                <div class="form-group">
                  <label>Jam Sampai</label>
                  <div class="input-group">
                    <input type="text" class="form-control timepicker" name="jamsampai">
                    <div class="input-group-addon">
                      <i class="fa fa-clock-o"></i>
                    </div>
                  </div>
                </div>
                </div>
                <div class="form-group">
                  <label>Bandara Akhir</label>
                  <input type="text" class="form-control" name="bandaraakhir" required="true">
                </div>
                <div class="form-group">
                  <label>Kota Akhir</label>
                  <input type="text" class="form-control" name="kotaakhir" required="true">
                </div>
                <div class="form-group">
                  <label>Bandara Transit</label>
                  <input type="text" class="form-control" name="bandaratransit" required="true">
                </div>
                <div class="form-group">
                  <label>Harga</label>
                  <input type="text" class="form-control" name="price" required="true">
                </div>
                <div class="form-group">
                  <label>Pesawat</label>
                  <select name="pesawat" id="pesawat" class="form-control">
                    <?php foreach($datatrans as $row) {?>
                    <option>--Pilih Jenis Pesawat--</option>
                    <option value="<?php echo $row->id_trans; ?>"><?php echo $row->kode_trans; ?> - <?php echo $row->nama_trans; ?></option>
                    <?php } ?>
                  </select>
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
  <!-- /.content-wrapper -->
  