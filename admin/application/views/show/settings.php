<?php
include(VIEWS_URL . "/menu.php");
?>

<div class="container" style="margin-top:10px;">
      <!-- Example row of columns -->
      <div class="row">

      	<?php include("action_menu.php"); ?>
		

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