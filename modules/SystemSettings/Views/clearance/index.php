 <div class="row">
   <div class="col-md-10">
   </div>

   <div class="col-md-2">
    <?php user_add_link('clearance_fees', $_SESSION['userPermmissions']) ?>
   </div>
 </div>
 <br>
  <?php $uri = new \CodeIgniter\HTTP\URI(current_url()); ?>
 <div class="table-responsive">
   <table class="table table-bordered">
    <thead class="thead-dark">
      <tr class="text-center">
        <th>#</th>
        <th>Document Name</th>
        <th>Clearance Purpose</th>
        <th>Voter fee amount</th>
        <th>Non-voter fee amount</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php $cnt = 1; ?>
      <?php foreach($clearance_fees as $clearance): ?>
      <tr id="<?php echo $clearance['id']; ?>">
        <th scope="row"><?= $cnt++ ?></th>
        <td><?= ucwords($clearance['document_name']) ?></td>
        <td><?= ucwords($clearance['purpose']) ?></td>
        <td><?= ucwords($clearance['voter_fee_amount']) ?></td>
        <td><?= ucwords($clearance['non_voter_fee_amount']) ?></td>
        <td class="text-center">
          <?php
            users_action('clearance_fees', $_SESSION['userPermmissions'], $clearance['id']);
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
    <?php paginater('clearance-fees', count($all_items), PERPAGE, $offset) ?>
  </div>
</div>
