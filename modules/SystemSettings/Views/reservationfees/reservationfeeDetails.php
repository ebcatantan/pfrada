<div class="row">
  <div class="col-md-8 offset-md-2">
    <div class="row">
      <div class="col-md-12">
        <span class="field">Facility Name</span>
        <span class="field-value"><?= ucfirst($reservation_fees[0]['facility_id']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Fee per hour</span>
        <span class="field-value"><?= ucfirst($reservation_fees[0]['fee_per_hour']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Maintenance Fee</span>
        <span class="field-value"><?= ucfirst($reservation_fees[0]['maintenance_fee']) ?></span>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-3 offset-8">
        <?php
        user_edit_link('reservation-fees','edit-reservation-fees', $permissions, $reservation_fees[0]['id']);
        ?>
      </div>
    </div>
  </div>
</div>
<br>
