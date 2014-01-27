<?php
include('menu.php');

?>

<div class="container">
  <!-- Example row of columns -->
  <div class="row">
    <div class="col-lg-12" >
      <?php

      switch($status)
      {
        case "success":
          ?><div class="bs-callout bs-callout-info"><h4>Success!</h4> <p> Your account has been created. A verification e-mail as been sent to you. <br/> 
            Click on the link in the e-mail to activate your new account. <br/>
            <a href='<?php echo BASE_URL; ?>/login'> Sign in </a>
            </p></div><?php
        break;

        case "exists":
          ?><div class="bs-callout bs-callout-warning"><h4>Error!</h4> <p> An account already exists for this email address. <br/> 
            <a href='#'>Forgot password </a> or <a href='<?php echo BASE_URL; ?>/login'> Sign in </a></p></div><?php
        break;

        case "verification_resend":
            ?><div class="bs-callout bs-callout-info"><h4>Success!</h4> <p> A verification e-mail as been resent to you. <br/> 
            Click on the link in the e-mail to activate your new account. <br/>
            <a href='<?php echo BASE_URL; ?>/login'> Sign in </a>
            </p></div><?php
        break;

        default:
          ?><div class="bs-callout bs-callout-warning"><h4>Error!</h4> <p> Unable to create account. Either information was missing or there was a problem with the server. <br/> 
            <a href='#'>Go back </a> or <a href='<?php echo BASE_URL; ?>/login'> Sign in </a></p></div><?php
        break;

      }

      ?>

    </div>
  </div>

  <hr>

  <footer>
    <p>&copy; Company 2013</p>
  </footer>
</div> <!-- /container -->

<?php
include('footer.php');
?>
