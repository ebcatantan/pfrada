 <div class="row">
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
    <form action="<?= base_url() ?>clearance-purposes/<?= isset($rec) ? 'edit/'.$rec['id'] : 'add' ?>" method="post">
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="form-group">
            <label for="purpose">Clearance Purpose</label>
            <input name="purpose" type="text" value="<?= isset($rec['purpose']) ? $rec['purpose'] : set_value('purpose') ?>" class="form-control <?= $errors['purpose'] ? 'is-invalid':'is-valid' ?>" id="purpose" placeholder="Purpose">
              <?php if($errors['purpose']): ?>
                <div class="invalid-feedback">
                  <?= $errors['purpose'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" type="text" class="form-control <?= $errors['description'] ? 'is-invalid':'is-valid'  ?>" id="description" placeholder="Description" rows="5"><?= isset($rec['description']) ? $rec['description'] : set_value('description') ?></textarea>
            <?php if($errors['description']): ?>
                <div class="invalid-feedback">
                  <?= $errors['description'] ?>
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
