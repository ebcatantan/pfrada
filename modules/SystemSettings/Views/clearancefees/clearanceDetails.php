<div class="row">
  <div class="col-md-8 offset-md-2">
    <div class="row">
      <div class="col-md-12">
        <span class="field">Document Name</span>
        <span class="field-value"><?= ucfirst($clearance_fees[0]['document_name']) ?></span>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <span class="field">Clearance Purpose</span>
        <span class="field-value"><?= ucfirst($clearance_fees[0]['purpose']) ?></span>
      </div>
    </div>

    <div class="row">
    <div class="col-md-12">
      <span class="field">Voter fee amount</span>
      <span class="field-value"><?= ucfirst($clearance_fees[0]['voter_fee_amount']) ?></span>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <span class="field">Non-voter fee amount</span>
    <span class="field-value"><?= ucfirst($clearance_fees[0]['non_voter_fee_amount']) ?></span>
  </div>
</div>
    <br>
    <div class="row">
      <div class="col-md-3 offset-8">
        <?php
        user_edit_link('clearance-fees','edit-clearance', $permissions, $clearance_fees[0]['id']);
        ?>
      </div>
    </div>
  </div>
</div>
<br>
