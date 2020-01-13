 <div class="row">
   <div class="col-md-10">
      search here
   </div>
   <div class="col-md-2">
    <?php user_add_link('reservations', $_SESSION['userPermmissions']) ?>
   </div>
 </div>
<br>
  <?php $uri = new \CodeIgniter\HTTP\URI(current_url()); ?>
 <div class="table-responsive">
   <table class="table table-bordered">
    <thead class="thead-dark">
      <tr class="text-center">
        <th>#</th>
        <th>Citizen Name</th>
        <th>Facility Name</th>
        <th>Reservation Date/Time</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php $cnt = 1; ?>
      <?php foreach($reservations as $reservation): ?>
      <tr id="<?php echo $reservation['id']; ?>">
        <th scope="row"><?= $cnt++ ?></th>
        <td><?= ucwords($reservation['last_name'].' , '.$reservation['first_name']) ?></td>
        <td><?= ucwords($reservation['facility_name']) ?></td>
        <td><?= ucwords($reservation['reservation_date_time_start'].'  -  '.$reservation['reservation_date_time_end']) ?></td>
        <td class="text-center">
          <?php
            users_action('reservations', $_SESSION['userPermmissions'], $reservation['id']);
          ?>
        </td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
 </div>
<hr>

<div class="row">
  <div class="col-md-6 offset-md-6">
    <?php paginater('reservations', count($all_items), PERPAGE, $offset) ?>
  </div>
</div>
