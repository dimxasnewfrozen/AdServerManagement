  <?php
  include('menu.php');

  ?>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">

        <div class="col-lg-12">
          <div style="height:100%; width:100%; padding:10px; padding-top:10px; margin-top:20px;">
          <form role="form" class="account_form" method="post" action="<?php echo BASE_URL; ?>/login">

            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title">My Account</h3>
              </div>
              <div class="panel-body">
                
                <table class="table">

                   <tr>
                    <th style="width:20%;">Title:</th>
                    <td>
                      <a href="<?php echo BASE_URL; ?>/account/title" type="button" class="btn btn-primary title">Add Public Official Title</a>
                    </td>
                  </tr>

                  <tr>
                    <th style="width:20%;">Name:</th>
                    <td>
                      <?php echo $user[0]->first_name . " " . $user[0]->last_name; ?>
                      <a href='#' style="float:right;">[Edit] </a>
                    </td>
                  </tr>


                  <tr>
                    <th>Email Address:</th>
                    <td>
                      <?php echo $user[0]->email_address; ?>
                      <a href='#' style="float:right;">[Edit] </a>
                    </td>
                  </tr>

                  <tr>
                    <th>Password:</th>
                    <td><button type="button" class="btn btn-primary">Change</button></td>
                  </tr>

                  <tr>
                    <th>Address:</th>
                    <td><?php echo $user[0]->address . ", " . $user[0]->city . ", " .  $user[0]->state ; ?></td>
                  </tr>

                </table>
              </div>
            </div>

                
          </form>
          </div>

        </div>        

      </div>
      <hr>

    </div> <!-- /container -->

  <?php
  include('footer.php');
  ?>
