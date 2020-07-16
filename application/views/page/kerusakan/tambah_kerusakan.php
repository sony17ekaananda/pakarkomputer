<div class="col-md-12">
  <div class="container justify-content-center">
    <div class="card">
      <div class="card-header">
          <h4>Tambah Kerusakan</h4>
      </div>
      <div class="card-body">
        <form method="post" action="<?php echo base_url('kerusakan/doTambah'); ?>">
        <div class="col-md-8">
          <div class="form-group">
            <label for="kode_kerusakan">Kode Kerusakan:</label>
            <input type="kode_kerusakan" name="kode_kerusakan" class="form-control" placeholder="Masukkan kode kerusakan" id="kode_kerusakan"  value="<?= set_value('kode_kerusakan'); ?>">
                      <?= form_error('kode_kerusakan', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
        </div>
        <div class="col-md-8">
            <div class="form-group">
              <label for="kerusakan">Kerusakan:</label>
              <input type="text" name="kerusakan" class="form-control" placeholder="Masukkan kerusakan" id="kerusakan" value="<?= set_value('kerusakan'); ?>">
                      <?= form_error('kerusakan', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
          </div>
        <div class="col-md-8">
          <div class="form-group">
            <label for="deskripsi">Deskripsi:</label>
            <input type="deskripsi" name="deskripsi" class="form-control" placeholder="Masukkan deskripsi" id="deskripsi" value="<?= set_value('deskripsi'); ?>">
                      <?php echo form_error('deskripsi', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
        </div>
        <div class="col-md-8">
          <div class="form-group">
            <label for="pencegahan">Pencegahan:</label>
            <input type="pencegahan" name="pencegahan" class="form-control" placeholder="Masukkan pencegahan" id="pencegahan"  value="<?= set_value('pencegahan'); ?>">
                      <?= form_error('pencegahan', '<small class="text-danger pl-3">', '</small>'); ?>
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