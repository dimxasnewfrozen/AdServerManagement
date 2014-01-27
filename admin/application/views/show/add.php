<?php
include(VIEWS_URL . "/menu.php");
?>


<div class="container" style="margin-top:10px;">
      <!-- Example row of columns -->
      <div class="row">

        <?php include("action_menu.php"); ?>

        <div class="col-lg-10">

        	<div class="row">
        		<div class="col-lg-12">

              <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title">Create new ad</h3>
              </div>
              <div class="panel-body">

                <form method="post" class="add_post" action="<?php echo BASE_URL; ?>/addpost/submit">

                <div class="row">
                  <div class="col-xs-3">
                    <b>Client:</b>
                  </div>
                </div>

                <div class="row">
                  <div class="col-xs-12">
                    <select class="client form-control">
                      <option></option>
                      <option value='new'>+ New Client</option>
                    </select>
                  </div>
                </div>

                <div class="client_options hide">

                <div class="row" style="margin-top:10px;">
                  <div class="col-xs-12">
                    <b>Company Name:</b>
                  </div>
                </div>
                  <div class="row" style="margin-bottom:10px;">
                  <div class="col-xs-12">
                    <input name="start_date" type="text" class="form-control">
                  </div>
                </div>
                <div class="row" style="margin-top:10px;">
                  <div class="col-xs-4">
                    <b>First Name:</b>
                  </div>

                  <div class="col-xs-4">
                    <b>Last Name:</b>
                  </div>

                </div>

                <div class="row" style="margin-bottom:10px;">
                  <div class="col-xs-4">
                    <input name="start_date" type="text" class="form-control">
                  </div>
                  <div class="col-xs-4">
                    <input name="end_date" type="text" class="form-control">
                  </div> 
                </div>                

                <div class="row" style="margin-top:10px;">
                  <div class="col-xs-4">
                    <b>Phone Number:</b>
                  </div>

                  <div class="col-xs-4">
                    <b>Email Address:</b>
                  </div>                  

                  <div class="col-xs-4">
                    <b>Impressions:</b>
                  </div>
                </div>

                <div class="row" style="margin-bottom:10px;">
                  <div class="col-xs-4">
                    <input name="start_date" type="text" class="form-control">
                  </div>
                  <div class="col-xs-4">
                    <input name="end_date" type="text" class="form-control">
                  </div> 
                  <div class="col-xs-4">
                    <input name="end_date" type="text" class="form-control">
                  </div> 

                </div>
              </div>

                <hr>

                 <div class="row" style="margin-top:10px;">
                  <div class="col-xs-3">
                    <b>Add Group:</b>
                  </div>

                  <div class="col-xs-3">
                    <b>Ad Website Location:</b>
                  </div>

                  <div class="col-xs-3">
                    <b>Max Impressions:</b>
                  </div>

                  <div class="col-xs-3">
                    <b>Start Date:</b>
                  </div>
                </div>

                <div class="row" style="margin-bottom:10px;">
                  <div class="col-xs-3">
                    <select class="form-control">
                      <option></option>
                    </select>
                  </div>

                  <div class="col-xs-3">
                    <input name="end_date" type="text" class="form-control">
                  </div>

                  <div class="col-xs-3">

                  <select class="form-control">
                      <option></option>
                      <?php
                        for($i=1000; $i<=50000; $i+=1000)
                        {
                          echo "<option value='$i'>$" . (($i * 10) / 1000). " - " . number_format($i) . "</option>";
                        }

                      ?>
                    </select>
                  </div>


                   <div class="col-xs-3">
                    <input name="end_date" type="text" class="form-control start_date">
                  </div>


                </div>





                <div class="alert alert-danger hide empty_fields"><b>Error!</b> Subject or message must be entered.</div>

                <input type='submit' type="button" class="btn btn-primary btn-large" value="Create Ad" />

                </form>
              </div>
            </div>


        		</div>
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
include(VIEWS_URL . "/footer.php");
?>

