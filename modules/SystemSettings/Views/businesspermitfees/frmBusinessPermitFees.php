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
           <label for="document_id">Document Name</label>
           <select name="document_id" class="form-control <? $errors['document_id'] ? 'is-invalid':'is-valid' ?>">
           <?php if (isset($rec['document_id'])): ?>
             <?php foreach ($documents as $document): ?>
               <?php if ($document['id'] == $rec['document_id']): ?>
                 <option value="<?= $document['id'] ?>" selected><?= strtoupper($document['document_name'])?></option>
               <?php else: ?>
                 <option value="<?= $document['id'] ?>" ><?= strtoupper($document['document_name'])?></option>
               <?php endif; ?>
             <?php endforeach; ?>
           <?php else: ?>
             <option value="">Select Document Name</option>
             <?php foreach ($documents as $document): ?>
               <option value="<?= $document['id'] ?>" ><?= strtoupper($document['document_name'])?></option>
             <?php endforeach; ?>
           <?php endif; ?>
           </select>
             <?php if($errors['document_id']): ?>
               <div class="invalid-feedback">
                 <?= $errors['document_id'] ?>
               </div>
             <?php endif; ?>
         </div>
       </div>
     </div>
     <!-- document_id business_type_id papalitan  ng dropdown-->
     <div class="row">
       <div class="col-md-6 offset-md-3">
         <div class="form-group">
           <label for="business_type_id">Business Type Name</label>
           <select name="business_type_id" class="form-control <? $errors['business_type_id'] ? 'is-invalid':'is-valid' ?>">
              <?php if (isset($rec['business_type_id'])): ?>
                <?php foreach ($business_types as $business_type): ?>
                  <?php if ($business_type['id'] == $rec['business_type_id']): ?>
                    <option value="<?= $business_type['id'] ?>" selected><?= strtoupper($business_type['business_type_name'])?></option>
                    <?php else: ?>
                    <option value="<?= $business_type['id'] ?>" ><?= strtoupper($business_type['business_type_name'])?></option>
                    <?php endif; ?>
                    <?php endforeach; ?>
                    <?php else: ?>
                    <option value="">Select Business Type Name</option>
                    <?php foreach ($business_types as $business_type): ?>
                    <option value="<?= $business_type['id'] ?>" ><?= strtoupper($business_type['business_type_name'])?></option>
                    <?php endforeach; ?>
                    <?php endif; ?>
                    </select>
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
           <input name="new_applicant_charge" type="text" value="<?= isset($rec['new_applicant_charge']) ? $rec['new_applicant_charge'] : set_value('new_applicant_charge') ?>" class="form-control <?= $errors['new_applicant_charge'] ? 'is-invalid':'is-valid' ?>" id="new_applicant_charge" placeholder="New Applicant Charge">
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
           <input name="nrenewal_charge" type="text" value="<?= isset($rec['nrenewal_charge']) ? $rec['nrenewal_charge'] : set_value('nrenewal_charge') ?>" class="form-control <?= $errors['nrenewal_charge'] ? 'is-invalid':'is-valid' ?>" id="nrenewal_charge" placeholder="Renewal Charge">
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
