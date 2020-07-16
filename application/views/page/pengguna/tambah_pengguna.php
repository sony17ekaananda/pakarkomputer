<div class="col-md-12">
  <div class="container justify-content-center">
    <div class="card">
      <div class="card-header">
          <h4>Tambah Pengguna</h4>
      </div>
      <div class="card-body">
        <form method="post" action="<?php echo base_url('pengguna/doTambah'); ?>">
          <div class="col-md-8">
            <div class="form-group">
              <label for="nama">Nama:</label>
              <input type="text" name="nama" class="form-control" placeholder="Enter nama" id="nama" value="<?= set_value('nama'); ?>">
                      <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
          </div>
        <div class="col-md-8">
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" class="form-control" placeholder="Enter email" id="email" value="<?= set_value('email'); ?>">
                  <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
        </div>
        <div class="col-md-8">
          <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" name="password" class="form-control" placeholder="Enter password" id="password" value="<?= set_value('password'); ?>">
                      <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
        </div>
        <div class="col-md-8">
          <div class="form-group">
            <label for="role">Role:</label>
            <select name="role" class="form-control">
              <option value="1">Pakar</option>
              <option value="2">Admin</option>
            </select>
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