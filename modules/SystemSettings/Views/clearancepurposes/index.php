<div class="row">
  <div class="col-md-10">
     search here
  </div>
  <div class="col-md-2">
   <?php user_add_link('clearance_purposes', $_SESSION['userPermmissions']) ?>
  </div>
</div>
<br>
 <?php $uri = new \CodeIgniter\HTTP\URI(current_url()); ?>
<div class="table-responsive">
  <table class="table table-bordered">
   <thead class="thead-dark">
     <tr class="text-center">
       <th>#</th>
       <th>Purpose</th>
       <th>Description</th>
       <th>Purpose</th>
       <th>Action</th>
     </tr>
   </thead>
   <tbody>
     <?php $cnt = 1; ?>
     <?php foreach($clearance_purposes as $clearancepurpose): ?>
     <tr id="<?php echo $clearancepurpose['id']; ?>">
       <th scope="row"><?= $cnt++ ?></th>
       <td><?= ucwords($clearancepurpose['purpose']) ?></td>
       <td><?= ucwords($clearancepurpose['description']) ?></td>
       <td><?= ucwords($clearancepurpose['purpose']) ?></td>
       <td class="text-center">
         <?php
           users_action('clearance_purposes', $_SESSION['userPermmissions'], $clearancepurpose['id']);
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
   <?php paginater('clearance-purposes', count($all_items), PERPAGE, $offset) ?>
 </div>
</div>
