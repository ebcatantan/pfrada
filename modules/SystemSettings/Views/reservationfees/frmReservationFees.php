facilities <div class="row">
   <div class="col-md-10">
      search here
   </div>
   <div class="col-md-2">
     <!--  <a href="<?= base_url() ?>node/add" class="btn btn-sm btn-primary btn-block float-right">Add Node</a> -->
   </div>
 </div>
<br>
<div class="row">
  <div class="col-md-12">
    <form action="<?= base_url() ?>reservation-fees/<?= isset($rec) ? 'edit/'.$rec['id'] : 'add' ?>" method="post">
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="form-group">
            <label for="facility_id">Facility Name</label>
            <select name="facility_id" class="form-control <? $errors['facility_id'] ? 'is-invalid':'is-valid' ?>">
            <?php if (isset($rec['facility_id'])): ?>
              <?php foreach ($facilities as $facility): ?>
                <?php if ($facility['id'] == $rec['facility_id']): ?>
                  <option value="<?= $facility['id'] ?>" selected><?= strtoupper($facility['facility_name'])?></option>
                <?php else: ?>
                  <option value="<?= $facility['id'] ?>" ><?= strtoupper($facility['facility_name'])?></option>
                <?php endif; ?>
              <?php endforeach; ?>
            <?php else: ?>
              <option value="">Select Facility Name</option>
              <?php foreach ($facilities as $facility): ?>
                <option value="<?= $facility['id'] ?>" ><?= strtoupper($facility['facility_name'])?></option>
              <?php endforeach; ?>
            <?php endif; ?>
            </select>

              <?php if($errors['facility_id']): ?>
                <div class="invalid-feedback">
                  <?= $errors['facility_id'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="form-group">
            <label for="fee_per_hour">Fee per hour</label>
            <input name="fee_per_hour" type="text" value="<?= isset($rec['fee_per_hour']) ? $rec['fee_per_hour'] : set_value('fee_per_hour') ?>" class="form-control <?= $errors['fee_per_hour'] ? 'is-invalid':'is-valid' ?>" id="fee_per_hour" placeholder="Fee per hour">
            <?php if($errors['fee_per_hour']): ?>
                <div class="invalid-feedback">
                  <?= $errors['fee_per_hour'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="form-group">
            <label for="maintenance_fee">Maintenance fee</label>
            <input name="maintenance_fee" type="text" value="<?= isset($rec['maintenance_fee']) ? $rec['maintenance_fee'] : set_value('maintenance_fee') ?>" class="form-control <?= $errors['maintenance_fee'] ? 'is-invalid':'is-valid' ?>" id="maintenance_fee" placeholder="Maintenance Fee">  
            <?php if($errors['maintenance_fee']): ?>
                <div class="invalid-feedback">
                  <?= $errors['maintenance_fee'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <button type="submit" class="btn btn-primary float-right">Submit</button>
        </div>
      </div>
    </form>
    <p style="clear: both"></p>
  </div>
</div>
