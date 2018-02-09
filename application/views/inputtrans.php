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
              <form action="<?php echo base_url();?>admin_con/addTrans" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label>Nama Transportasi</label>
                  <input type="text" class="form-control" name="namatrans" required="true">
                </div>
                <div class="form-group">
                  <label>Kode Transportasi</label>
                  <input type="text" class="form-control" name="kodetrans" required="true">
                </div>
                <div class="form-group">
                  <label>Deskripsi</label>
                  <input type="text" class="form-control" name="deskripsi" required="true">
                </div>  
                <div class="form-group">
                  <label>Jumlah Kursi</label>
                  <input type="text" class="form-control" name="jmlhkrs" id="password" required="true">
                </div>
                <div class="form-group">
                  <label>Tipe Trans</label>
                  <select name="tipetrans" id="tipetrans" class="form-control">
                    <?php foreach($datatipe as $row) {?>
                    <option>--Pilih Tipe Transportasi--</option>
                    <option value="<?php echo $row->id_tipetrans; ?>"><?php echo $row->id_tipetrans; ?> - <?php echo $row->deskripsi; ?></option>
                    <?php } ?>
                  </select>
                </div>
                <div class="form-group">
                  <label>Logo</label>
                  <input type="file" name="userfile" size="20" required="" />
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