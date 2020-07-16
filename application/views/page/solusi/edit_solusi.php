<div class="col-md-12">
  <div class="container justify-content-center">
    <div class="card">
      <div class="card-header">
          <h4>Edit Solusi</h4>
      </div>
      <div class="card-body">
        <form method="post" action="<?php echo base_url('solusi/doEdit'); ?>">
          <div class="col-md-8">
            <div class="form-group">
              <input type="hidden" name="id" value="<?php echo  $data->id; ?>">
              <label for="solusi">Solusi:</label>
              <input type="text" name="solusi" class="form-control" placeholder="Enter solusi" id="solusi" value="<?php echo ($data->solusi != "" ? $data->solusi : set_value('solusi')); ?>">
              <?= form_error('solusi', '<small class="text-danger pl-3">', '</small>'); ?>
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