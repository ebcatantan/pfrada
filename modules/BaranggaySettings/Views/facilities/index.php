 <div class="row">
   <div class="col-md-10">
      search here
   </div>
   <div class="col-md-2">
    <?php user_add_link('facilities', $_SESSION['userPermmissions']) ?>
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
        <th>Description</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php $cnt = 1; ?>
      <?php foreach($facilities as $facility): ?>
      <tr id="<?php echo $facility['id']; ?>">
        <th scope="row"><?= $cnt++ ?></th>
        <td><?= ucwords($facility['facility_name']) ?></td>
        <td><?= ucwords($facility['description']) ?></td>
        <td class="text-center">
          <?php
            users_action('facilities', $_SESSION['userPermmissions'], $facility['id']);
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
    <?php paginater('roles', count($all_items), PERPAGE, $offset) ?>
  </div>
</div>
