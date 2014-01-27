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

        			<?php

        			if ($saved_status)
        			{
        				if ($saved_status == "success")
        				{
        					echo '<div class="alert alert-success"><b> Success!</b> Your post has been submitted. It will appear in the next issue. 
        					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></div>';
        				}
        				else {
        					echo '<div class="alert alert-danger"><b> Error!</b> Something went wrong when trying to add your post. 
        					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></div>';
        				}
        			}

        			?>

        			<a href='<?php echo BASE_URL; ?>/add/item/add' class="btn btn-primary btn-post"><i class="fa fa-plus-circle"></i> New Ad</a>

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