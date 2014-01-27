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
				<a href='<?php echo BASE_URL; ?>/add/item/group' class="btn btn-primary btn-post"><i class="fa fa-plus-circle"></i> New Group</a>
			</div>
		</div>


		<div class="row" >
			<table class="table table-striped" style="margin:10px;">
				<tr>
					<th style="width:8%;"></th>
					<th style="width:18%;">GUID</th>
					<th>Group Name</th>
					<th>Size WxH</th>
				</tr>

				<?php
					foreach ($groups as $group)
					{
						?>
							<tr>
								<td>
									<a href="#" style="color:red;"><i class="fa fa-trash-o"></i></a>
									&nbsp;
									<a href="#"><i class="fa fa-pencil"></i></a>
								</td>
								<td><?php echo $group->guid; ?></td>
								<td><?php echo $group->group_name; ?></td>
								<td><?php echo $group->width; ?> x <?php echo $group->height; ?>px </td>

							</tr>
						<?php
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