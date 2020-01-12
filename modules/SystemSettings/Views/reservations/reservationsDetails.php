<div class="row">
  <div class="col-md-8 offset-md-2">
    <div class="row">
      <div class="col-md-12">
        <span class="field">Citizen Name</span>
        <span class="field-value"><?= ucfirst($reservations[0]['last_name'].', '.$reservations[0]['first_name'].' '.$reservations[0]['middlename'].' '.$reservations[0]['extension_name']) ?></span>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <span class="field">Facility Name</span>
        <span class="field-value"><?= ucfirst($reservations[0]['facility_name']) ?></span>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <span class="field">Reservation Date</span>
        <span class="field-value"><?= ucfirst($reservations[0]['reservation_date_time_start'].' -to- '.$reservations[0]['reservation_date_time_end']) ?></span>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <span class="field">Reservation Payment</span>
        <span class="field-value"><?= ucfirst($reservations[0]['reservation_payment']) ?></span>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <span class="field">Payment</span>
        <span class="field-value"><?=$reservations[0]['is_paid'] == 1 ? 'Approved' : 'Not Approved' ?></span>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <span class="field">Approval</span>
        <span class="field-value"><?=$reservations[0]['is_approved'] == 1 ? 'Approved' : 'Not Approved' ?></span>

      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <span class="field">Processed By</span>
        <span class="field-value"><?= ucfirst($reservations[0]['lastname'].', '.$reservations[0]['firstname']) ?></span>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <span class="field">Date Paid</span>
        <span class="field-value"><?= ucfirst($reservations[0]['date_paid']) ?></span>
      </div>
    </div>

    <br>

    <div class="row">
      <div class="col-md-3 offset-8">
        <?php
         user_edit_link('reservations','edit-reservation', $permissions, $reservations[0]['id']);
        ?>
      </div>
    </div>
  </div>
</div>
<br>
