<?php
include(VIEWS_URL . "/menu.php");
?>

<div class="container" style="margin-top:10px;">
      <!-- Example row of columns -->
      <div class="row">

      	<?php include("action_menu.php"); ?>
		
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