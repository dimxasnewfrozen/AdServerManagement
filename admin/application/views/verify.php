<?php
include('menu.php');

if (isset($data))
{ 
  $address = $data['address'] . " " . $data['city'] . ", " . $data['state'];
}
else {
  $address = '';
}

?>

<div class="container">
  <!-- Example row of columns -->
  <div class="row">
    <div class="col-lg-6" >

      <div class="bs-callout"></div>

      <div class="account_div hide" style="border:1px solid #D1D1D1; background-color:#FAFAFA; margin-top:10px; padding:40px; padding-top:40px;">

      <form role="form" class="account_form" method="post" action="<?php echo BASE_URL; ?>/signup/submit">
        <input type="hidden" name="address" value="<?php echo $data['address']; ?>" >
        <input type="hidden" name="city" value="<?php echo $data['city']; ?>" >
        <input type="hidden" name="state" value="<?php echo $data['state']; ?>" >

        <div class="form-group">

          <label>I'm signing up as:</label>
          <select class="form-control user_type" name="type" >
            <option value="basic">Basic user</option>
            <option value="business">Business account</option>
          </select>
        </div>        

        <div class="form-group business_div hide">
          <label>Business Name:</label>
          <input type="text" name="business_name" class="form-control business_name" >
        </div>

        <div class="form-group">
          <label>First Name:</label>
          <input type="text" name="firstname" class="form-control firstname" >
        </div>

        <div class="form-group">
          <label >Last Name</label>
          <input type="text" name="lastname" class="form-control lastname">
        </div>

        <div class="form-group">
          <label>Email Address:</label>
          <input type="email" name="email_address" class="form-control email_address" >
        </div>
        <div class="form-group">
          <label >Password:</label>
          <input type="password" class="form-control pword1">
        </div>
      
        <div class="form-group">
          <label>Password Confirmation:</label>
          <input type="password" name="mm_password" class="form-control pword2" autocomplete="off" >
        </div>

        <div class="checkbox">
          <label>
            <input type="checkbox" name="terms" class="terms">I accept The Mechanicville Voice's Terms of Use 
          </label>
        </div>

        <div class="alert alert-danger errors hide"><b>Error! </b> You must accept the terms.</div>
        <button type="submit" class="btn btn-warning">Create Account</button>

      </form>

    </div>
    </div>
    <div class="col-lg-6">
      <input type='hidden' class='address' value="<?php echo $address; ?>" />
      <div style="height:100%; width:100%; border:1px solid #D1D1D1; background-color:#F5F5F5; margin-top:40px; padding:10px; padding-top:10px;">
      	<p>Address: <?php echo $address; ?></p>
        <div id="map-canvas" style="width:100%; height:400px;"></div>
      </div>

    </div>
  </div>

  <hr>

  <footer>
    <p>&copy; Company 2013</p>
  </footer>
</div> <!-- /container -->

<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>

<?php
include('footer.php');
?>
