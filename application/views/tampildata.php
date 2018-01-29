

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
              <a href="#" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah User</a>
            </div>
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
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
                  <td><?php echo $row->nama; ?></td>
                  <td><?php echo $row->username; ?></td>
                  <td><?php echo $row->email; ?></td>
                  <td>
                    <a class="btn btn-info btn-sm" href="#"><i class="fa fa-search"></i></a>
                    <a class="btn btn-warning btn-sm" href="#"><i class="fa fa-pencil"></i></a>
                    <a onclick="return confirm('Yakin nih mau dihapus??');" class="btn btn-danger btn-sm" href="#"><i class="fa fa-trash"></i></a>
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