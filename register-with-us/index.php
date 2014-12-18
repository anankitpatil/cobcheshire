<?php include '../header.php'; ?>
<link rel="canonical" href="http://cobcheshire.com/register-with-us" />
<title>Cock O' Barton | Register With Us</title>
<?php include '../nav.php'; ?>
<div class="container register-with-us">
  <div class="row mb24">
    <div class="col-lg-9">
      <h1 class="mb48 mt48">Register with us</h1>
      <div class="row">
        <div class="col-lg-2 col-sm-2"></div>
        <div class="col-lg-8 col-sm-8 bodycopy">
          <p>Subscribe to our email newsletter & receive updates by simply filling out the form below.</p>
          <div class="alert alert-success"><strong>Registration successful. We will get in touch soon!</strong></div>
          <div class="alert alert-danger"><strong>Something went wrong! Please refresh the page and try again.</strong></div>
          <form id="register" role="form" action="../scripts/register.php" class="form-horizontal" method="post" data-bv-feedbackicons-valid="glyphicon glyphicon-ok" data-bv-feedbackicons-invalid="glyphicon glyphicon-remove" data-bv-feedbackicons-validating="glyphicon glyphicon-refresh">
            <div class="form-group col-lg-12">
              <label for="InputName">Your Name</label>
              <input type="text" class="form-control" name="InputName" id="InputName" placeholder="Enter Name" required>
            </div>
            <div class="form-group col-lg-12">
              <label for="InputEmail">Your Email</label>
              <input type="email" class="form-control" id="InputEmail" name="InputEmail" placeholder="Enter Email" required  >
            </div>
            <div class="form-group col-lg-12">
              <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-info pull-right">
            </div>
          </form>
        </div>
        <div class="col-lg-2 col-sm-2"></div>
      </div>
    </div>
    <div class="col-lg-3">
      <?php include '../banner.php'; ?>
    </div>
  </div>
</div>
</div>
<?php include '../footer.php'; ?>
