 <div class="row">
   <div class="col-md-10">
      search here
   </div>
   <div class="col-md-2">
     <!--  <a href="<?= base_url() ?>node/add" class="btn btn-sm btn-primary btn-block float-right">Add Node</a> -->
   </div>
 </div>
<br>
<!-- start COMPLIANT DETAILS -->
<div class="row">
  <div class="col-md-12">
    <form action="<?= base_url() ?>blotters/<?= isset($rec) ? 'edit/'.$rec['id'] : 'add' ?>" method="post">
      <div class="row">
        <div class="col-md-6 offset-md-4">
          <div class="form-group">
            <label for="compliantdetails_name">COMPLIANT DETAILS<label>
            <!-- <input name="blotter_name" type="text" value="<?= isset($rec['blotter_name']) ? $rec['blotter_name'] : set_value('blotter_name') ?>" class="form-control <?= $errors['blotter_name'] ? 'is-invalid':'is-valid' ?>" id="blotter_name" placeholder="Blotter Name"> -->
              <?php if($errors['blotter_name']): ?>
                <div class="invalid-feedback">
                  <?= $errors['blotter_name'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>
<!-- END -->
<!-- citizen_id -->
<div class="row">
  <div class="col-md-12">
    <form action="<?= base_url() ?>blotters/<?= isset($rec) ? 'edit/'.$rec['id'] : 'add' ?>" method="post">
      <div class="row">
        <div class="col-md-6 offset-md-4">
          <div class="form-group">
            <label for="citizen_id">Citizen ID</label>
            <input name="citizen_id" type="text" value="<?= isset($rec['citizen_id']) ? $rec['citizen_id'] : set_value('citizen_id') ?>" class="form-control <?= $errors['citizen_id'] ? 'is-invalid':'is-valid' ?>" id="citizen_id" placeholder="Citizen ID">
              <?php if($errors['citizen_id']): ?>
                <div class="invalid-feedback">
                  <?= $errors['citizen_id'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>
<!-- START DETAILS -->
<div class="row">
  <div class="col-md-12">
    <form action="<?= base_url() ?>blotters/<?= isset($rec) ? 'edit/'.$rec['id'] : 'add' ?>" method="post">
      <div class="row">
        <div class="col-md-6 offset-md-4">
          <div class="form-group">
            <label for="person_complained">Person Complained</label>
            <input name="person_complained" type="text" value="<?= isset($rec['person_complained']) ? $rec['person_complained'] : set_value('person_complained') ?>" class="form-control <?= $errors['person_complained'] ? 'is-invalid':'is-valid' ?>" id="person_complained" placeholder="Person Complained">
              <?php if($errors['person_complained']): ?>
                <div class="invalid-feedback">
                  <?= $errors['person_complained'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>
<!-- END Details -->
      <div class="row">
        <div class="col-md-6 offset-md-4">
          <div class="form-group">
            <label for="description">Blotter Description</label>
            <textarea name="description" type="text" class="form-control <?= $errors['description'] ? 'is-invalid':'is-valid'  ?>" id="description" placeholder="Blotter Description" rows="5"><?= isset($rec['description']) ? $rec['description'] : set_value('description') ?></textarea>
            <?php if($errors['description']): ?>
                <div class="invalid-feedback">
                  <?= $errors['description'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>
  <!-- additional_details -->
  <div class="row">
    <div class="col-md-6 offset-md-4">
      <div class="form-group">
        <label for="description">Additional Details</label>
        <textarea name="description" type="text" class="form-control <?= $errors['description'] ? 'is-invalid':'is-valid'  ?>" id="description" placeholder="Blotter Description" rows="5"><?= isset($rec['description']) ? $rec['description'] : set_value('description') ?></textarea>
        <?php if($errors['description']): ?>
            <div class="invalid-feedback">
              <?= $errors['description'] ?>
            </div>
          <?php endif; ?>
      </div>
    </div>
  </div> -->
  <!-- end
<!-- filling_date -->
<div class="row">
  <div class="col-md-12">
    <form action="<?= base_url() ?>blotters/<?= isset($rec) ? 'edit/'.$rec['id'] : 'add' ?>" method="post">
      <div class="row">
        <div class="col-md-6 offset-md-4">
          <div class="form-group">
            <label for="person_complained">Filing Date</label>
            <input name="filling_date" type="text" value="<?= isset($rec['filling_date']) ? $rec['filling_date'] : set_value('person_complained') ?>" class="form-control <?= $errors['person_complained'] ? 'is-invalid':'is-valid' ?>" id="person_complained" placeholder="Person Complained">
              <?php if($errors['person_complained']): ?>
                <div class="invalid-feedback">
                  <?= $errors['person_complained'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>
<!-- end filing date -->
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <button type="submit" class="btn btn-primary float-right">Submit</button>
        </div>
      </div>
    </form>
    <p style="clear: both"></p>
  </div>
</div>
