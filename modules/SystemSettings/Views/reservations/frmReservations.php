 <div class="row">
   <div class="col-md-10">
      search here
   </div>
   <div class="col-md-2">
     <!--  <a href="<?= base_url() ?>node/add" class="btn btn-sm btn-primary btn-block float-right">Add Node</a> -->
   </div>
 </div>
<br>

<div class="row">
  <div class="col-md-12">
    <form action="<?= base_url() ?>reservations/<?= isset($rec) ? 'edit/'.$rec['id'] : 'add' ?>" method="post">

      <div class="row">
        <div class="col-md-10 offset-md-1">
          <div class="form-group">
            <label for="citizen_id">Citizen Name</label>
            <select class="form-control <?= $errors['citizen_id'] ? 'is-invalid':'is-valid' ?>" name="citizen_id" id="citizen_id">
              <?php if(isset($rec['citizen_id'])): ?>
                <option value="<?= $rec['citizen_id'] ?>"><?= ucwords(name_on_system($rec['citizen_id'], $citizens, 'patients')) ?></option>
              <?php else: ?>
                <option value="">Select Citizen</option>
              <?php endif; ?>
              <?php foreach ($citizens as $citizen): ?>
                <option value="<?= $citizen['id']?>"><?=$citizen['last_name'].", ".$citizen['first_name']." ".$citizen['middlename']." ".$citizen['extension_name']?></option>
              <?php endforeach; ?>
            </select>

              <?php if($errors['citizen_id']): ?>
                <div class="invalid-feedback">
                  <?= $errors['citizen_id'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
    </div>

      <div class="row">
        <div class="col-md-10 offset-md-1">
          <div class="form-group">
            <label for="facility_id">Facility Name</label>
            <select class="form-control <?= $errors['facility_id'] ? 'is-invalid':'is-valid' ?>" name="facility_id" id="facility_id">
              <?php if(isset($rec['facility_id'])): ?>
                <option value="<?= $rec['facility_id'] ?>"><?= ucwords(name_on_system($rec['facility_id'], $facilities, 'facilities')) ?></option>
              <?php else: ?>
                <option value="">-- Select Facility --</option>
              <?php endif; ?>
              <?php foreach ($facilities as $facility): ?>
                <option value="<?= $facility['id']?>"><?=$facility['facility_name']?></option>
              <?php endforeach; ?>
            </select>
            <?php if($errors['facility_id']): ?>
                <div class="invalid-feedback">
                  <?= $errors['facility_id'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-5 offset-md-1">
          <div class="form-group">
            <label for="reservation_date_time_start">Start of Reservation</label>
            <input name="reservation_date_time_start" type="datetime-local" class="form-control <?= $errors['reservation_date_time_start'] ? 'is-invalid':'is-valid'  ?>" value="<?= isset($rec['reservation_date_time_start']) ? $rec['reservation_date_time_start'] : set_value('reservation_date_time_start') ?>"id="reservation_date_time_start" placeholder="Reservation Date Time Start" rows="5">
            <?php if($errors['reservation_date_time_start']): ?>
                <div class="invalid-feedback">
                  <?= $errors['reservation_date_time_start'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>


      <!-- <div class="row"> -->
        <div class="col-md-5">
          <div class="form-group">
            <label for="reservation_date_time_end">End of Reservation</label>
            <input name="reservation_date_time_end" type="datetime-local" class="form-control <?= $errors['reservation_date_time_end'] ? 'is-invalid':'is-valid'  ?>" value="<?= isset($rec['reservation_date_time_end']) ? $rec['reservation_date_time_end'] : set_value('reservation_date_time_end') ?>"id="reservation_date_time_end" placeholder="Reservation Date Time End" rows="5">
            <?php if($errors['reservation_date_time_end']): ?>
                <div class="invalid-feedback">
                  <?= $errors['reservation_date_time_end'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-5 offset-md-1">
          <div class="form-group">
            <label for="reservation_payment">Reservation Payment</label>
            <input name="reservation_payment" type="text" class="form-control <?= $errors['reservation_payment'] ? 'is-invalid':'is-valid'  ?>" value="<?= isset($rec['reservation_payment']) ? $rec['reservation_payment'] : set_value('reservation_payment') ?>" id="reservation_payment" placeholder="Reservation Payment" rows="5">
            <?php if($errors['reservation_payment']): ?>
                <div class="invalid-feedback">
                  <?= $errors['reservation_payment'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>


      <!-- <div class="row"> -->
        <div class="col-md-5">
          <div class="form-group">
            <label for="is_approved">Approval</label>
            <select class="form-control <?= $errors['is_approved'] ? 'is-invalid':'is-valid' ?>" name="is_approved" id="is_approved">
              <option value="">-- Please Select Your Answer --</option>
              <option value='1'<?= $rec['is_approved'] == '1'?'selected':'';?>>Approved</option>
              <option value='1'<?= $rec['is_approved'] == '0'?'selected':'';?>>Not Approved</option>
              <option value='0'<?= $rec['is_approved'] == '2'?'selected':'';?>>Cancelled</option>
            </select>
            <?php if($errors['is_approved']): ?>
                <div class="invalid-feedback">
                  <?= $errors['is_approved'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-5 offset-md-1">
          <div class="form-group">
            <label for="is_paid">Payment</label>
            <select class="form-control <?= $errors['is_paid'] ? 'is-invalid':'is-valid' ?>" name="is_paid" id="is_paid">
              <option value="">-- Please Select Your Answer --</option>
              <option value='1'<?= $rec['is_paid'] == '1'?'selected':'';?>>Approved</option>
              <option value='0'<?= $rec['is_paid'] == '0'?'selected':'';?>>Not Approved</option>
              <option value='0'<?= $rec['is_paid'] == '2'?'selected':'';?>>Cancelled</option>
            </select>
            <?php if($errors['is_paid']): ?>
                <div class="invalid-feedback">
                  <?= $errors['is_paid'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>


      <!-- <div class="row"> -->
        <div class="col-md-5">
          <div class="form-group">
            <label for="processed_by">Processed  by</label>
            <select class="form-control <?= $errors['processed_by'] ? 'is-invalid':'is-valid' ?>" name="processed_by" id="processed_by">
              <?php if(isset($rec['processed_by'])): ?>
                <option value="<?= $rec['processed_by'] ?>"><?= ucwords(name_on_system($rec['processed_by'], $users, 'users')) ?></option>
              <?php else: ?>
                <option value="">-- Select Your Answer --</option>
              <?php endif; ?>
              <?php foreach ($users as $user): ?>
                <option value="<?= $user['id']?>"><?=$user['lastname'].', '.$user['firstname']?></option>
              <?php endforeach; ?>
            </select>
            <?php if($errors['processed_by']): ?>
                <div class="invalid-feedback">
                  <?= $errors['processed_by'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>

        <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="form-group">
            <label for="date_paid">Date of Payment</label>
            <input name="date_paid" type="datetime-local" class="form-control <?= $errors['date_paid'] ? 'is-invalid':'is-valid'  ?>" value="<?= isset($rec['date_paid']) ? $rec['date_paid'] : set_value('date_paid') ?>"id="date_paid" placeholder="Date Paid" rows="5">
              <?php if($errors['date_paid']): ?>
                <div class="invalid-feedback">
                  <?= $errors['date_paid'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-5 offset-md-6">
          <button type="submit" class="btn btn-primary float-right">Submit</button>
        </div>
      </div>
    </form>
    <p style="clear: both"></p>
  </div>
</div>
