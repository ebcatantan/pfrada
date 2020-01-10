 <div class="row">
   <div class="col-md-10">
      search here
   </div>
   <div class="col-md-2">
    <?php user_add_link('reservation_fees', $_SESSION['userPermmissions']) ?>
   </div>
 </div>
<br>
  <?php $uri = new \CodeIgniter\HTTP\URI(current_url()); ?>
 <div class="table-responsive">
   <table class="table table-bordered">
    <thead class="thead-dark">
      <tr class="text-center">
        <th>#</th>
        <th>Facility Name</th>
        <th>Fee per hour</th>
        <th>Maintentance fee</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php $cnt = 1; ?>
      <?php foreach($reservation_fees as $reservation_fee): ?>
      <tr id="<?php echo $reservation_fee['id']; ?>">
        <th scope="row"><?= $cnt++ ?></th>
        <td><?= ucwords($reservation_fee['facility_name']) ?></td>
        <td><?= ucwords($reservation_fee['fee_per_hour']) ?></td>
        <td><?= ucwords($reservation_fee['maintenance_fee']) ?></td>
        <td class="text-center">
          <?php
            users_action('reservation_fees', $_SESSION['userPermmissions'], $reservation_fee['id']);
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
    <?php paginater('reservation_fees', count($all_items), PERPAGE, $offset) ?>
  </div>
</div>
