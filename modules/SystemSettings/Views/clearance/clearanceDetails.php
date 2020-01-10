<div class="row">
  <div class="col-md-8 offset-md-2">
    <div class="row">
      <div class="col-md-12">
        <span class="field">Document ID</span>
        <span class="field-value"><?= ucfirst($clearance_fees[0]['document_id']) ?></span>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <span class="field">Clearance Purpose ID</span>
        <span class="field-value"><?= ucfirst($clearance_fees[0]['clearance_purpose_id']) ?></span>
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
