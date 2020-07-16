<div class="col-md-12">
  <div class="container justify-content-center">
    <div class="card">
      <div class="card-header">
          <h4>Edit Pengguna</h4>
      </div>
      <div class="card-body">
        <form method="post" action="<?php echo base_url('pengguna/doEdit'); ?>">
          <div class="col-md-8">
            <div class="form-group">
              <input type="hidden" name="id" value="<?php echo  $data->id; ?>">
              <label for="nama">Nama:</label>
              <input type="text" name="nama" class="form-control" placeholder="Enter nama" id="nama" value="<?php echo ($data->nama != "" ? $data->nama : set_value('nama')); ?>">
              <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
          </div>
    <!--     <div class="col-md-8">
          <div class="form-group">
            <label for="alamat">Alamat:</label>
            <input type="text" class="form-control" placeholder="Enter alamat" id="alamat">
          </div>
        </div> -->
        <div class="col-md-8">
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" class="form-control" placeholder="Enter email" id="email" value="<?php echo ($data->email != "" ? $data->email : set_value('email')); ?>">
              <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
        </div>
        <div class="col-md-8">
          <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" name="password" class="form-control" placeholder="Enter password" id="password" value="<?php echo ($data->password != "" ? $data->password : set_value('password')); ?>">
              <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
        </div>
        <div class="col-md-8">
          <div class="form-group">
            <label for="role">Role:</label>
            <select name="role" class="form-control" required>
              <option value="">Hak Akses</option>
              <?php
                foreach ($dataRole as $role) {

                      if($role['id'] == $data->role_id){                       
                        echo '<option selected value="'.$role['id'].'">'.$role['role'].'</option>';
                      }else{
                        echo '<option value="'.$role['id'].'">'.$role['role'].'</option>';
                      }
                    }

                    ?>

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