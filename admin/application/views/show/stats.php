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