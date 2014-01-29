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
            <table class="table table-hover table-striped">
              <tr>
                <td></td>
                <th>Ad</th>
                <th>Client</th>
                <th>Ad Group</th>
                <th>Max Imp.</th>
                <th>Impressions</th>
                <th>Clicks</th>
                <th>Start Date</th>
              </tr>
              <?php
              if ($all_ads)
              {
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
                        <td>
                          <a class="btn btn-sm btn-default" style="width:35px; margin:2px;"><i class="fa fa-pencil"></i></a><br/>
                          <a href='<?php echo BASE_URL; ?>/ad/deleteAd/<?php echo $ad->ad_id; ?>' class="btn btn-sm btn-danger" style="width:35px; margin:2px;"><i class="fa fa-times"></i></a>
                        </td>
                        <td style="width:15%;"><img src='<?php echo $ad->image_src; ?>' style="max-width:120px; max-height:250px;" /></td>
                        <td><b><?php echo $ad->company; ?></b></td>
                        <td>
                          <?php echo $ad->group_name; ?>
                          <p style="font-size:12px;">(<?php echo $ad->width; ?> x <?php echo $ad->height; ?>)</p>
                        </td>
                        <td><?php echo $ad->impressions;?></td>
                        <td style="font-size:30px;">
                          <a href="<?php echo BASE_URL; ?>/ad/stats/<?php echo $ad->ad_id;?>" class="impression_link">
                            <?php
                              if ($ad->impression_count >= $ad->impressions)
                              {
                                ?><span class="label label-danger"><i class="fa fa-bar-chart-o" style="font-size:16px;"></i> <?php echo $ad->impression_count; ?></span><?php
                              }
                              else {
                                ?><span class="label label-info"><i class="fa fa-bar-chart-o" style="font-size:16px;"></i> <?php echo $ad->impression_count; ?></span><?php
                              }
                              ?>
                          </a>
                        </td>
                        <td style="font-size:30px;">
                          <a href="<?php echo BASE_URL; ?>/ad/stats/<?php echo $ad->ad_id;?>" class="impression_link">
                            <span class="label label-warning"><i class="fa fa-share" style="font-size:16px;"></i> <?php echo $ad->click_count; ?></span>
                          </a>
                        </td>

                        <td><?php echo date('M d, Y', strtotime($ad->start_date)); ?></td>
                    </tr>

                  <?php


                }
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