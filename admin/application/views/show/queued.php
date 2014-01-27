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
	  		<h4>Queued entries available:</h4>

	  		<a href='<?php echo BASE_URL; ?>/show/createNewIssue' class="btn btn-success trigger_issue">Trigger new issue!</a>
	  		<br/>
	  		<i style="font-size:11px;">Triggering a new issue will take the below entries and create a new issue email.</i>
	  		<br/>
	  		<br/>

	        <?php
	        	if (!@$entries || sizeof($entries) == 0) {
	        			echo "No entries in the queue!!";
	        	}
	        	else {
	        		?>

	        		<table class="table table-striped table-hover" style="margin-top:5px">
	        		<tr>
	        			<th style="width:15%;">Subject</th>
	        			<th style="width:70%;">Message</th>
	        			<th style="width:15%;">User</th>
	        		</tr>

	        		<?php
	        		foreach ($entries as $entry)
	        		{

	        			?>
	        				<tr>
	        					<td><label for="<?php echo $entry->id; ?>"> <?php echo $entry->subject; ?></label></td>
	        					<td><?php echo nl2br($entry->message); ?></td>
	        					<td><?php echo $entry->full_name; ?></td>

	        				</tr>
	        			<?php
	        		}

	        		?>

	        		</table>

	        	</form>

	        		<?php
	        	}

	        ?>

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


