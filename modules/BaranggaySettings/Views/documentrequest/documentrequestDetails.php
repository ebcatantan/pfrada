<div class="row">
  <div class="col-md-8 offset-md-2">
    <div class="row">
      <div class="col-md-12">
        <span class="field">Document Name</span>
        <span class="field-value"><?= ucfirst($documentrequest[0]['document_name']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Citizen or Corporation</span>
        <span class="field-value"><?= ucfirst($documentrequest[0]['is_citizen']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Date Requested</span>
        <span class="field-value"><?= ucfirst($documentrequest[0]['date_requested']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Date needed</span>
        <span class="field-value"><?= ucfirst($documentrequest[0]['citizen_date_needed']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Date availability</span>
        <span class="field-value"><?= ucfirst($documentrequest[0]['date_available']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Release Date</span>
        <span class="field-value"><?= ucfirst($documentrequest[0]['date_released']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Processed by</span>
        <span class="field-value"><?= ucfirst($documentrequest[0]['lastname'].' '.$documentrequest[0]['firstname']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Released by</span>
        <span class="field-value"><?= ucfirst($documentrequest[0]['lastname'].' '.$documentrequest[0]['firstname']) ?></span>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-3 offset-8">
        <?php
        user_edit_link('document_requests','edit-document', $permissions, $documentrequest[0]['id']);
        ?>
      </div>
    </div>
  </div>
</div>
<br>
