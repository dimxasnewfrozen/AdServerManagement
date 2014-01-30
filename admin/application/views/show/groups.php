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
					
					     <div class="magic-layout isotope ml-col-4" data-cols="4">
                <div class="panel panel-default magic-element isotope-item">
                    <a href='<?php echo BASE_URL; ?>/ad/new_add' class="panel-body-heading bg-primary full-line">
                        <div class="pb-object pb-object-circle">
                            <i class="pbo-icon icon ion-ios7-plus-empty text-inverse"></i>
                        </div><!-- /pb-object -->
                        <h3 class="pb-title text-inverse">
                            <small class="text-inverse">Create ad group</small>
                        </h3><!-- /pb-title -->
                        <span class="pb-watermark">
                            <i class="icon ion-ios7-photos-outline"></i>
                        </span><!-- /pb-watermark -->
                    </a><!-- /panel-body-heading -->
                </div><!-- /panel -->
              </div>


    <div id="panel1" class="panel panel-default magic-element width-full isotope-item">
        <div class="panel-heading">
            <div class="panel-icon"><i class="icon ion-ios7-photos-outline"></i></div>
            <div class="panel-actions">
                <a role="button" data-refresh="#panel1" title="refresh" class="btn btn-sm btn-icon">
                    <i class="icon ion-refresh"></i>
                </a>
                <a role="button" data-expand="#panel1" title="expand" class="btn btn-sm btn-icon">
                    <i class="icon ion-arrow-resize"></i>
                </a>
                <a role="button" data-collapse="#panel1" title="collapse" class="btn btn-sm btn-icon">
                    <i class="icon ion-chevron-down"></i>
                </a>
                <a role="button" data-close="#panel1" title="close" class="btn btn-sm btn-icon">
                    <i class="icon ion-close-round"></i>
                </a>
            </div><!-- /panel-actions -->
            <h3 class="panel-title">Ad Groups</h3>
        </div><!-- /panel-heading -->

        <div class="tab-pane fade in active" id="recent-orders">
    			  <input type='hidden' class="base_url" value="<?php echo $settings['Base Ad Url']; ?>" />
      				<?php
      				if ($groups)
      				{
      					foreach ($groups as $group)
      					{                      

                  ?>
                      <li class="list-group-item">
                          <div class="media">
                              <a class="pull-left btn btn-default"
                              href="#" class="group_link modal_code" data-toggle="modal" data-target="#code" 
                                        width="<?php echo $group->width; ?>"
                                        height="<?php echo $group->height; ?>"
                                        guid="<?php echo $group->guid; ?>"
                                        gname="<?php echo $group->group_name; ?>"
                                        style="font-size:40px;">
                              <i class="ion-android-developer"></i>
                              </a><!-- /media-object -->
                              <div class="media-body">
                                  <h3 class="media-heading"><a href="#"><?php echo $group->group_name; ?></a></h3>
                                  <div class="text-bold text-muted">
                                      <i class="icon ion-star"></i>
                                      <small><?php echo $group->guid; ?></small>
                                      &nbsp;
                                      &nbsp;
                                      &nbsp;
                                      <i class="icon ion-ios7-photos-outline"></i>
                                      <small><?php echo $group->width; ?> x <?php echo $group->height; ?></small>
                                  </div>
                              </div><!-- /media-body -->
                              <div class="list-actions auto-hide">
                                  <div class="btn-group btn-group-xs">
                                      <a href="#" title="approve" class="btn btn-default"><i class="icon ion-edit"></i></a>
                                      <a href="<?php echo BASE_URL; ?>/groups/deleteGroup/<?php echo $group->guid; ?>" title="delete" class="btn btn-default"><i class="icon ion-close"></i></a>
                                  </div><!-- /btn-group -->
                              </div><!-- /list-actions -->
                          </div><!-- /media -->
                        </li>
      						<?php
      					}
      				}
      				?>
      			</table>
  		</div>
</div>

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




