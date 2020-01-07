<div class="row">
  <div class="col-md-10">
     Search Here!
  </div>
  <div class="col-md-2">
    <!--  <a href="<?= base_url() ?>node/add" class="btn btn-sm btn-primary btn-block float-right">Add Node</a> -->
  </div>
</div>
<br>
<div class="row">
 <div class="col-md-12">
   <form action="<?= base_url() ?>business-permit-fees/<?= isset($rec) ? 'edit/'.$rec['id'] : 'add' ?>" method="post">
     <div class="row">
       <div class="col-md-6 offset-md-3">
         <div class="form-group">
           <label for="document_id">Document Id</label>
           <input name="document_id" type="text" value="<?= isset($rec['document_id']) ? $rec['document_id'] : set_value('document_id') ?>" class="form-control <?= $errors['document_id'] ? 'is-invalid':'is-valid' ?>" id="document_id" placeholder="document_id">
             <?php if($errors['document_id']): ?>
               <div class="invalid-feedback">
                 <?= $errors['document_id'] ?>
               </div>
             <?php endif; ?>
         </div>
       </div>
     </div>
     <div class="row">
       <div class="col-md-6 offset-md-3">
         <div class="form-group">
           <label for="business_type_id">Business Type Id</label>
           <textarea name="business_type_id" type="text" class="form-control <?= $errors['business_type_id'] ? 'is-invalid':'is-valid'  ?>" id="business_type_id" placeholder="business_type_id" rows="5"><?= isset($rec['business_type_id']) ? $rec['business_type_id'] : set_value('business_type_id') ?></textarea>
           <?php if($errors['business_type_id']): ?>
               <div class="invalid-feedback">
                 <?= $errors['business_type_id'] ?>
               </div>
             <?php endif; ?>
         </div>
       </div>
     </div>
     <div class="row">
       <div class="col-md-6 offset-md-3">
         <div class="form-group">
           <label for="new_applicant_charge">New Applicant Charge</label>
           <textarea name="new_applicant_charge" type="text" class="form-control <?= $errors['new_applicant_charge'] ? 'is-invalid':'is-valid'  ?>" id="new_applicant_charge" placeholder="business new_applicant_charge" rows="5"><?= isset($rec['new_applicant_charge']) ? $rec['new_applicant_charge'] : set_value('new_applicant_charge') ?></textarea>
           <?php if($errors['new_applicant_charge']): ?>
               <div class="invalid-feedback">
                 <?= $errors['new_applicant_charge'] ?>
               </div>
             <?php endif; ?>
         </div>
       </div>
     </div>
     <div class="row">
       <div class="col-md-6 offset-md-3">
         <div class="form-group">
           <label for="nrenewal_charge">Renewal Charge</label>
           <textarea name="nrenewal_charge" type="text" class="form-control <?= $errors['nrenewal_charge'] ? 'is-invalid':'is-valid'  ?>" id="nrenewal_charge" placeholder="business nrenewal_charge" rows="5"><?= isset($rec['nrenewal_charge']) ? $rec['nrenewal_charge'] : set_value('nrenewal_charge') ?></textarea>
           <?php if($errors['nrenewal_charge']): ?>
               <div class="invalid-feedback">
                 <?= $errors['nrenewal_charge'] ?>
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
