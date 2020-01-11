<div class="row">
  <div class="col-md-8 offset-md-2">
    <div class="row">
      <div class="col-md-12">
        <span class="field">Clearance Purpose</span>
        <span class="field-value"><?= ucfirst($clearance_purposes[0]['purpose']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Description</span>
        <span class="field-value"><?= ucfirst($clearance_purposes[0]['description']) ?></span>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-3 offset-8">
        <?php
        user_edit_link('clearance-purposes','edit-clearancepurpose', $permissions, $clearance_purposes[0]['id']);
        ?>
      </div>
    </div>
  </div>
</div>
<br>
