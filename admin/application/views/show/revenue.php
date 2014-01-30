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
					
					
					
					
					<div class="col-lg-10" style="margin-top:10px;">
          <div class="row">

          	<?php

          		$total = 0;
              if ($all_ads)
              {
                foreach ($all_ads as $ad)
                {
                  $total += (($ad->impressions * 10) / 1000);
                }
              }


          	?>

          	<h1><i class="fa fa-money"></i> Totals: $<?php echo number_format($total, 2);?> </h1>

            <table class="table table-hover table-striped">
              <tr>
                <th>$</th>
                <th>Client</th>
                <th>Ad Group</th>
                <th>Max Impressions</th>
                <th>Start Date</th>
              </tr>
              <?php
              if ($all_ads)
              {
                foreach ($all_ads as $ad)
                {
                  ?>
                    <tr>
                    	<td><?php echo "$" . number_format((($ad->impressions * 10) / 1000), 2); ?> </td>

                        <td><?php echo $ad->company; ?></td>
                        <td>
                          <?php echo $ad->group_name; ?>
                          <p style="font-size:12px;">(<?php echo $ad->width; ?> x <?php echo $ad->height; ?>)</p>
                        </td>
                        <td><?php echo $ad->impressions;?></td>
                        
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