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
   <form action="<?= base_url() ?>citizens/<?= isset($rec) ? 'edit/'.$rec['id'] : 'add' ?>" method="post" enctype="multipart/form-data">


       <div class="row">
        <div class="col-md-5 offset-md-1">
          <div class="form-group">
            <label for="is_brgy_employee">Is Barangay Employee?</label>
              <select class="form-control <?= $errors['is_brgy_employee'] ? 'is-invalid':'is-valid' ?>" name="is_brgy_employee" id="is_brgy_employee">
                <option value="">Please Select Your Answer</option>
                <option value='1'<?= $rec['is_brgy_employee'] == '1'?'selected':'';?>>Yes</option>
                <option value='0'<?= $rec['is_brgy_employee'] == '0'?'selected':'';?>>No</option>
              </select>
              <?php if($errors['is_brgy_employee']): ?>
                <div class="invalid-feedback">
                  <?= $errors['is_brgy_employee'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
    </div>

     <div class="row">
      <div class="col-md-10 offset-md-1">
        <div class="form-group">
          <label for="citizen_image">Citizen Image</label>
          <input name="citizen_image" type="file" value="<?= isset($rec['citizen_image']) ? $rec['citizen_image'] : set_value('citizen_image') ?>" class="form-control <?= $errors['citizen_image'] ? 'is-invalid':'is-valid' ?>" id="citizen_image" placeholder="Citizen Image">
            <?php if($errors['citizen_image']): ?>
              <div class="invalid-feedback">
                <?= $errors['citizen_image'] ?>
              </div>
            <?php endif; ?>
        </div>
      </div>
    </div>

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
           <label for="extension_name">Extension name</label>
           <input name="extension_name" type="text" value="<?= isset($rec['extension_name']) ? $rec['extension_name'] : set_value('extension_name') ?>" class="form-control <?= $errors['extension_name'] ? 'is-invalid':'is-valid' ?>" id="extension_name" placeholder="Extension Name">
             <?php if($errors['extension_name']): ?>
               <div class="invalid-feedback">
                 <?= $errors['extension_name'] ?>
               </div>
             <?php endif; ?>
         </div>
       </div>
     </div>

     <div class="row">
       <div class="col-md-5 offset-md-1">
         <div class="form-group">
           <label for="maiden_name">Maiden name</label>
           <input name="maiden_name" type="text" value="<?= isset($rec['maiden_name']) ? $rec['maiden_name'] : set_value('maiden_name') ?>" class="form-control <?= $errors['maiden_name'] ? 'is-invalid':'is-valid' ?>" id="maiden_name" placeholder="Maiden Name">
             <?php if($errors['maiden_name']): ?>
               <div class="invalid-feedback">
                 <?= $errors['maiden_name'] ?>
               </div>
             <?php endif; ?>
         </div>
       </div>
     <!-- </div>
     <div class="row"> -->
       <div class="col-md-5 ">
         <div class="form-group">
           <label for="birth_date">Birth Date</label>
           <input name="birth_date" type="date" value="<?= isset($rec['birth_date']) ? $rec['birth_date'] : set_value('birth_date') ?>" class="form-control <?= $errors['birth_date'] ? 'is-invalid':'is-valid' ?>" id="birth_date">
             <?php if($errors['birth_date']): ?>
               <div class="invalid-feedback">
                 <?= $errors['birth_date'] ?>
               </div>
             <?php endif; ?>
         </div>
       </div>
     </div>

     <div class="row">
       <div class="col-md-5 offset-md-1">
         <div class="form-group">
           <label for="gender">Gender</label>
           <select class="form-control <?= $errors['gender'] ? 'is-invalid':'is-valid' ?>" name="gender" id="gender">
              <option value="">Please Select Your Answer</option>
              <option value='m'<?= $rec['gender'] == 'm'?'selected':'';?>>Male</option>
              <option value='f'<?= $rec['gender'] == 'f'?'selected':'';?>>Female</option>
            </select>
             <?php if($errors['gender']): ?>
               <div class="invalid-feedback">
                 <?= $errors['gender'] ?>
               </div>
             <?php endif; ?>
         </div>
       </div>
     <!-- </div>
     <div class="row"> -->
       <div class="col-md-5">
         <div class="form-group">
           <label for="civil_status">Civil Status</label>
           <select name="civil_status" class="form-control <?= $errors['civil_status'] ? 'is-invalid':'is-valid' ?>">
             <option value="">Civil Status</option>
             <option value="single">Single</option>
             <option value="married">Married</option>
           </select>
             <?php if($errors['civil_status']): ?>
               <div class="invalid-feedback">
                 <?= $errors['civil_status'] ?>
               </div>
             <?php endif; ?>
         </div>
       </div>
     </div>

     <div class="row">
       <div class="col-md-5 offset-md-1">
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
     <!-- </div>
     <div class="row"> -->
       <div class="col-md-5">
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
     <!-- </div>
     <div class="row"> -->
       <div class="col-md-5">
         <div class="form-group">
           <label for="citizen_voter_id">Citizen Voter ID</label>
           <input name="citizen_voter_id" type="text" value="<?= isset($rec['citizen_voter_id']) ? $rec['citizen_voter_id'] : set_value('citizen_voter_id') ?>" class="form-control <?= $errors['citizen_voter_id'] ? 'is-invalid':'is-valid' ?>" id="citizen_voter_id" placeholder="Citizen Voter ID">
             <?php if($errors['citizen_voter_id']): ?>
               <div class="invalid-feedback">
                 <?= $errors['citizen_voter_id'] ?>
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
