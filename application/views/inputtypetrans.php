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
              <form action="<?php echo base_url();?>admin_con/addTipeTrans" method="post">
                <div class="form-group">
                  <label>Deskripsi</label>
                  <input type="text" class="form-control" name="desk" required="true">
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