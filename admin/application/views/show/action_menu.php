<div class="col-lg-2">
	<div class="list-group">

		<a href="<?php echo BASE_URL; ?>/ad" class="list-group-item <?php echo ($current_view == 'ads') ? 'active' : ''; ?>" ><i class="fa fa-picture-o"></i> All Ads</a>
		<a href="<?php echo BASE_URL; ?>/groups" class="list-group-item <?php echo ($current_view == 'groups') ? 'active' : ''; ?>"><i class="fa fa-puzzle-piece"></i> Ad Groups</a>
		<a href="#" class="list-group-item"><i class="fa fa-group"></i> Clients</a>
		<a href="<?php echo BASE_URL; ?>/revenue" class="list-group-item <?php echo ($current_view == 'revenue') ? 'active' : ''; ?>" class="list-group-item"><i class="fa fa-money"></i> Revenue</a>
		<a href="<?php echo BASE_URL; ?>/settings" class="list-group-item <?php echo ($current_view == 'settings') ? 'active' : ''; ?>" class="list-group-item"><i class="fa fa-cogs"></i> Settings</a>

		<!-- ADMIN -->
		<?php
		if ($user[0]->privilege != 1){}
		else {
			?>
			<a href="<?php echo BASE_URL; ?>/show/entries" class="list-group-item">Review Entries <span class="badge pull-right"><?php echo $pending_entries; ?></span></a>
			<a href="<?php echo BASE_URL; ?>/show/queued" class="list-group-item">Queued Entries <span class="badge pull-right"><?php echo $queued_entries; ?></span></a>
			<a href="#" class="list-group-item">Users</a>
			<?php
		}
		?>

	</div>
</div>