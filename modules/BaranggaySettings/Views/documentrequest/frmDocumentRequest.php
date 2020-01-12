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
   <form action="<?= base_url() ?>document-requests/<?= isset($rec) ? 'edit/'.$rec['id'] : 'add' ?>" method="post">
     <div class="row">
       <div class="col-md-6 offset-md-3">
         <div class="form-group">
           <label for="document_id">Document Name: </label>
           <select name="document_id" class="form-control <? $errors['document_id'] ? 'is-invalid':'is-valid' ?>">
           <?php if (isset($rec['document_id'])): ?>
             <?php foreach ($documents as $document): ?>
               <?php if ($document['id'] == $rec['document_id']): ?>
                 <option value="<?= $document['id'] ?>" selected><?= strtoupper($document['document_id'])?></option>
               <?php else: ?>
                 <option value="<?= $document['id'] ?>" ><?= strtoupper($document['document_id'])?></option>
               <?php endif; ?>
             <?php endforeach; ?>
           <?php else: ?>
             <option value="">Select Document Name</option>
             <?php foreach ($documents as $document): ?>
               <option value="<?= $document['id'] ?>" ><?= strtoupper($document['document_id'])?></option>
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
         <label for="is_citizen">Is Citizen?</label>
         <select name="is_citizen" class="form-control <?= $errors['is_citizen'] ? 'is-invalid':'is-valid' ?>">
           <option value="">Choose</option>
           <option value="1">Citizen</option>
           <option value="2d">Corporation</option>
         </select>
           <?php if($errors['is_citizen']): ?>
             <div class="invalid-feedback">
               <?= $errors['is_citizen'] ?>
             </div>
           <?php endif; ?>
       </div>
     </div>
   </div>

   <div class="row">
     <div class="col-md-6 offset-md-3">
     <div class="form-group">
       <label for="date_requested">Date Requested</label>
       <input type="date" name="date_requested" type="text" value="<?= isset($rec['date_requested']) ? $rec['date_requested'] : set_value('date_requested') ?>" class="form-control <?= $errors['date_requested'] ? 'is-invalid':'is-valid' ?>" id="date_requested" placeholder="Date Requested">
         <?php if($errors['date_requested']): ?>
           <div class="invalid-feedback">
             <?= $errors['date_requested'] ?>
           </div>
         <?php endif; ?>
     </div>
   </div>
 </div>

 <div class="row">
   <div class="col-md-6 offset-md-3">
   <div class="form-group">
     <label for="citizen_date_needed">Citizen Date Needed</label>
     <input type="date" name="citizen_date_needed" type="text" value="<?= isset($rec['citizen_date_needed']) ? $rec['citizen_date_needed'] : set_value('citizen_date_needed') ?>" class="form-control <?= $errors['citizen_date_needed'] ? 'is-invalid':'is-valid' ?>" id="citizen_date_needed" placeholder="Citizen Date Needed">
       <?php if($errors['citizen_date_needed']): ?>
         <div class="invalid-feedback">
           <?= $errors['citizen_date_needed'] ?>
         </div>
       <?php endif; ?>
   </div>
 </div>
</div>

<div class="row">
  <div class="col-md-6 offset-md-3">
  <div class="form-group">
    <label for="date_available">Date Available</label>
    <input type="date" name="date_available" type="text" value="<?= isset($rec['date_available']) ? $rec['date_available'] : set_value('date_available') ?>" class="form-control <?= $errors['date_available'] ? 'is-invalid':'is-valid' ?>" id="date_available" placeholder="Date Available">
      <?php if($errors['date_available']): ?>
        <div class="invalid-feedback">
          <?= $errors['date_available'] ?>
        </div>
      <?php endif; ?>
  </div>
</div>
</div>

<div class="row">
  <div class="col-md-6 offset-md-3">
  <div class="form-group">
    <label for="date_released">Date Available</label>
    <input type="date" name="date_released" type="text" value="<?= isset($rec['date_released']) ? $rec['date_released'] : set_value('date_released') ?>" class="form-control <?= $errors['date_released'] ? 'is-invalid':'is-valid' ?>" id="date_released" placeholder="Date Available">
      <?php if($errors['date_released']): ?>
        <div class="invalid-feedback">
          <?= $errors['date_released'] ?>
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
