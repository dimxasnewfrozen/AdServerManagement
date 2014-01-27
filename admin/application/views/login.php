  <?php
  include('menu.php');

  if (!isset($email))
  {
    $email = "";
  }
  ?>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">

        <div class="col-lg-3"></div>        

        <div class="col-lg-5">
          <div style="height:100%; width:100%; border:1px solid #D1D1D1; background-color:#F5F5F5; margin-top:30px; padding:50px; padding-top:10px;">

            <h3>Sign In </h3>

            <div class="status">
              <?php
                switch($status)
                {
                  case "invalid":
                    ?><div class="alert alert-danger"><b>Error!</b> Invalid email address or password. </div><?php
                  break;
                }
              ?>
            </div>

            <form role="form" class="account_form" method="post" action="<?php echo BASE_URL; ?>/login">

              <div class="form-group">
                <label>Email Address:</label>
                <input type="text" name="email_address" class="form-control email_address" >
              </div>

              <div class="form-group">
                <label>Password:</label>
                <input type="password" name="password" class="form-control password" >
              </div>

              <input type='submit' class="btn btn-warning" style="float:left;"  value="Log in" /><br/>

              <span style="float:right; margin-top:-20px;">
              <a href='#' style="font-size:12px;">Forgot username </a><br/>
              <a href='#' style="font-size:12px;">Forgot password </a><br/>
              </span>

            </form>
          </div>        
        </div>

        <div class="col-lg-3"></div>
      </div>


      <hr>

      <footer>
        <p>&copy; The Mechanicville Mile 2013</p>
      </footer>
    </div> <!-- /container -->

  <?php
  include('footer.php');
  ?>
