<?php include '../header.php'; ?>
<link rel="canonical" href="http://cobcheshire.com/contact-us" />
<title>Cock O' Barton | Contact us</title>
<?php include '../nav.php'; ?>
<div class="container contact-us">
  <div class="row mb24">
    <div class="col-lg-9">
      <h1 class="mb48 mt48" title="Cock O' Barton, Bar & Restaurant Contact address, email & telephone">Contact us</h1>
      <div class="row bodycopy">
        <div class="col-lg-6">
          <p>For reservations, show arounds, wedding and general enquiries, please fill out the form below and we will contact you back!</p>
          <div class="alert alert-success"><strong>We've received your contact request. We will get in touch with you soon!</strong></div>
          <div class="alert alert-danger"><strong>Something went wrong! Please refresh the page and try again.</strong></div>
          <form id="contact" role="form" action="../scripts/contact.php" class="form-horizontal" method="post" data-bv-feedbackicons-valid="glyphicon glyphicon-ok" data-bv-feedbackicons-invalid="glyphicon glyphicon-remove" data-bv-feedbackicons-validating="glyphicon glyphicon-refresh">
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
            <div class="form-group col-lg-12">
              <label for="InputMessage">Leave a short message</label>
              <textarea name="InputMessage" id="InputMessage" class="form-control" rows="5" required></textarea>
            </div>
            <div class="form-group col-lg-12">
              <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-info pull-right">
            </div>
          </form>
        </div>
        <div class="col-lg-6">
          <h3>The Cock O Barton.<br />
            Barton Road (A534),<br />
            Nr Broxton, Cheshire<br />
            SY14 7HU</h3>
          Please Note: Some Sat Nav systems using this postcode do not direct you here - please check your route.<br />
          <h4>T 01829 782 277</h4>
          <h4>E info@cobcheshire.com</h4>
          <br />
          <a href="./local-accommodation" title="Cock O' Barton, Bar & Restaurant | Local accommodations around South Cheshire">Click here for a list of local accommodation in alphabetical order</a>
        </div>
      </div>
    </div>
    <div class="col-lg-3">
      <?php include '../banner.php'; ?>
    </div>
  </div>
</div>
</div>
<?php include '../footer.php'; ?>
