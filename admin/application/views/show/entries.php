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
	  			<a href='<?php echo BASE_URL; ?>/addpost' class="btn btn-warning btn-post"><i class="fa fa-plus-circle"></i> Add Post </a>
	  			<h4>Pending entries waiting for approval</h4>
	        <hr style="margin:5px">

	        <?php
	        	if (!@$entries || sizeof($entries) == 0) {
	        			echo "No entries waiting for approval!";
	        	}
	        	else {
	        		?>
	        		<form method="post" class="entry_actions" action="<?php echo BASE_URL; ?>/show/entry_actions">

	        		<button class="btn btn-success action" id="approve">Approve</button>
	        		<button class="btn btn-warning action" id="reject">Reject</button>
	        		<button class="btn btn-danger action" id="delete">Delete</button>

	        		<input type='hidden' name="action_val" class="action_val" value="" />

	        		<table class="table table-striped table-hover" style="margin-top:5px">
	        		<tr>
	        			<th></th>
	        			<th style="width:15%;">Subject</th>
	        			<th style="width:70%;">Message</th>
	        			<th style="width:15%;">User</th>
	        		</tr>

	        		<?php
	        		foreach ($entries as $entry)
	        		{

	        			?>
	        				<tr>
	        					<td><input type='checkbox' name='entry_<?php echo $entry->id; ?>' id="<?php echo $entry->id;?>" value="<?php echo $entry->id;?>"></td>
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
