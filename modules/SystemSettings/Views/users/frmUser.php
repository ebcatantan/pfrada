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
    <form action="<?= base_url() ?>users/<?= isset($rec) ? 'edit/'.$rec['id'] : 'add' ?>" method="post">
      <div class="row">
        <div class="col-md-5 offset-md-1">
          <div class="form-group">
            <label for="firstname">Firstname</label>
            <input name="firstname" type="text" value="<?= isset($rec['firstname']) ? $rec['firstname'] : set_value('firstname') ?>" class="form-control <?= $errors['firstname'] ? 'is-invalid':'is-valid' ?>" id="firstname" placeholder="Firstname">
              <?php if($errors['firstname']): ?>
                <div class="invalid-feedback">
                  <?= $errors['firstname'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
        <div class="col-md-5">
          <div class="form-group">
            <label for="lastname">Lastname</label>
            <input name="lastname" type="text" value="<?= isset($rec['lastname']) ? $rec['lastname'] : set_value('lastname') ?>" class="form-control <?= $errors['lastname'] ? 'is-invalid':'is-valid' ?>" id="lastname" placeholder="Lastname">
              <?php if($errors['lastname']): ?>
                <div class="invalid-feedback">
                  <?= $errors['lastname'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-5 offset-md-1">
          <div class="form-group">
            <label for="username">Username</label>
            <input name="username" type="text" value="<?= isset($rec['username']) ? $rec['username'] : set_value('username') ?>" class="form-control <?= $errors['username'] ? 'is-invalid':'is-valid' ?>" id="username" placeholder="Username">
              <?php if($errors['username']): ?>
                <div class="invalid-feedback">
                  <?= $errors['username'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
        <div class="col-md-5">
          <div class="form-group">
            <label for="email">Email</label>
            <input name="email" type="email" value="<?= isset($rec['email']) ? $rec['email'] : set_value('email') ?>" class="form-control <?= $errors['email'] ? 'is-invalid':'is-valid' ?>" id="email" placeholder="Email">
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
            <label for="password">Password</label>
            <input name="password" type="password" value="<?= isset($rec['password']) ? '': set_value('password') ?>" class="form-control <?= $errors['password'] ? 'is-invalid':'is-valid' ?>" id="password" placeholder="Password">
              <?php if($errors['password']): ?>
                <div class="invalid-feedback">
                  <?= $errors['password'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
        <div class="col-md-5">
          <div class="form-group">
            <label for="password_retype">Password Re-type</label>
            <input name="password_retype" type="password" value="<?= isset($rec['password']) ? '' : set_value('password_retype') ?>" class="form-control <?= $errors['password_retype'] ? 'is-invalid':'is-valid' ?>" id="password_retype" placeholder="Password Re-type">
              <?php if($errors['password_retype']): ?>
                <div class="invalid-feedback">
                  <?= $errors['password_retype'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-5 offset-md-1">
          <div class="form-group">
            <label for="birthdate">Birthdate</label>
            <input name="birthdate" type="date" value="<?= isset($rec['birthdate']) ? $rec['birthdate'] : set_value('birthdate') ?>" class="form-control <?= $errors['birthdate'] ? 'is-invalid':'is-valid' ?>" id="birthdate" placeholder="Birthdate">
              <?php if($errors['birthdate']): ?>
                <div class="invalid-feedback">
                  <?= $errors['birthdate'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
        <div class="col-md-5">
          <label for="role_id">User Role</label>
          <select name="role_id" class="form-control <?= $errors['role_id'] ? 'is-invalid':'is-valid' ?>">
            <?php if(isset($rec['role_id'])): ?> 
              <option value="<?= $rec['role_id'] ?>"><?= name_on_system($rec['role_id'], $roles, 'roles') ?></option>
            <?php else: ?>
              <option value="">Select User Role</option>
            <?php endif; ?>

            <?php foreach($roles as $role): ?>
              <option value="<?= $role['id'] ?>"><?= ucwords($role['role_name']) ?></option>
            <?php endforeach; ?>
          </select>
           <?php if($errors['role_id']): ?>
              <div class="invalid-feedback">
                <?= $errors['role_id'] ?>
              </div>
            <?php endif; ?>
        </div>
      </div>
      <button type="submit" class="btn btn-primary float-right">Submit</button>
    </form>
    <p style="clear: both"></p>
  </div>
</div>