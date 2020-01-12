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
   <form action="<?= base_url() ?>blotters/<?= isset($rec) ? 'edit/'.$rec['id'] : 'add' ?>" method="post" >


      <div class="row">
        <div class="col-md-5 offset-md-1">
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
      <!-- </div>
     <div class="row"> -->
       <div class="col-md-5">
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

     <div class="row">
       <div class="col-md-5 offset-md-1">
         <div class="form-group">
           <label for="reason">Reason</label>
           <textarea name="reason" type="text" class="form-control <?= $errors['reason'] ? 'is-invalid':'is-valid'  ?>" id="reason" placeholder="Reason" rows="5"><?= isset($rec['reason']) ? $rec['reason'] : set_value('reason') ?></textarea>
           <?php if($errors['reason']): ?>
               <div class="invalid-feedback">
                 <?= $errors['reason'] ?>
               </div>
             <?php endif; ?>
         </div>
       </div>
     <!-- </div>

     <div class="row"> -->
       <div class="col-md-5">
         <div class="form-group">
           <label for="additional_details">Additional Details</label>
           <textarea name="additional_details" type="text" class="form-control <?= $errors['additional_details'] ? 'is-invalid':'is-valid'  ?>" id="additional_details" placeholder="Additional Details" rows="5"><?= isset($rec['additional_details']) ? $rec['additional_details'] : set_value('additional_details') ?></textarea>
           <?php if($errors['additional_details']): ?>
               <div class="invalid-feedback">
                 <?= $errors['additional_details'] ?>
               </div>
             <?php endif; ?>
         </div>
       </div>
     </div>

     <div class="row">
       <div class="col-md-5 offset-md-1">
           <div class="form-group">
             <label for="filling_date">Filling Date</label>
             <input type="date" name="filling_date" type="text" value="<?= isset($rec['filling_date']) ? $rec['filling_date'] : set_value('filling_date') ?>" class="form-control <?= $errors['filling_date'] ? 'is-invalid':'is-valid' ?>" id="filling_date" placeholder="Filling Date">
               <?php if($errors['filling_date']): ?>
                 <div class="invalid-feedback">
                   <?= $errors['filling_date'] ?>
                 </div>
             <?php endif; ?>
         </div>
       </div>
     <!-- </div>
     <div class="row"> -->
       <div class="col-md-5 ">
         <div class="form-group">
           <label for="processed_by">Processed By</label>
           <input name="processed_by" type="text" value="<?= isset($rec['processed_by']) ? $rec['processed_by'] : set_value('processed_by') ?>" class="form-control <?= $errors['processed_by'] ? 'is-invalid':'is-valid' ?>" id="processed_by" placeholder="Processed By">
             <?php if($errors['processed_by']): ?>
               <div class="invalid-feedback">
                 <?= $errors['processed_by'] ?>
               </div>
             <?php endif; ?>
         </div>
       </div>
     </div>

     <div class="row">
       <div class="col-md-5 offset-md-1">
         <div class="form-group">
           <label for="case_assigned_to">Case Assigned To</label>
           <input name="case_assigned_to" type="text" value="<?= isset($rec['case_assigned_to']) ? $rec['case_assigned_to'] : set_value('case_assigned_to') ?>" class="form-control <?= $errors['case_assigned_to'] ? 'is-invalid':'is-valid' ?>" id="citizen_id" placeholder="Case Assigned To">
             <?php if($errors['case_assigned_to']): ?>
               <div class="invalid-feedback">
                 <?= $errors['case_assigned_to'] ?>
               </div>
             <?php endif; ?>
         </div>
       </div>
     <!-- </div>
    <div class="row"> -->
      <div class="col-md-5">
        <div class="form-group">
          <label for="case_status">Case Status</label>
          <select name="case_status" class="form-control <?= $errors['case_status'] ? 'is-invalid':'is-valid' ?>">
            <option value="">Case Status</option>
            <option value="C">Closed</option>
            <option value="O">Open</option>
          </select>
            <?php if($errors['case_status']): ?>
              <div class="invalid-feedback">
                <?= $errors['case_status'] ?>
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
