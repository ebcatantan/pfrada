    <div class="row">
      <div class="col-md-12">
        <span class="field">Name</span>
        <span class="field-value"><?= ucfirst($brgyofficials[0]['last_name'].', '.$brgyofficials[0]['first_name'].' '.$brgyofficials[0]['middlename'].' '.$brgyofficials[0]['ext_name']) ?></span>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <span class="field">Address</span>
        <span class="field-value"><?= ucfirst($brgyofficials[0]['address']) ?></span>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <span class="field">Barangay</span>
        <span class="field-value"><?= ucfirst($brgyofficials[0]['barangay']) ?></span>
      </div>
    </div>


    <div class="row">
      <div class="col-md-12">
        <span class="field">Birth Date</span>
        <span class="field-value"><?= ucfirst($brgyofficials[0]['birth_date']) ?></span>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <span class="field">Gender</span>
        <span class="field-value"><?=$brgyofficials[0]['gender'] == 'M' ? 'Male' : 'Female' ?></span>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <span class="field">Civil Status</span>
        <span class="field-value"><?= $brgyofficials[0]['civil_status'] == 'Single' ? 'Single' : 'Married' ?></span>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <span class="field">Email</span>
        <span class="field-value"><?= ucfirst($brgyofficials[0]['email']) ?></span>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <span class="field">Contact Number</span>
        <span class="field-value"><?= ucfirst($brgyofficials[0]['contact_no']) ?></span>
      </div>
    </div>

    <br>
    <div class="row">
      <div class="col-md-3 offset-8">
        <?php
        user_edit_link('brgy_officials','edit-barangayofficial', $permissions, $brgyofficials[0]['id']);
        ?>
      </div>
    </div>
  </div>
</div>
<br>
