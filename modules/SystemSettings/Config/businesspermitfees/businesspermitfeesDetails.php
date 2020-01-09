<div class="row">
  <div class="col-md-8 offset-md-2">
    <div class="row">
      <div class="col-md-12">
        <span class="field">Document Id</span>
        <span class="field-value"><?= ucfirst($business_permit_fees[0]['document_id']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Business Type Id</span>
        <span class="field-value"><?= ucfirst($business_permit_fees[0]['business_type_id']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">New Applicant Charge</span>
        <span class="field-value"><?= ucfirst($business_permit_fees[0]['new_applicant_charge']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Renewal Charge</span>
        <span class="field-value"><?= ucfirst($business_permit_fees[0]['nrenewal_charge']) ?></span>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-3 offset-8">
        <?php
        user_edit_link('business-permit-fees','edit-business', $permissions, $business_permit_fees[0]['id']);
        ?>
      </div>
    </div>
  </div>
</div>
<br>
