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
   <form action="<?= base_url() ?>blotter-actions/<?= isset($rec) ? 'edit/'.$rec['id'] : 'add' ?>" method="post" >


      <div class="row">
        <div class="col-md-5 offset-md-1">
          <div class="form-group">
            <label for="blotter_id">Blotter ID</label>
            <input name="blotter_id" type="text" value="<?= isset($rec['blotter_id']) ? $rec['blotter_id'] : set_value('blotter_id') ?>" class="form-control <?= $errors['blotter_id'] ? 'is-invalid':'is-valid' ?>" id="blotter_id" placeholder="Blotter ID">
              <?php if($errors['blotter_id']): ?>
                <div class="invalid-feedback">
                  <?= $errors['blotter_id'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
        <div class="col-md-5">
            <div class="form-group">
              <label for="date_action_taken">Date Action Taken</label>
              <input type="date" name="date_action_taken" type="text" value="<?= isset($rec['date_action_taken']) ? $rec['date_action_taken'] : set_value('date_action_taken') ?>" class="form-control <?= $errors['date_action_taken'] ? 'is-invalid':'is-valid' ?>" id="date_action_taken" placeholder="Date Action Taken">
                <?php if($errors['date_action_taken']): ?>
                  <div class="invalid-feedback">
                    <?= $errors['date_action_taken'] ?>
                  </div>
              <?php endif; ?>
          </div>
        </div>
     </div>

     <div class="row">
       <div class="col-md-5 offset-md-1">
         <div class="form-group">
           <label for="blotter_id">Handled By</label>
           <input name="handled_by" type="text" value="<?= isset($rec['handled_by']) ? $rec['handled_by'] : set_value('handled_by') ?>" class="form-control <?= $errors['handled_by'] ? 'is-invalid':'is-valid' ?>" id="handled_by" placeholder="Handled By">
             <?php if($errors['handled_by']): ?>
               <div class="invalid-feedback">
                 <?= $errors['handled_by'] ?>
               </div>
             <?php endif; ?>
       </div>
    </div>
    <div class="col-md-5">
      <div class="form-group">
        <label for="remarks">Remarks</label>
        <input name="remarks" type="text" value="<?= isset($rec['remarks']) ? $rec['remarks'] : set_value('remarks') ?>" class="form-control <?= $errors['remarks'] ? 'is-invalid':'is-valid' ?>" id="remarks" placeholder="Remarks">
          <?php if($errors['remarks']): ?>
            <div class="invalid-feedback">
              <?= $errors['remarks'] ?>
            </div>
          <?php endif; ?>
    </div>
 </div>
  </div>

     <div class="row">
       <div class="col-md-10  offset-md-1">
         <div class="form-group">
           <label for="additional_details">Additional Details</label>
           <textarea name="additional_details" type="text" class="form-control <?= $errors['additional_details'] ? 'is-invalid':'is-valid'  ?>" id="additional_details" placeholder="Reason" rows="5"><?= isset($rec['additional_details']) ? $rec['additional_details'] : set_value('additional_details') ?></textarea>
           <?php if($errors['additional_details']): ?>
               <div class="invalid-feedback">
                 <?= $errors['additional_details'] ?>
               </div>
             <?php endif; ?>
         </div>
       </div>

     </div>


     <div class="row">
       <div class="col-md-6 offset-md-5">
         <button type="submit" class="btn btn-primary float-right">Submit</button>
       </div>
     </div>
   </form>
   <p style="clear: both"></p>
 </div>
</div>
