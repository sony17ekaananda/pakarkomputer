<div class="col-md-12">
  <div class="container justify-content-center">
    <div class="card">
      <div class="card-header">
          <h4>Tambah Gejala</h4>
      </div>
      <div class="card-body">
        <form method="post" action="<?php echo base_url('gejala/doTambah'); ?>">
          <div class="col-md-8">
          <div class="form-group">
            <label for="kode_gejala">Kode Gejala:</label>
            <input type="kode_gejala" name="kode_gejala" class="form-control" placeholder="Enter kode gejala" id="kode_gejala" value="<?= set_value('kode_gejala'); ?>">
                      <?= form_error('kode_gejala', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
        </div>

        <div class="col-md-8">
            <div class="form-group">
              <label for="gejala">Gejala:</label>
              <input type="text" name="gejala" class="form-control" placeholder="Enter gejala" id="gejala" value="<?= set_value('gejala'); ?>">
                      <?= form_error('gejala', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
          </div>
          <div class="col-md-8">
            <div class="form-group">
              <label for="gejala">Kode Ya:</label>
              <select class="browser-default custom-select" name="kode_ya">
                <option selected  value ="">Pilih Kode Gejala</option>
                <?php foreach ($kode_gejala as $value) {
                  echo " <option value =".$value->kode_gejala.">".$value->kode_gejala."</option>";
                } ?>
              </select>
            </div>
          </div>
          <div class="col-md-8">
            <div class="form-group">
              <label for="gejala">Kode Tidak:</label>
              <select class="browser-default custom-select" name="kode_tidak">
                        <option selected value ="">Pilih Kode Gejala</option>
                <?php foreach ($kode_gejala as $value) {
                  echo " <option value =".$value->kode_gejala.">".$value->kode_gejala."</option>";
                } ?>
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