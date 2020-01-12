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
   <form action="<?= base_url() ?>corporations/<?= isset($rec) ? 'edit/'.$rec['id'] : 'add' ?>" method="post">
     <div class="row">
       <div class="col-md-10 offset-md-1">
         <div class="form-group">
           <label for="business_name">business name</label>
           <input name="business_name" type="text" value="<?= isset($rec['business_name']) ? $rec['business_name'] : set_value('business_name') ?>" class="form-control <?= $errors['business_name'] ? 'is-invalid':'is-valid' ?>" id="business_name" placeholder="business name">
             <?php if($errors['business_name']): ?>
               <div class="invalid-feedback">
                 <?= $errors['business_name'] ?>
               </div>
             <?php endif; ?>
         </div>
       </div>
     </div>
     <div class="row">
      <div class="col-md-10 offset-md-1">
       <div class="form-group">
         <label for="date_registered">Date Registered</label>
         <input type="date" name="date_registered" type="text" value="<?= isset($rec['date_registered']) ? $rec['date_registered'] : set_value('date_registered') ?>" class="form-control <?= $errors['date_registered'] ? 'is-invalid':'is-valid' ?>" id="date_registered" placeholder="Date Registered">
           <?php if($errors['date_registered']): ?>
             <div class="invalid-feedback">
               <?= $errors['date_registered'] ?>
             </div>
           <?php endif; ?>
       </div>
     </div>
   </div>
   <div class="row">
     <div class="col-md-10 offset-md-1">
       <div class="form-group">
         <label for="bir_no">Bir Number</label>
         <input name="bir_no" type="text" value="<?= isset($rec['bir_no']) ? $rec['bir_no'] : set_value('bir_no') ?>" class="form-control <?= $errors['bir_no'] ? 'is-invalid':'is-valid' ?>" id="bir_no" placeholder="bir_no">
           <?php if($errors['bir_no']): ?>
             <div class="invalid-feedback">
               <?= $errors['bir_no'] ?>
             </div>
           <?php endif; ?>
       </div>
     </div>
   </div>
<div class="row">
    <div class="col-md-10 offset-md-1">
       <div class="form-group">
         <label for="tin_no">Tin Number</label>
         <input name="tin_no" type="text" value="<?= isset($rec['tin_no']) ? $rec['tin_no'] : set_value('tin_no') ?>" class="form-control <?= $errors['tin_no'] ? 'is-invalid':'is-valid' ?>" id="tin_no" placeholder="tin_no">
           <?php if($errors['tin_no']): ?>
             <div class="invalid-feedback">
               <?= $errors['tin_no'] ?>
             </div>
           <?php endif; ?>
       </div>
     </div>
   </div>
<div class="row">
      <div class="col-md-10 offset-md-1">
       <div class="form-group">
         <label for="philgeps">Philgeps</label>
         <input name="philgeps" type="text" value="<?= isset($rec['philgeps']) ? $rec['philgeps'] : set_value('philgeps') ?>" class="form-control <?= $errors['philgeps'] ? 'is-invalid':'is-valid' ?>" id="philgeps" placeholder="philgeps">
           <?php if($errors['philgeps']): ?>
             <div class="invalid-feedback">
               <?= $errors['philgeps'] ?>
             </div>
           <?php endif; ?>
       </div>
     </div>
   </div>
<div class="row">
      <div class="col-md-10 offset-md-1">
       <div class="form-group">
         <label for="owner_name">Owner Name</label>
         <input name="owner_name" type="text" value="<?= isset($rec['owner_name']) ? $rec['owner_name'] : set_value('owner_name') ?>" class="form-control <?= $errors['owner_name'] ? 'is-invalid':'is-valid' ?>" id="owner_name" placeholder="owner_name">
           <?php if($errors['owner_name']): ?>
             <div class="invalid-feedback">
               <?= $errors['owner_name'] ?>
             </div>
           <?php endif; ?>
       </div>
     </div>
   </div>
<div class="row">
      <div class="col-md-10 offset-md-1">
       <div class="form-group">
         <label for="address">Address</label>
         <input name="address" type="text" value="<?= isset($rec['address']) ? $rec['address'] : set_value('address') ?>" class="form-control <?= $errors['address'] ? 'is-invalid':'is-valid' ?>" id="address" placeholder="Address">
           <?php if($errors['address']): ?>
             <div class="invalid-feedback">
               <?= $errors['address'] ?>
             </div>
           <?php endif; ?>
       </div>
     </div>
   </div>
<div class="row">
    <div class="col-md-10 offset-md-1">
     <div class="form-group">
       <label for="contact_person_name">Contact Person Name</label>
       <input name="contact_person_name" type="text" value="<?= isset($rec['contact_person_name']) ? $rec['contact_person_name'] : set_value('contact_person_name') ?>" class="form-control <?= $errors['contact_person_name'] ? 'is-invalid':'is-valid' ?>" id="contact_person_name" placeholder="Contact Number">
         <?php if($errors['contact_person_name']): ?>
           <div class="invalid-feedback">
             <?= $errors['contact_person_name'] ?>
           </div>
         <?php endif; ?>
     </div>
   </div>
 </div>
<div class="row">
    <div class="col-md-10 offset-md-1">
   <div class="form-group">
     <label for="contact_person_email">Contact Person Email</label>
     <input name="contact_person_email" type="text" value="<?= isset($rec['contact_person_email']) ? $rec['contact_person_email'] : set_value('contact_person_email') ?>" class="form-control <?= $errors['contact_person_email'] ? 'is-invalid':'is-valid' ?>" id="contact_person_email" placeholder="Contact Number">
       <?php if($errors['contact_person_email']): ?>
         <div class="invalid-feedback">
           <?= $errors['contact_person_email'] ?>
         </div>
       <?php endif; ?>
   </div>
 </div>
</div>
<div class="row">
   <div class="col-md-10 offset-md-1">
  <div class="form-group">
    <label for="contact_no">Contact Number</label>
    <input name="contact_no" type="text" value="<?= isset($rec['contact_no']) ? $rec['contact_no'] : set_value('contact_no') ?>" class="form-control <?= $errors['contact_no'] ? 'is-invalid':'is-valid' ?>" id="contact_no" placeholder="Contact Number">
      <?php if($errors['contact_no']): ?>
        <div class="invalid-feedback">
          <?= $errors['contact_no'] ?>
        </div>
      <?php endif; ?>
  </div>
</div>
</div>

       <div class="col-md-10 offset-md-1">
         <button type="submit" class="btn btn-primary float-right">Submit</button>
       </div>
     </div>
   </form>
   <p style="clear: both"></p>
 </div>
</div>
