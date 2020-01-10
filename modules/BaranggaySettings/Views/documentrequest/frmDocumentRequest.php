<div class="row">
  <div class="col-md-10">
  </div>
  <div class="col-md-2">
    <!--  <a href="<?= base_url() ?>node/add" class="btn btn-sm btn-primary btn-block float-right">Add Node</a> -->
  </div>
</div>
<br>
<div class="row">
 <div class="col-md-12">
   <form action="<?= base_url() ?>document-requests/<?= isset($rec) ? 'edit/'.$rec['id'] : 'add' ?>" method="post">
     <div class="row">
       <div class="col-md-6 offset-md-3">
         <div class="form-group">
           <label for="document_id">Document Name: </label>
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

     <div class="row">
       <div class="col-md-6 offset-md-3">
         <div class="form-group">
           <label for="clearance_purpose_id">Clearance Purpose</label>
           <select name="clearance_purpose_id" class="form-control <? $errors['clearance_purpose_id'] ? 'is-invalid':'is-valid' ?>">
           <?php if (isset($rec['clearance_purpose_id'])): ?>
             <?php foreach ($clearance_purposes as $clearance_purpose): ?>
               <?php if ($clearance_purpose['id'] == $rec['clearance_purpose_id']): ?>
                 <option value="<?= $clearance_purpose['id'] ?>" selected><?= strtoupper($clearance_purpose['purpose'])?></option>
               <?php else: ?>
                 <option value="<?= $clearance_purpose['id'] ?>" ><?= strtoupper($clearance_purpose['purpose'])?></option>
               <?php endif; ?>
             <?php endforeach; ?>
           <?php else: ?>
             <option value="">Select Clearance Name</option>
             <?php foreach ($clearance_purposes as $clearance_purpose): ?>
               <option value="<?= $clearance_purpose['id'] ?>" ><?= strtoupper($clearance_purpose['purpose'])?></option>
             <?php endforeach; ?>
           <?php endif; ?>
           </select>

           <!-- <select name="clearance_purpose_id" class="form-control <? $errors['clearance_purpose_id'] ? 'is-invalid':'is-valid' ?>">
           <?php if (isset($rec['clearance_purpose_id'])): ?>
             <option value="<?= $rec['clearance_purpose_id'] ?>"><?= strtoupper(name_on_system($rec['clearance_purpose_id'], $clearance_purposes, 'clearance_purposes')) ?></option>
           <?php else: ?>
             <option value="">Select Clearance Purpose</option>
           <?php endif; ?>

             <?php foreach ($clearance_purposes as $clearance_purpose): ?>
               <option value="<?= $clearance_purpose['id'] ?>" ><?= strtoupper($clearance_purpose['purpose'])?></option>
             <?php endforeach; ?>
           </select> -->
             <?php if($errors['clearance_purpose_id']): ?>
               <div class="invalid-feedback">
                 <?= $errors['clearance_purpose_id'] ?>
               </div>
             <?php endif; ?>
         </div>
       </div>
     </div>

     <div class="row">
       <div class="col-md-6 offset-md-3">
         <div class="form-group">
           <label for="voter_fee_amount">Voter fee amount</label>
           <input name="voter_fee_amount" type="text" value="<?= isset($rec['voter_fee_amount']) ? $rec['voter_fee_amount'] : set_value('voter_fee_amount') ?>" class="form-control <?= $errors['voter_fee_amount'] ? 'is-invalid':'is-valid' ?>" id="voter_fee_amount" placeholder="Voter fee amount">
             <?php if($errors['voter_fee_amount']): ?>
               <div class="invalid-feedback">
                 <?= $errors['voter_fee_amount'] ?>
               </div>
             <?php endif; ?>
         </div>
       </div>
     </div>

     <div class="row">
       <div class="col-md-6 offset-md-3">
         <div class="form-group">
           <label for="non_voter_fee_amount">Non-voter fee amount</label>
           <input name="non_voter_fee_amount" type="text" value="<?= isset($rec['non_voter_fee_amount']) ? $rec['non_voter_fee_amount'] : set_value('non_voter_fee_amount') ?>" class="form-control <?= $errors['non_voter_fee_amount'] ? 'is-invalid':'is-valid' ?>" id="non_voter_fee_amount" placeholder="Voter fee amount">
             <?php if($errors['non_voter_fee_amount']): ?>
               <div class="invalid-feedback">
                 <?= $errors['non_voter_fee_amount'] ?>
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
