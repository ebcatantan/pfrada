  <div class="row">
      <div class="col-md-12">
        <span class="field">Last Name</span>
        <span class="field-value"><?= ucfirst($brgy_officials[0]['lastname']) ?></span>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <span class="field">First Name</span>
        <span class="field-value"><?= ucfirst($brgy_officials[0]['firstname']) ?></span>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <span class="field">Middle Name</span>
        <span class="field-value"><?= ucfirst($brgy_officials[0]['middlename']) ?></span>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <span class="field">Extension Name</span>
        <span class="field-value"><?= ucfirst($brgy_officials[0]['ext_name']) ?></span>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <span class="field">Address</span>
        <span class="field-value"><?= ucfirst($brgy_officials[0]['address']) ?></span>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <span class="field">Barangay</span>
        <span class="field-value"><?= ucfirst($brgy_officials[0]['barangay']) ?></span>
      </div>
    </div>


    <div class="row">
      <div class="col-md-12">
        <span class="field">Birth Date</span>
        <span class="field-value"><?= ucfirst($brgy_officials[0]['birth_date']) ?></span>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <span class="field">Gender</span>
        <span class="field-value"><?= ucfirst($brgy_officials[0]['gender']) ?></span>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <span class="field">First Name</span>
        <span class="field-value"><?= ucfirst($brgy_officials[0]['firstname']) ?></span>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <span class="field">Email</span>
        <span class="field-value"><?= ucfirst($brgy_officials[0]['email']) ?></span>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <span class="field">Contact Number</span>
        <span class="field-value"><?= ucfirst($brgy_officials[0]['contact_no']) ?></span>
      </div>
    </div>

    <br>
    <div class="row">
      <div class="col-md-3 offset-8">
        <?php
        user_edit_link('brgy_officials','edit-barangayofficial', $permissions, $brgy_officials[0]['id']);
        ?>
      </div>
    </div>
  </div>
</div>
<br>
