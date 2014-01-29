<?php
include(VIEWS_URL . "/menu.php");
?>
<div class="container" style="margin-top:10px;">
      <!-- Example row of columns -->
      <div class="row">

      	<?php include("action_menu.php"); ?>

        <div class="col-lg-10" style="margin-top:10px;">

        	<div class="row">
        		<div class="col-lg-2">
        			<img src='<?php echo $ad[0]->image_src; ?>' style="width:100%;"/>
        		</div>
        		<div class="col-lg-10">
	        	<h3><?php echo $ad[0]->company; ?></h3>
	        	<h5><?php echo $ad[0]->group_name . " " . $ad[0]->width . "x" . $ad[0]->height; ?></h5>
	        	<a href='<?php echo $ad[0]->link_src; ?>'><?php echo $ad[0]->link_src; ?></a>
	        	</div>
        	</div>

        	<hr>

        	<h2>Impressions</h2>
        	<div class="row">
	        	<div class="col-lg-3">
	        		<div class="stat today">
	        			<p class="icon"><i class="fa fa-bar-chart-o"></i></p>	
	        			<p class="num"><?php echo $stats['impressions'][0]->impressions_today; ?></p>
	        			<p >Impressions Today</p>
	        		</div>
	        	</div>	        	

	        	<div class="col-lg-3">
	        		<div class="stat week">
	        			<p class="icon"><i class="fa fa-bar-chart-o"></i></p>	
	        			<p class="num"><?php echo $stats['impressions'][0]->impressions_this_week; ?></p>
	        			<p >Impressions This Week</p>
	        		</div>
	        	</div>

	        	<div class="col-lg-3">
	        		<div class="stat month">
	        			<p class="icon"><i class="fa fa-bar-chart-o"></i></p>	
	        			<p class="num"><?php echo $stats['impressions'][0]->impressions_this_month; ?></p>
	        			<p >Impressions Month</p>
	        		</div>
	        	</div>

	        	<div class="col-lg-3">
	        		<div class="stat total">
	        			<p class="icon"><i class="fa fa-bar-chart-o"></i></p>	
	        			<p class="num"><?php echo $stats['impressions'][0]->total_impressions; ?></p>
	        			<p >Total Impressions</p>
	        		</div>
	        	</div>
        	</div>

        	<hr>

        	<h2>Clicks</h2>

        	<div class="row">
	        	<div class="col-lg-3">
	        		<div class="stat today">
	        			<p class="icon"><i class="fa fa-bar-chart-o"></i></p>	
	        			<p class="num"><?php echo $stats['clicks'][0]->clicks_today; ?></p>
	        			<p >Clicks Today</p>
	        		</div>
	        	</div>	        	

	        	<div class="col-lg-3">
	        		<div class="stat week">
	        			<p class="icon"><i class="fa fa-bar-chart-o"></i></p>	
	        			<p class="num"><?php echo $stats['clicks'][0]->clicks_this_week; ?></p>
	        			<p >Clicks This Week</p>
	        		</div>
	        	</div>

	        	<div class="col-lg-3">
	        		<div class="stat month">
	        			<p class="icon"><i class="fa fa-bar-chart-o"></i></p>	
	        			<p class="num"><?php echo $stats['clicks'][0]->clicks_this_month; ?></p>
	        			<p >Clicks Month</p>
	        		</div>
	        	</div>

	        	<div class="col-lg-3">
	        		<div class="stat total">
	        			<p class="icon"><i class="fa fa-bar-chart-o"></i></p>	
	        			<p class="num"><?php echo $stats['clicks'][0]->total_clicks; ?></p>
	        			<p >Total Clicks</p>
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

</script>