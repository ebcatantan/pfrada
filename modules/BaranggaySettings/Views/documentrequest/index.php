 <div class="row">
   <div class="col-md-10">
      search here
   </div>
   <div class="col-md-2">
    <?php user_add_link('document_requests', $_SESSION['userPermmissions']) ?>
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
        <th>User Name</th>
        <th>Citizen Date Needed</th>
        <!-- <th>Data Available</th> -->
        <!-- <th>Data Released</th> -->
        <!-- <th>Processed By</th>
        <th>Released By</th> -->
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php $cnt = 1; ?>
      <?php foreach($document_requests as $documentrequest): ?>
      <tr id="<?php echo $documentrequest['id']; ?>">
        <th scope="row"><?= $cnt++ ?></th>
        <td><?= ucwords($documentrequest['document_name']) ?></td>
        <td><?= ucwords($documentrequest['user_id']) ?></td>
        <td><?= ucwords($documentrequest['citizen_date_needed']) ?></td>
        <td class="text-center">
          <?php
            users_action('document_requests', $_SESSION['userPermmissions'], $document['id']);
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
    <?php paginater('document_requests', count($all_items), PERPAGE, $offset) ?>
  </div>
</div>
