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
         <label for="is_citizen">Is Citizen?</label>
         <select class="form-control <?= $errors['is_citizen'] ? 'is-invalid':'is-valid' ?>" name="is_citizen" id="is_citizen">
           <option value="">-- Select --</option>
           <option value='1' <?= $rec['is_citizen'] == '1'?'selected':'';?>>Citizen</option>
           <option value='2' <?= $rec['is_citizen'] == '2'?'selected':'';?>>Corporation</option>
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
       <input name="date_requested" type="datetime-local" value="<?= isset($rec['date_requested']) ? $rec['date_requested'] : set_value('date_requested') ?>" class="form-control <?= $errors['date_requested'] ? 'is-invalid':'is-valid' ?>" id="date_requested" placeholder="Date Requested">
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
     <input name="citizen_date_needed" type="datetime-local" value="<?= isset($rec['citizen_date_needed']) ? $rec['citizen_date_needed'] : set_value('citizen_date_needed') ?>" class="form-control <?= $errors['citizen_date_needed'] ? 'is-invalid':'is-valid' ?>" id="citizen_date_needed" placeholder="Citizen Date Needed">
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
    <input name="date_available" type="datetime-local" value="<?= isset($rec['date_available']) ? $rec['date_available'] : set_value('date_available') ?>" class="form-control <?= $errors['date_available'] ? 'is-invalid':'is-valid' ?>" id="date_available" placeholder="Date Available">
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
    <label for="date_released">Date to be released</label>
    <input name="date_released" type="datetime-local" value="<?= isset($rec['date_released']) ? $rec['date_released'] : set_value('date_released') ?>" class="form-control <?= $errors['date_released'] ? 'is-invalid':'is-valid' ?>" id="date_released" placeholder="Date Available">
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
  <div class="form-group">
    <label for="processed_by">Processed by</label>
    <select name="processed_by" class="form-control <? $errors['processed_by'] ? 'is-invalid':'is-valid' ?>">
    <?php if (isset($rec['processed_by'])): ?>
      <?php foreach ($users as $user): ?>
        <?php if ($document['id'] == $rec['processed_by']): ?>
          <option value="<?= $user['id'] ?>" selected><?= strtoupper($user['lastname'].' '.$user['lastname'])?></option>
        <?php else: ?>
          <option value="<?= $user['id'] ?>" ><?= strtoupper($user['lastname'].' '.$user['lastname'])?></option>
        <?php endif; ?>
      <?php endforeach; ?>
    <?php else: ?>
      <option value="">-- Select --</option>
      <?php foreach ($users as $user): ?>
        <option value="<?= $user['id'] ?>" ><?= strtoupper($user['lastname'].' '.$user['lastname'])?></option>
      <?php endforeach; ?>
    <?php endif; ?>
    </select>
      <?php if($errors['processed_by']): ?>
        <div class="invalid-feedback">
          <?= $errors['processed_by'] ?>
        </div>
      <?php endif; ?>
  </div>
</div>
</div>

<div class="row">
  <div class="col-md-6 offset-md-3">
  <div class="form-group">
    <label for="released_by">Released by</label>
    <select name="released_by" class="form-control <? $errors['released_by'] ? 'is-invalid':'is-valid' ?>">
    <?php if (isset($rec['released_by'])): ?>
      <?php foreach ($users as $user): ?>
        <?php if ($document['id'] == $rec['released_by']): ?>
          <option value="<?= $user['id'] ?>" selected><?= strtoupper($user['lastname'].' '.$user['lastname'])?></option>
        <?php else: ?>
          <option value="<?= $user['id'] ?>" ><?= strtoupper($user['lastname'].' '.$user['lastname'])?></option>
        <?php endif; ?>
      <?php endforeach; ?>
    <?php else: ?>
      <option value="">-- Select --</option>
      <?php foreach ($users as $user): ?>
        <option value="<?= $user['id'] ?>" ><?= strtoupper($user['lastname'].' '.$user['lastname'])?></option>
      <?php endforeach; ?>
    <?php endif; ?>
    </select>
      <?php if($errors['released_by']): ?>
        <div class="invalid-feedback">
          <?= $errors['released_by'] ?>
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
