  <?php
  include('menu.php');
  ?>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">

        <div class="col-lg-6">
          <div style="height:325px; width:100%; border:1px solid #D1D1D1; background-color:#F5F5F5; margin-top:30px; padding:50px; padding-top:10px;">
          <center><h3>Connect with your neighborhood!</h3></center>

          <form method="post" action="<?php echo BASE_URL; ?>/signup/verify">
          <div class="row">
            <div class="col-xs-3">
              Address:
            </div>
          </div>

          <div class="row">
            <div class="col-xs-12">
              <input name="address" type="text" class="form-control address">
            </div>
          </div>

          <div class="row" style="margin-top:10px;">
            <div class="col-xs-12">
              City:
            </div>
          </div>

          <div class="row">
            <div class="col-xs-12">
              <input name="city" type="text" value="Mechanicville" class="form-control">
            </div>
          </div>

          <div class="row" style="margin-top:10px;">
            <div class="col-xs-12">
              State:
            </div>
          </div>

          <div class="row" style="margin-bottom:10px;">
            <div class="col-xs-12">
              <select name="state" class="form-control">
                <option value="Alabama">Alabama</option>
                <option value="Alaska">Alaska</option>
                <option value="Arizona">Arizona</option>
                <option value="Arkansas">Arkansas</option>
                <option value="California">California</option>
                <option value="Colorado">Colorado</option>
                <option value="Connecticut">Connecticut</option>
                <option value="Delaware">Delaware</option>
                <option value="District of Columbia">District of Columbia</option>
                <option value="Florida">Florida</option>
                <option value="Georgia">Georgia</option>
                <option value="Hawaii">Hawaii</option>
                <option value="Idaho">Idaho</option>
                <option value="Illinois">Illinois</option>
                <option value="Indiana">Indiana</option>
                <option value="Iowa">Iowa</option>
                <option value="Kansas">Kansas</option>
                <option value="Kentucky">Kentucky</option>
                <option value="Louisiana">Louisiana</option>
                <option value="Maine">Maine</option>
                <option value="Maryland">Maryland</option>
                <option value="Massachusetts">Massachusetts</option>
                <option value="Michigan">Michigan</option>
                <option value="Minnesota">Minnesota</option>
                <option value="Mississippi">Mississippi</option>
                <option value="Missouri">Missouri</option>
                <option value="Montana">Montana</option>
                <option value="Nebraska">Nebraska</option>
                <option value="Nevada">Nevada</option>
                <option value="New Hampshire">New Hampshire</option>
                <option value="New Jersey">New Jersey</option>
                <option value="New Mexico">New Mexico</option>
                <option value="New York" selected='true'>New York</option>
                <option value="North Carolina">North Carolina</option>
                <option value="North Dakota">North Dakota</option>
                <option value="Ohio">Ohio</option>
                <option value="Oklahoma">Oklahoma</option>
                <option value="Oregon">Oregon</option>
                <option value="Pennsylvania">Pennsylvania</option>
                <option value="Rhode Island">Rhode Island</option>
                <option value="South Carolina">South Carolina</option>
                <option value="South Dakota">South Dakota</option>
                <option value="Tennessee">Tennessee</option>
                <option value="Texas">Texas</option>
                <option value="Utah">Utah</option>
                <option value="Vermont">Vermont</option>
                <option value="Virginia">Virginia</option>
                <option value="Washington">Washington</option>
                <option value="West Virginia">West Virginia</option>
                <option value="Wisconsin">Wisconsin</option>
                <option value="Wyoming">Wyoming</option>
              </select>
            </div>
          </div>

          <input type='submit' type="button" class="btn btn-warning" value="Sign Up" />
          or
          <a href='<?php echo BASE_URL; ?>/login'>Login</a>

          </form>

          </div>
    
        </div>

        <div class="col-lg-6">

          <div class="panel panel-default"style="margin:30px;">
            <div class="panel-heading">What is The Mechanicville Voice?</div>
            <div class="panel-body">
               <p><b>The Mechanicville Voice is a free community-building service. Your neighborhood's forum is only open to the people who live there. It's all about helping neighbors connect.</b><p>
               <p>Want to know more about local issues, canidates, and other happenings?</p>
               <p>Interested in local businesses? </p>
               <p>Selling something? Looking to buy something?</p>
               <p>Want to find the latest community events?</p>
               <p>Lose your cat or dog?</p>
               <p>Have a yard sale or garage sale you'd like share?</p>
               <p>Need a hand moving?</p>
            </div>
            </div>
       </div>

      </div>

      <hr>

      <footer>
        <p>&copy; The Mechanicville Mile 2013</p>
      </footer>
    </div> <!-- /container -->


<?php
include('footer.php');
?>
