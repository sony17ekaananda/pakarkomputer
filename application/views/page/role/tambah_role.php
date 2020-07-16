<div class="col-md-12">
  <div class="container justify-content-center">
    <div class="card">
      <div class="card-header">
          <h4>Tambah Hak Akses</h4>
      </div>
      <div class="card-body">
        <form method="post" action="<?php echo base_url('role/doTambah'); ?>">
          <div class="col-md-8">
            <div class="form-group">
              <label for="role">Hak Akses:</label>
              <input type="text" name="role" class="form-control" placeholder="Enter role" id="role" required="">
            </div>
          </div>
          <div class="col-md-8">
          <div class="form-group">
            <label for="deskripsi">Deskripsi:</label>
            <input type="deskripsi" name="deskripsi" class="form-control" placeholder="Enter deskripsi" id="deskripsi" required="">
          </div>
        </div>
        <div class="col-md-8">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </form>
    </div>
    </div>
  </div>
</div>