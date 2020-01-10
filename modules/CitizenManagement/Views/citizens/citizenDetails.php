
<div class="row">
  <div class="col-md-8 offset-md-2">

    <?php if($citizen[0]['user_id'] != 0): ?>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Citizen as</span>
        <span class="field-value"><?= ucwords(name_on_system($citizen[0]['user_id'], $users, 'users')) ?></span>
      </div>
    </div>
    <?php endif; ?>

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
        <span class="field">Last Name</span>
        <span class="field-value"><?= ucfirst($citizen[0]['lastname']) ?></span>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <span class="field">First Name</span>
        <span class="field-value"><?= ucfirst($citizen[0]['firstname']) ?></span>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <span class="field">Middle Name</span>
        <span class="field-value"><?= ucfirst($citizen[0]['middlename']) ?></span>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <span class="field">Extension Name</span>
        <span class="field-value"><?= ucfirst($citizen[0]['extension_name']) ?></span>
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
        <span class="field">Birth Date</span>
        <span class="field-value"><?= ucfirst($citizen[0]['birth_date']) ?></span>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <span class="field">Gender</span>
        <span class="field-value"><?= ucfirst($citizen[0]['gender']) ?></span>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <span class="field">Civil Status</span>
        <span class="field-value"><?= ucfirst($citizen[0]['civil_status']) ?></span>
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
