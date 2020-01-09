 <div class="row">
   <div class="col-md-10">
      search here
   </div>
   <div class="col-md-2">
    <?php user_add_link('business_types', $_SESSION['userPermmissions']) ?>
   </div>
 </div>
<br>
  <?php $uri = new \CodeIgniter\HTTP\URI(current_url()); ?>
 <div class="table-responsive">
   <table class="table table-bordered">
    <thead class="thead-dark">
      <tr class="text-center">
        <th>#</th>
        <th>Business Types Name</th>
        <th>Description</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php $cnt = 1; ?>
      <?php foreach($businesstypes as $businesstype): ?>
      <tr id="<?php echo $businesstype['id']; ?>">
        <th scope="row"><?= $cnt++ ?></th>
        <td><?= ucwords($businesstype['business_type_name']) ?></td>
        <td><?= ucwords($businesstype['description']) ?></td>
        <td class="text-center">
          <?php
            users_action('business_types', $_SESSION['userPermmissions'], $businesstype['id']);
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
    <?php paginater('business-types', count($all_items), PERPAGE, $offset) ?>
  </div>
</div>
