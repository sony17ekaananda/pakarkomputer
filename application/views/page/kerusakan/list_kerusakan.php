        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 style="float:left;" class="m-0 font-weight-bold text-primary">List Kerusakan</h6>
              <a style="float:right;" href="<?php echo base_url('kerusakan/tambah'); ?>" class="btn btn-primary">Tambah</a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Kode Kerusakan</th>
                      <th>Kerusakan</th>
                      <th>Deskripsi</th>
                      <th>Pencegahan</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Kode Kerusakan</th>
                      <th>Kerusakan</th>
                      <th>Deskripsi</th>
                      <th>Pecegahan</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php
                    foreach ($data as $kerusakan) {
                      echo

                        '<tr>
                          <td>'. $kerusakan["kode_kerusakan"] .'</td>
                          <td>'. $kerusakan["kerusakan"] .'</td>
                          <td>'. $kerusakan["deskripsi"] .'</td>
                          <td>'. $kerusakan["pencegahan"] .'</td>
                          <td style="text-align:center;">
                          <a href="'. base_url('KerusakanController/doDelete/'. $kerusakan['id'])  .'" class="btn btn-danger">Delete</a>&nbsp;&nbsp;
                          <a href="'. base_url('kerusakan/edit/'. $kerusakan['id'])  .'" class="btn btn-success">Edit</a></td>

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