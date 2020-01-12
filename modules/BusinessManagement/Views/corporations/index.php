 <div class="row">
   <div class="col-md-10">
      Search Here!
   </div>
   <div class="col-md-2">
    <?php user_add_link('corporations', $_SESSION['userPermmissions']) ?>
   </div>
 </div>
<br>
  <?php $uri = new \CodeIgniter\HTTP\URI(current_url()); ?>
 <div class="table-responsive">
   <table class="table table-bordered">
    <thead class="thead-dark">
      <tr class="text-center">
        <th>#</th>
        <th>Business Name</th>
        <th>Date Registered</th>
        <th>Owner Name</th>
        <th>Address</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php $cnt = 1; ?>
      <?php foreach($corporations as $corporation): ?>
      <tr id="<?php echo $corporation['id']; ?>">
        <th scope="row"><?= $cnt++ ?></th>
        <td><?= ucwords($corporation['business_name']) ?></td>
        <td><?= ucwords($corporation['date_registered']) ?></td>
        <td><?= ucwords($corporation['owner_name']) ?></td>
        <td><?= ucwords($corporation['address']) ?></td>
        <td class="text-center">
          <?php
            users_action('corporations', $_SESSION['userPermmissions'], $corporation['id']);
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
    <?php paginater('corporations', count($all_items), PERPAGE, $offset) ?>
  </div>
</div>
