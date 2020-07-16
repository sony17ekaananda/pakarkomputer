        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <!-- <h1 class="h3 mb-2 text-gray-800">List Pengguna</h1> -->
          <!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p> -->

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 style="float:left;" class="m-0 font-weight-bold text-primary">List Pengguna</h6>
              <a style="float:right;" href="<?php echo base_url('pengguna/tambah'); ?>" class="btn btn-primary">Tambah</a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Nama</th>
                      <th>Email</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Nama</th>
                      <th>Email</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php
                    foreach ($data as $admin) {
                      echo

                        '<tr>
                          <td>'. $admin["nama"] .'</td>
                          <td>'. $admin["email"] .'</td>
                          <td style="text-align:center;">
                          <a href="'. base_url('PenggunaController/doDelete/'. $admin['id'])  .'" class="btn btn-danger">Delete</a>&nbsp;
                          <a href="'. base_url('pengguna/edit/'. $admin['id'])  .'" class="btn btn-success">Edit</a></td>

                        </tr>';

                      ;
                    }

                    ?>
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->