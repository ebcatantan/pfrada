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
   <form action="<?= base_url() ?>brgy-officials/<?= isset($rec) ? 'edit/'.$rec['id'] : 'add' ?>" method="post" enctype="multipart/form-data">
      <div class="row">
        <div class="col-md-5 offset-md-1">
          <div class="form-group">
            <label for="first_name">First name</label>
            <input name="first_name" type="text" value="<?= isset($rec['first_name']) ? $rec['first_name'] : set_value('first_name') ?>" class="form-control <?= $errors['first_name'] ? 'is-invalid':'is-valid' ?>" id="first_name" placeholder="First Name">
              <?php if($errors['first_name']): ?>
                <div class="invalid-feedback">
                  <?= $errors['first_name'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      <!-- </div>
     <div class="row"> -->
       <div class="col-md-5">
         <div class="form-group">
           <label for="last_name">Last name</label>
           <input name="last_name" type="text" value="<?= isset($rec['last_name']) ? $rec['last_name'] : set_value('last_name') ?>" class="form-control <?= $errors['last_name'] ? 'is-invalid':'is-valid' ?>" id="last_name" placeholder="Last Name">
             <?php if($errors['last_name']): ?>
               <div class="invalid-feedback">
                 <?= $errors['last_name'] ?>
               </div>
             <?php endif; ?>
         </div>
       </div>
     </div>

     <div class="row">
       <div class="col-md-5 offset-md-1">
         <div class="form-group">
           <label for="middlename">Middle name</label>
           <input name="middlename" type="text" value="<?= isset($rec['middlename']) ? $rec['middlename'] : set_value('middlename') ?>" class="form-control <?= $errors['middlename'] ? 'is-invalid':'is-valid' ?>" id="middlename" placeholder="Middle Name">
             <?php if($errors['middlename']): ?>
               <div class="invalid-feedback">
                 <?= $errors['middlename'] ?>
               </div>
             <?php endif; ?>
         </div>
       </div>
     <!-- </div>

     <div class="row"> -->
       <div class="col-md-5">
         <div class="form-group">
           <label for="ext_name">Extension name</label>
           <input name="ext_name" type="text" value="<?= isset($rec['ext_name']) ? $rec['ext_name'] : set_value('ext_name') ?>" class="form-control <?= $errors['ext_name'] ? 'is-invalid':'is-valid' ?>" id="ext_name" placeholder="Extension Name">
             <?php if($errors['ext_name']): ?>
               <div class="invalid-feedback">
                 <?= $errors['ext_name'] ?>
               </div>
             <?php endif; ?>
         </div>
       </div>
     </div>

     <div class="row">
       <div class="col-md-5 offset-md-1">
         <div class="form-group">
           <label for="birth_date">Birth Date</label>
           <input type="date" name="birth_date" type="text" value="<?= isset($rec['birth_date']) ? $rec['birth_date'] : set_value('birth_date') ?>" class="form-control <?= $errors['birth_date'] ? 'is-invalid':'is-valid' ?>" id="birth_date" placeholder="Birth Date">
             <?php if($errors['birth_date']): ?>
               <div class="invalid-feedback">
                 <?= $errors['birth_date'] ?>
               </div>
             <?php endif; ?>
         </div>
       </div>
     <!-- </div>

     <div class="row"> -->
       <div class="col-md-5">
         <div class="form-group">
           <label for="gender">Gender</label>
            <select class="form-control <?= $errors['gender'] ? 'is-invalid':'is-valid' ?>" name="gender" id="gender">
              <option value="">-- Select a Gender --</option>
              <option value='M' <?= $rec['gender'] == 'M'?'selected':'';?>>Male</option>
              <option value='F' <?= $rec['gender'] == 'F'?'selected':'';?>>Female</option>
            </select>
             <?php if($errors['gender']): ?>
               <div class="invalid-feedback">
                 <?= $errors['gender'] ?>
               </div>
             <?php endif; ?>
         </div>
       </div>
     </div>

     <div class="row">
       <div class="col-md-5 offset-md-1">
         <div class="form-group">
           <label for="civil_status">Civil Status</label>
           <select class="form-control <?= $errors['civil_status'] ? 'is-invalid':'is-valid' ?>" name="civil_status" id="civil_status">
             <option value="">-- Select a Civil Status --</option>
             <option value='Single' <?= $rec['civil_status'] == 'Single'?'selected':'';?>>Single</option>
             <option value='Married' <?= $rec['civil_status'] == 'Married'?'selected':'';?>>Married</option>
           </select>
             <?php if($errors['civil_status']): ?>
               <div class="invalid-feedback">
                 <?= $errors['civil_status'] ?>
               </div>
             <?php endif; ?>
         </div>
       </div>
     <!-- </div>

     <div class="row"> -->
       <div class="col-md-5">
         <div class="form-group">
           <label for="email">Email</label>
           <input  name="email" type="text" value="<?= isset($rec['email']) ? $rec['email'] : set_value('email') ?>" class="form-control <?= $errors['email'] ? 'is-invalid':'is-valid' ?>" id="email" placeholder="Email">
             <?php if($errors['email']): ?>
               <div class="invalid-feedback">
                 <?= $errors['email'] ?>
               </div>
             <?php endif; ?>
         </div>
       </div>
     </div>

     <div class="row">
       <div class="col-md-5 offset-md-1">
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
     <!-- </div>

     <div class="row"> -->
       <div class="col-md-5">
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
       <div class="col-md-5 offset-md-1">
         <div class="form-group">
           <label for="barangay">Barangay</label>
           <input name="barangay" type="text" value="<?= isset($rec['barangay']) ? $rec['barangay'] : set_value('barangay') ?>" class="form-control <?= $errors['barangay'] ? 'is-invalid':'is-valid' ?>" id="barangay" placeholder="Barangay">
             <?php if($errors['barangay']): ?>
               <div class="invalid-feedback">
                 <?= $errors['barangay'] ?>
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
