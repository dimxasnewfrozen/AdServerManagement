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

                <form method="post" class="add_post" action="<?php echo BASE_URL; ?>/groups/add">
                 <div class="row" style="margin-top:10px;">

                  <div class="col-xs-3">
                    <b>Group Name:</b>
                  </div>
                </div>
                   <div class="row" style="margin-bottom:10px;">
                  <div class="col-xs-3">
                    <input name="group_name" type="text" class="form-control">
                  </div>
                </div>

                <div class="row" style="margin-top:10px;">
                  <div class="col-xs-2">
                    <b>Width:</b>
                  </div>

                  <div class="col-xs-2">
                    <b>Height:</b>
                  </div>

                </div>

                <div class="row" style="margin-bottom:10px;">
                  <div class="col-xs-2">
                    <input name="width" type="text" placeholder="px" class="form-control">
                  </div>

                  <div class="col-xs-2">
                    <input name="height" type="text" placeholder="px" class="form-control">
                  </div>

                </div>


                <div class="alert alert-danger hide empty_fields"><b>Error!</b> Subject or message must be entered.</div>

                <input type='submit' type="button" class="btn btn-primary btn-large" value="Create Ad Group" />

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

