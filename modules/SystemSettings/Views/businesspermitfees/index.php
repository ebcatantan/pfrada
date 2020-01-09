 <div class="row">
   <div class="col-md-10">
      Search Here!
   </div>
   <div class="col-md-2">
    <?php user_add_link('business_permit_fees', $_SESSION['userPermmissions']) ?>
   </div>
 </div>
<br>
  <?php $uri = new \CodeIgniter\HTTP\URI(current_url()); ?>
 <div class="table-responsive">
   <table class="table table-bordered">
    <thead class="thead-dark">
      <tr class="text-center">
        <th>ID</th>
        <th>Document Id</th>
        <th>Business Type Id</th>
        <th>New Applicant Charge</th>
        <th>Renewal Charge</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php $cnt = 1; ?>
      <?php foreach($business_permit_fees as $businesspermitfees): ?>
      <tr id="<?php echo $businesspermitfees['id']; ?>">
        <th scope="row"><?= $cnt++ ?></th>
        <td><?= ucwords($businesspermitfees['document_name']) ?></td>
        <td><?= ucwords($businesspermitfees['business_type_name']) ?></td>
        <td><?= ucwords($businesspermitfees['new_applicant_charge']) ?></td>
        <td><?= ucwords($businesspermitfees['nrenewal_charge']) ?></td>
        <td class="text-center">
          <?php
            users_action('business_permit_fees', $_SESSION['userPermmissions'], $businesspermitfees['id']);
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
    <?php paginater('business-permit-fees', count($all_items), PERPAGE, $offset) ?>
  </div>
</div>
