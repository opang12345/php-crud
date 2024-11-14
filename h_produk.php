 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Barang</i></h1>
            
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v2</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
    
    <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <?php 
                  require_once 'kontroller/kelas_produk.php';
                  // ciptakan object dari class Produk
                  $obj = new produk($dbh);
                  // panggil method tampilkan data produk
                  $rs = $obj->dataproduk();
              ?>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Produk</th>
                    <th>Harga Beli</th>
                    <th>Stok</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
                      $no = 1;
                      foreach($rs as $pro){
                  ?>
                  <tr>
                  <td><?= $no; ?></td>
                    <td><?= $pro->nama; ?></td>
                    <td><?= $pro->harga; ?></td>
                    <td><?= $pro->stok; ?></td>
                    <td>
                    <form action="kontroller/kelas_produk.php" method="POST">
                        <a class="btn btn-success" href="#"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-warning" href="#"><i class="fa fa-edit"></i></a>
                        <button name="submit" value="hapus" onclick="return confirm('Anda Yakin Data Dihapus?')" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                        <input type="hidden" name="idx" value="#" />
                      </form>
                    </td>
                  </tr>
                  <?php
                      $no++;
                      }
                  ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                    <th>Engine version</th>
                    <th>CSS grade</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->