<?php include(VIEWS_URL . "/left_sidebar.php"); ?>
            <!-- define content theme, use data-swipe="true" to enable gesture event -->
    <!-- (recomended: dont change the id value) -->
    <section id="content" class="content">
        <?php include(VIEWS_URL . "/app_header.php"); ?>

        <!-- define content row -->
        <div class="content-spliter">
            <!-- define your awesome apps here -->
            <!-- (recomended: dont change the id value) -->
            <section id="content-main" class="content-main">
                
                <!-- your app content -->
                <div class="content-app fixed-header">
                    <!-- app header -->
                    <div class="app-header">
                        <h3 class="app-title pull-left hidden-xs">The Mechanicville Mile - Advertising <small>Jan 29, 2013</small></h3>
                    </div><!-- /app header -->

                    <!-- app body -->
                    <div class="app-body">

              <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title">Create new ad</h3>
              </div>
              <div class="panel-body">

                <form method="post"  enctype="multipart/form-data" class="add_post" action="<?php echo BASE_URL; ?>/ad/add">

                <div class="row">
                  <div class="col-xs-3">
                    <b>Client:</b>
                  </div>
                </div>

                <div class="row">
                  <div class="col-xs-12">
                    <select name="client" class="client form-control">
                      <option></option>
                      <option value='new'>+ New Client</option>
                      <?php
                        foreach ($clients as $client)
                        {
                            echo "<option value='$client->id'>" . $client->company . "</option>";
                        }
                      ?>
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
                    <input name="company_name" type="text" class="form-control">
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
                    <input name="first_name" type="text" class="form-control">
                  </div>
                  <div class="col-xs-4">
                    <input name="last_name" type="text" class="form-control">
                  </div> 
                </div>                

                <div class="row" style="margin-top:10px;">
                  <div class="col-xs-4">
                    <b>Phone Number:</b>
                  </div>

                  <div class="col-xs-4">
                    <b>Email Address:</b>
                  </div>                  

                </div>

                <div class="row" style="margin-bottom:10px;">
                  <div class="col-xs-4">
                    <input name="phone_number" type="text" class="form-control phone_number">
                  </div>
                  <div class="col-xs-4">
                    <input name="email_address" type="text" class="form-control">
                  </div> 

                </div>
              </div>

                <hr>

                <div class="row" style="margin-top:10px;">
                  <div class="col-xs-3">
                    <b>Ad Group:</b>
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
                    <select name="ad_group" class="ad_group form-control">
                      <option></option>
                      <?php
                        foreach($groups as $group)
                        {
                          echo "<option value='$group->id'>" . $group->group_name . " - " . $group->width . "x" . $group->height . "</option>";

                        }
                      ?>
                    </select>
                  </div>

                  <div class="col-xs-3">
                    <input name="website_location" type="text" class=" website_location form-control">
                  </div>

                  <div class="col-xs-3">

                  <select name="max_impressions" class="max_impressions form-control">
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
                    <input name="start_date" type="text" class="form-control start_date" value="<?php echo date('m/d/Y'); ?>" >
                  </div>
                </div>

                <hr>
                <div class="row" style="margin-top:10px;">
                  <div class="col-xs-6">
                    <b>Upload File:</b>
                  </div>
                  <div class="col-xs-6">
                    <b>File URL:</b>
                  </div>
                </div>

                <div class="row" style="margin-bottom:10px;">
                  <div class="col-xs-5">
                      <input name="file" type="file" class="form-control">
                  </div>

                   <div class="col-xs-1">
                      <b>Or:</b>
                  </div>

                  <div class="col-xs-6">
                    <input name="file_location"  disabled type="text" class="form-control">
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

