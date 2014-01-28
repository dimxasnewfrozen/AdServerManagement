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
        		  <a href='<?php echo BASE_URL; ?>/ad/new_add' class="btn btn-primary btn-post"><i class="fa fa-plus-circle"></i> New Ad</a>
        		</div>
        	</div>
        </div>

        <div class="col-lg-10" style="margin-top:10px;">
          <div class="row">
            <table class="table">
              <tr>
                <th>Ad</th>
                <th>Client</th>
                <th>Max Impressions</th>
                <th>Current Impressions</th>
                <th>Start Date</th>
              </tr>
              <?php
                foreach ($all_ads as $ad)
                {

                  if (strpos($ad->image_src,'http://') !== false) {}
                  else {
                    if (strpos($ad->image_src,'https://') !== false) {}
                    else {
                      $ad->image_src = "http://" . $ad->image_src;
                    }
                  }


                  ?>
                    <tr>
                        <td style="width:25%;"><img src='<?php echo $ad->image_src; ?>' style="width:50%;" /></td>
                        <td><?php echo $ad->company; ?></td>
                        <td><?php echo $ad->impressions; ?></td>
                        <td></td>

                    </tr>

                  <?php


                }
              ?>
            </table>
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

</script>