<div class="row">
  <div class="col-md-8 offset-md-2">
    <div class="row">
      <div class="col-md-12">
        <span class="field">Citizens Name</span>
        <span class="field-value"><?= ucfirst($reservation[0]['citizen_id']) ?></span>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <span class="field">Facility Name</span>
        <span class="field-value"><?= ucfirst($reservation[0]['facility_id']) ?></span>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <span class="field">Reservation Date Time Start/End</span>
        <span class="field-value"><?= ucfirst($reservation[0]['reservation_date_time_start'].' - '.$reservation[0]['reservation_date_time_end']) ?></span>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <span class="field">Reservation Payment</span>
        <span class="field-value"><?= ucfirst($reservation[0]['reservation_payment']) ?></span>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <span class="field">Is Paid?</span>
        <span class="field-value"><?= ucfirst($reservation[0]['is_paid']) ?></span>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <span class="field">Is Approved?</span>
        <span class="field-value"><?= ucfirst($reservation[0]['is_approved']) ?></span>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <span class="field">Processed By:</span>
        <span class="field-value"><?= ucfirst($reservation[0]['processed_by']) ?></span>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <span class="field">Date Paid</span>
        <span class="field-value"><?= ucfirst($reservation[0]['date_paid']) ?></span>
      </div>
    </div>

    <br>

    <div class="row">
      <div class="col-md-3 offset-8">
        <?php
         user_edit_link('reservations','edit-reservation', $permissions, $reservation[0]['id']);
        ?>
      </div>
    </div>
  </div>
</div>
<br>
