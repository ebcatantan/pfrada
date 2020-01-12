<div class="row">
  <div class="col-md-10">
     search here
  </div>
  <div class="col-md-2">
   <?php user_add_link('blotter_actions', $_SESSION['userPermmissions']) ?>
  </div>
</div>
<br>
 <?php $uri = new \CodeIgniter\HTTP\URI(current_url()); ?>
<div class="table-responsive">
  <table class="table table-bordered">
   <thead class="thead-dark">
     <tr class="text-center">
       <th>#</th>
       <th>Blotter ID</th>
       <th>Handled By</th>
       <th>Remarks</th>
       <th>Date Action Taken</th>
       <th>Action</th>
     </tr>
   </thead>
   <tbody>
     <?php $cnt = 1; ?>
     <?php foreach($blotter_actions as $blotteraction): ?>
     <tr id="<?php echo $blotteraction['id']; ?>">
       <th scope="row"><?= $cnt++ ?></th>
       <td><?= ucwords($blotteraction['blotter_id']) ?></td>
       <td><?= ucwords($blotteraction['handled_by']) ?></td>
       <td><?= ucwords($blotteraction['remarks']) ?></td>
       <td><?= ucwords($blotteraction['date_action_taken']) ?></td>
       <td class="text-center">
         <?php
           users_action('blotter_actions', $_SESSION['userPermmissions'], $blotteraction['id']);
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
   <?php paginater('blotter_actions', count($all_items), PERPAGE, $offset) ?>
 </div>
</div>
