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
        <form method="post" action="">
        <?php
        if ($settings)
        {
          foreach ($settings as $key => $setting)
          {
            ?>
              <div class="row" style="margin-bottom:10px;">
              <div class="col-xs-12">
                  <b><?php echo $key; ?></b><input name="text" type="text" class="form-control" value="<?php echo $setting; ?>">
              </div>
            </div>
            <?php
          }
        }


        ?>
        <input type='submit' class="btn btn-primary" value="Save settings" />
        </form>
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