<div class="row">
  <div class="col-md-10">
     search here
  </div>
  <div class="col-md-2">
   <?php user_add_link('blotters', $_SESSION['userPermmissions']) ?>
  </div>
</div>
<br>
 <?php $uri = new \CodeIgniter\HTTP\URI(current_url()); ?>
<div class="table-responsive">
  <table class="table table-bordered">
   <thead class="thead-dark">
     <tr class="text-center">
       <th>#</th>
       <th>Citizen ID</th>
       <th>Person Complained</th>
       <th>Filing Date</th>
       <th>Case Status</th>
       <th>Action</th>
     </tr>
   </thead>
   <tbody>
     <?php $cnt = 1; ?>
     <?php foreach($blotters as $blotter): ?>
     <tr id="<?php echo $blotter['id']; ?>">
       <th scope="row"><?= $cnt++ ?></th>
       <td><?= ucwords($blotter['citizen_id']) ?></td>
       <td><?= ucwords($blotter['person_complained']) ?></td>
       <td><?= ucwords($blotter['filling_date']) ?></td>
       <td><?= ucwords($blotter['case_status']) ?></td>
       <td class="text-center">
         <?php
           users_action('blotters', $_SESSION['userPermmissions'], $blotter['id']);
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
   <?php paginater('blotters', count($all_items), PERPAGE, $offset) ?>
 </div>
</div>
