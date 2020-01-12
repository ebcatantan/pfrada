<div class="row">
  <div class="col-md-8 offset-md-2">
    <!-- <div class="row">
      <div class="col-md-12">
        <span class="field">User Id</span>
        <span class="field-value"><?= ucfirst($corporations[0]['user_id']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Business Type Id</span>
        <span class="field-value"><?= ucfirst($corporations[0]['business_type_id']) ?></span>
      </div>
    </div> -->
    <div class="row">
      <div class="col-md-12">
        <span class="field">Business Name</span>
        <span class="field-value"><?= ucfirst($corporations[0]['business_name']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Date Registered</span>
        <span class="field-value"><?= ucfirst($corporations[0]['date_registered']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Bir No.</span>
        <span class="field-value"><?= ucfirst($corporations[0]['bir_no']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Tin No.</span>
        <span class="field-value"><?= ucfirst($corporations[0]['tin_no']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Philgeps</span>
        <span class="field-value"><?= ucfirst($corporations[0]['philgeps']) ?></span>
      </div>
    </div>  <div class="row">
        <div class="col-md-12">
          <span class="field">Owner Name</span>
          <span class="field-value"><?= ucfirst($corporations[0]['ownmer_name']) ?></span>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <span class="field">address</span>
          <span class="field-value"><?= ucfirst($corporations[0]['address']) ?></span>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <span class="field">Contact Person Name</span>
          <span class="field-value"><?= ucfirst($corporations[0]['contact_person_name']) ?></span>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <span class="field">Contact Person Email</span>
          <span class="field-value"><?= ucfirst($corporations[0]['contact_person_email']) ?></span>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <span class="field">Contact Number</span>
          <span class="field-value"><?= ucfirst($corporations[0]['contact_no']) ?></span>
        </div>
      </div>
    <br>
    <div class="row">
      <div class="col-md-3 offset-8">
        <?php
        user_edit_link('corporations','edit-corporation', $permissions, $corporations[0]['id']);
        ?>
      </div>
    </div>
  </div>
</div>
<br>
