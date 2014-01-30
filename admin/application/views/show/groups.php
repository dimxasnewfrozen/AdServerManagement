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
					
					<div class="col-lg-10">

		<div class="row">
			<div class="col-lg-12">
				<a href='<?php echo BASE_URL; ?>/groups/new_group' class="btn btn-primary btn-post"><i class="fa fa-plus-circle"></i> New Group</a>
			</div>
		</div>


		<div class="row" >
			<input type='hidden' class="base_url" value="<?php echo $settings['Base Ad Url']; ?>" />

			<table class="table table-striped" style="margin:10px;">
				<tr>
					<th style="width:18%;">GUID</th>
					<th>Group Name</th>
					<th>Size WxH</th>
				</tr>

				<?php
				if ($groups)
				{
					foreach ($groups as $group)
					{
						?>
							<tr>
								<td><?php echo $group->guid; ?> <br/>
									<span><a href="#" class="group_link"><i class="fa fa-pencil"></i> Edit</a></span>
                          			<span>
                          				<a href="#" class="group_link modal_code" data-toggle="modal" data-target="#code" 
                          				width="<?php echo $group->width; ?>"
                          				height="<?php echo $group->height; ?>"
                          				guid="<?php echo $group->guid; ?>"
                          				gname="<?php echo $group->group_name; ?>"
                          				>
                          				<i class="fa fa-code"></i> Code </a>
                          			</span>
                          			<span><a href="<?php echo BASE_URL; ?>/groups/deleteGroup/<?php echo $group->guid; ?>" class="group_link"><i class="fa fa-times"></i>Delete</a></span></td>
								<td><?php echo $group->group_name; ?></td>
								<td><?php echo $group->width; ?> x <?php echo $group->height; ?>px </td>

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


<div class="modal fade" id="code" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel"></h4>
      </div>
      <div class="modal-body">
        <div class="iframe_content"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->




