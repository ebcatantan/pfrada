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
    <form action="<?= base_url() ?>documents/<?= isset($rec) ? 'edit/'.$rec['id'] : 'add' ?>" method="post">
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="form-group">
            <label for="document_name">Document Name</label>
            <input name="document_name" type="text" value="<?= isset($rec['document_name']) ? $rec['document_name'] : set_value('document_name') ?>" class="form-control <?= $errors['document_name'] ? 'is-invalid':'is-valid' ?>" id="document_name" placeholder="Document name">
              <?php if($errors['document_name']): ?>
                <div class="invalid-feedback">
                  <?= $errors['document_name'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="form-group">
            <label for="description">Document Description</label>
            <textarea name="description" type="text" class="form-control <?= $errors['description'] ? 'is-invalid':'is-valid'  ?>" id="description" placeholder="Document description" rows="5"><?= isset($rec['description']) ? $rec['description'] : set_value('description') ?></textarea>
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
