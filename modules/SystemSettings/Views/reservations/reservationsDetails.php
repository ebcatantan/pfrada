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
        <span class="field-value"><?= ucfirst($reservation[0]['reservation_date_time_start'].' - '.$reservation['reservation_date_time_end']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Approved</span>
        <span class="field-value"><?= ucfirst($reservation[0]['is_approved']) ?></span>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-3 offset-8">
        <?php
        user_edit_link('reservations','edit-reservations', $permissions, $businesstype[0]['id']);
        ?>
      </div>
    </div>
  </div>
</div>
<br>
