
<div class="row">
  <div class="col-md-8 offset-md-2">

    <div class="row">
      <div class="col-md-12">
        <span class="field">Citizen Image</span>
        <span class="field-value">
          <a href="<?= base_url().'uploads/'.strtoupper($citizen[0]['citizen_image']) ?>" target="_blank"><i class="far fa-file-alt"></i> VIEW IMAGE</a>
        </span>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <span class="field">Name</span>
        <span class="field-value"><?= ucfirst($citizen[0]['last_name'].", ".$citizen[0]['first_name']." ".$citizen[0]['middlename']." ".$citizen[0]['extension_name']) ?></span>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <span class="field">Maiden Name</span>
        <span class="field-value"><?= ucfirst($citizen[0]['maiden_name']) ?></span>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <span class="field">Address</span>
        <span class="field-value"><?= ucfirst($citizen[0]['address']) ?></span>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <span class="field">Barangay</span>
        <span class="field-value"><?= ucfirst($citizen[0]['barangay']) ?></span>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <span class="field">Age</span>
        <span class="field-value"><?= $citizen[0]['birth_date'] ?> (<?= floor((time() - strtotime($citizen[0]['birth_date'])) / 31556926) ?> yrs old) </span>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <span class="field">Gender</span>
        <span class="field-value"><?=$citizen[0]['gender'] == 'M' ? 'Male' : 'Female' ?></span>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <span class="field">Civil Status</span>
        <span class="field-value"><?=$citizen[0]['civil_status'] == 'Single' ? 'Single' : 'Married' ?></span>
        <!-- <span class="field-value"><?= ucfirst($citizen[0]['civil_status']) ?></span> -->
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <span class="field">Email</span>
        <span class="field-value"><?= ucfirst($citizen[0]['email']) ?></span>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <span class="field">Contact Number</span>
        <span class="field-value"><?= ucfirst($citizen[0]['contact_no']) ?></span>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <span class="field">Citizen Voter ID</span>
        <span class="field-value"><?= ucfirst($citizen[0]['citizen_voter_id']) ?></span>
      </div>
    </div>


    <br>
    <div class="row">
      <div class="col-md-3 offset-8">
        <?php
        user_edit_link('citizens','edit-citizen', $permissions, $citizen[0]['id']);
        ?>
      </div>
    </div>
  </div>
</div>
<br>
