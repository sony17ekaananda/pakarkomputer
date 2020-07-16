        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 style="float:left;" class="m-0 font-weight-bold text-primary">List Gejala</h6>
              <a style="float:right;" href="<?php echo base_url('gejala/tambah'); ?>" class="btn btn-primary">Tambah</a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Kode Gejala</th>
                      <th>Gejala</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Kode Gejala</th>
                      <th>Gejala</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php
                    foreach ($data as $gejala) {
                      echo

                        '<tr>
                          <td>'. $gejala["kode_gejala"] .'</td>
                          <td>'. $gejala["gejala"] .'</td>
                          <td style="text-align:center;">
                          <a href="'. base_url('GejalaController/doDelete/'. $gejala['id'])  .'" class="btn btn-danger">Delete</a>&nbsp;&nbsp;
                          <a href="'. base_url('gejala/edit/'. $gejala["id"])  .'" class="btn btn-success">Edit</a></td>

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