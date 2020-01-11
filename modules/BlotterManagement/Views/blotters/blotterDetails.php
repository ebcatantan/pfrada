<div class="row">
  <div class="col-md-8 offset-md-2">
    <div class="row">
      <div class="col-md-12">
        <span class="field">Citizen ID</span>
        <span class="field-value"><?= ucfirst($blotter[0]['citizen_id']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Person Complained</span>
        <span class="field-value"><?= ucfirst($blotter[0]['person_complained']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Reason</span>
        <span class="field-value"><?= ucfirst($blotter[0]['reason']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Additional Details</span>
        <span class="field-value"><?= ucfirst($blotter[0]['additional_details']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Filling Date</span>
        <span class="field-value"><?= ucfirst($blotter[0]['filling_date']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Processed By</span>
        <span class="field-value"><?= ucfirst($blotter[0]['processed_by']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Case Assigned To</span>
        <span class="field-value"><?= ucfirst($blotter[0]['case_assigned_to']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Case Status</span>
        <span class="field-value"><?= ucfirst($blotter[0]['case_status']) ?></span>
      </div>
    </div>
    <!-- <div class="row">
      <div class="col-md-12">
        <span class="field">Landing Page</span>
        <span class="field-value"><?= ucwords(name_on_system($role[0]['function_id'], $permissions, 'permissions')) ?></span>
      </div>
    </div> -->
    <br>
    <div class="row">
      <div class="col-md-3 offset-8">
        <?php
        user_edit_link('blotters','edit-blotter', $permissions, $blotter[0]['id']);
        ?>
      </div>
    </div>
  </div>
</div>
<br>
