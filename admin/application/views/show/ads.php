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
                            <small class="text-inverse">Create new ad</small>
                        </h3><!-- /pb-title -->
                        <span class="pb-watermark">
                            <i class="icon ion-ios7-monitor-outline"></i>
                        </span><!-- /pb-watermark -->
                    </a><!-- /panel-body-heading -->
                </div><!-- /panel -->
            </div>

            <div id="panel1" class="panel panel-default magic-element width-full isotope-item">
              <div class="panel-heading">
                  <div class="panel-icon"><i class="icon ion-ios7-monitor-outline"></i></div>
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
                  <h3 class="panel-title">Most Recent Ads</h3>
              </div><!-- /panel-heading -->

                <div class="tab-pane fade in active" id="recent-orders">

                     <?php
                    if ($all_ads)
                    {
                      foreach ($all_ads as $ad)
                      {
                      ?>
                      <li class="list-group-item">
                          <div class="media">
                              <a class="pull-left" href="<?php echo BASE_URL; ?>/ad/stats/<?php echo $ad->ad_id;?>">
                                  <img class="media-object" src='<?php echo $ad->image_src; ?>' style="max-width:200px; max-height:250px;" />
                              </a><!-- /media-object -->
                              <div class="media-body">
                                  <h3 class="media-heading"><?php echo $ad->company; ?></h3>

                                  <div class="text-bold text-muted">
                                      <i class="icon ion-calendar"></i>
                                      <small><?php echo date('M d, Y', strtotime($ad->start_date)); ?></small>
                                      &nbsp;&nbsp;&nbsp;
                                      <i class="icon ion-ios7-photos-outline"></i>
                                      <small><?php echo $ad->group_name; ?> (<?php echo $ad->width; ?> x <?php echo $ad->height; ?>)</small>
                                  </div>

                                  <div class="magic-layout isotope ml-col-3" data-cols="3" style="position: relative; overflow: hidden; height: 101px;">
                                    <div class="panel panel-default magic-element isotope-item" style="position: absolute; left: 0px; top: 0px; -webkit-transform: translate3d(0px, 0px, 0px);">
                                        <a href="#" class="panel-body-heading bg-primary full-line">
                                            <div class="pb-object pb-object-circle">
                                                <i class="pbo-icon icon ion-stats-bars text-inverse"></i>
                                            </div><!-- /pb-object -->
                                            <h3 class="pb-title text-inverse">
                                                <?php echo number_format($ad->impressions,0); ?> <small class="text-inverse">Total Impressions</small>
                                            </h3><!-- /pb-title -->
                                            <span class="pb-watermark">
                                                <i class="icon ion-person"></i>
                                            </span><!-- /pb-watermark -->
                                        </a><!-- /panel-body-heading -->
                                    </div><!-- /panel -->

                                    <div class="panel panel-default magic-element isotope-item" style="position: absolute; left: 0px; top: 0px; -webkit-transform: translate3d(316px, 0px, 0px);">
                                        <a href="#" class="panel-body-heading bg-success full-line">
                                            <div class="pb-object pb-object-circle">
                                                <i class="pbo-icon icon ion-ios7-arrow-thin-up text-inverse"></i>
                                            </div><!-- /pb-object -->
                                            <h3 class="pb-title text-inverse">
                                                <?php echo number_format($ad->impression_count,0); ?> <small class="text-inverse">Current Impressions</small>
                                            </h3><!-- /pb-title -->
                                            <span class="pb-watermark">
                                                <i class="icon ion-ios7-star"></i>
                                            </span><!-- /pb-watermark -->
                                        </a><!-- /panel-body-heading -->
                                    </div><!-- /panel -->

                                    <div class="panel panel-default magic-element isotope-item" style="position: absolute; left: 0px; top: 0px; -webkit-transform: translate3d(633px, 0px, 0px);">
                                        <a href="#" class="panel-body-heading bg-warning full-line">
                                            <div class="pb-object pb-object-circle">
                                                <i class="pbo-icon icon ion-arrow-graph-up-right text-inverse"></i>
                                            </div><!-- /pb-object -->
                                            <h3 class="pb-title text-inverse">
                                                <?php echo number_format($ad->click_count,0); ?><small class="text-inverse">Current Clicks</small>
                                            </h3><!-- /pb-title -->
                                            <span class="pb-watermark">
                                                <i class="icon ion-android-earth"></i>
                                            </span><!-- /pb-watermark -->
                                        </a><!-- /panel-body-heading -->
                                    </div><!-- /panel -->

                            </div>

                              </div><!-- /media-body -->
                              <div class="list-actions auto-hide">
                                  <div class="btn-group btn-group-xs">
                                      <a href="#" title="approve" class="btn btn-default"><i class="icon ion-edit"></i></a>
                                      <a href="#" title="delete" class="btn btn-default"><i class="icon ion-close"></i></a>
                                  </div><!-- /btn-group -->
                              </div><!-- /list-actions -->
                          </div><!-- /media -->
                        </li>
                        <?php
                      }
                    }
                  ?>
                </div>         
            </div>
        </section>
      </section>

<?php
include(VIEWS_URL . "/footer.php");
?>

