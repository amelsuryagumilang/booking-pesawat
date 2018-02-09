

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <a href="<?php echo base_url("admin_con/userdaftarbyadmin"); ?>" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah User</a>
            </div>
            <div class="box-header">
              <h3 class="box-title">Data Table User</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <p style="color:red;"><?php echo $this->session->flashdata('messages'); ?></p>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID Card</th>
                  <th>Nama Panjang</th>
                  <th>Username</th>
                  <th>Email</th>
                  <th></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <?php foreach($datauser as $row) {?>
                  <td><?php echo $row->id_card; ?></td>
                  <td><?php echo $row->namapanjang; ?></td>
                  <td><?php echo $row->username; ?></td>
                  <td><?php echo $row->email; ?></td>
                  <td>
                    <a class="btn btn-info btn-sm" href="#"><i class="fa fa-search"></i></a>
                    <a class="btn btn-warning btn-sm" href="<?php echo base_url().'admin_con/edituser/'.$row-> id_user;?>"><i class="fa fa-pencil"></i></a>
                    <a href="<?php echo base_url().'admin_con/hapusUser/'.$row-> id_user;?>" onclick="return confirm('Yakin nih mau dihapus??');" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                  </td>
                </tr>
                <?php } ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>ID Card</th>
                  <th>Nama Panjang</th>
                  <th>Username</th>
                  <th>Email</th>
                  <th></th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->