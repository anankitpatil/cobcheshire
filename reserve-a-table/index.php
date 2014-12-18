<?php include '../header.php'; ?>
<link rel="canonical" href="http://cobcheshire.com/reserve-a-table" />
<title>Cock O' Barton | Reserve A Table</title>
<?php include '../nav.php'; ?>
<div class="container reserve-a-table">
  <div class="row mb24">
    <div class="col-lg-9">
      <h1 class="mt48 mb48">Reserve a table</h1>
      <div class="row">
        <div class="col-lg-2 col-sm-2"> </div>
        <div class="col-lg-8 col-sm-8 bodycopy">
          <p>Simply fill out the details out below with a time, date and number of people and we will get back to you as soon as possible!</p>
          <div class="alert alert-success"><strong>We've received your reservation request. We will get in touch with you soon!</strong></div>
          <div class="alert alert-danger"><strong>Something went wrong! Please refresh the page and try again.</strong></div>
          <form id="reserve" role="form" action="../scripts/reserve.php" class="form-horizontal" method="post" data-bv-feedbackicons-valid="glyphicon glyphicon-ok" data-bv-feedbackicons-invalid="glyphicon glyphicon-remove" data-bv-feedbackicons-validating="glyphicon glyphicon-refresh">
            <div class="form-group col-lg-12">
              <label for="InputName">Your Name</label>
              <input type="text" class="form-control" name="InputName" id="InputName" placeholder="Enter Name" required>
            </div>
            <div class="form-group col-lg-12">
              <label for="InputEmail">Your Email</label>
              <input type="email" class="form-control" id="InputEmail" name="InputEmail" placeholder="Enter Email" required  >
            </div>
            <div class="form-group col-lg-12">
              <label for="InputNumber">Your Contact Number</label>
              <input type="text" class="form-control" name="InputNumber" id="InputNumber" placeholder="Enter Phone Number" required>
            </div>
            <div class="form-group col-lg-12 dateContainer">
              <label for="InputDate">Your Visiting Date and Time</label>
              <div class="input-group input-append date" id="datetimePicker">
                <input type="text" class="form-control" name="datetimePicker" id="InputDate" placeholder="Enter Reservation Time & Date" required>
                <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span> </div>
            </div>
            <div class="form-group col-lg-12">
              <label for="InputGuests">Number of Guests</label>
              <input type="text" class="form-control" name="InputGuests" id="InputGuests" placeholder="Enter Number of Guests" required>
            </div>
            <div class="form-group col-lg-12">
              <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-info pull-right">
            </div>
          </form>
        </div>
        <div class="col-lg-2 col-sm-2"> </div>
      </div>
    </div>
    <div class="col-lg-3">
      <?php include '../banner.php'; ?>
    </div>
  </div>
</div>
</div>
<?php include '../footer.php'; ?>
