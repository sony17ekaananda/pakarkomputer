<div class="col-md-12">
  <div class="container justify-content-center">
    <div class="card">
      <div class="card-header">
          <h4>Edit Penyebab</h4>
      </div>
      <div class="card-body">
        <form method="post" action="<?php echo base_url('penyebab/doEdit'); ?>">
          <div class="col-md-8">
            <div class="form-group">
              <input type="hidden" name="id" value="<?php echo  $data->id; ?>">
              <label for="penyebab">Penyebab:</label>
              <input type="text" name="penyebab" class="form-control" placeholder="Enter penyebab" id="penyebab" value="<?php echo ($data->penyebab != "" ? $data->penyebab : set_value('penyebab')); ?>">
              <?= form_error('penyebab', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
          </div>
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