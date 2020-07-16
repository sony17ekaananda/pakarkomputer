<div class="col-md-12">
  <div class="container justify-content-center">
    <div class="card">
      <div class="card-header">
          <h4>Tambah Solusi</h4>
      </div>
      <div class="card-body">
        <form method="post" action="<?php echo base_url('solusi/doTambah'); ?>">
          <div class="col-md-8">
            <div class="form-group">
              <label for="solusi">Solusi:</label>
              <input type="text" name="solusi" class="form-control" placeholder="Enter solusi" id="solusi" value="<?= set_value('solusi'); ?>">
                      <?= form_error('solusi', '<small class="text-danger pl-3">', '</small>'); ?>
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