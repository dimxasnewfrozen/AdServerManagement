<!-- content wrapper to define fullpage or container -->
<!-- (recomended: dont change the id value) -->
<section id="wrapper" class="container">
    <?php include("left_sidebar.php"); ?>

    <!-- define content theme, use data-swipe="true" to enable gesture event -->
    <!-- (recomended: dont change the id value) -->
    <section id="content" class="content">
        <?php include("app_header.php"); ?>

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
                                                
                        <div class="magic-layout">
                            <div id="panel_impression" class="panel panel-default magic-element isotope-item">
                                <div class="panel-heading">
                                  <div class="panel-icon"><i class="icon ion-stats-bars"></i></div>
                                  <div class="panel-actions">
                                      <a role="button" data-refresh="#panel_impression" title="refresh" class="btn btn-sm btn-icon">
                                          <i class="icon ion-refresh"></i>
                                      </a>
                                      <a role="button" data-expand="#panel_impression" title="expand" class="btn btn-sm btn-icon">
                                          <i class="icon ion-arrow-resize"></i>
                                      </a>
                                      <a role="button" data-collapse="#panel_impression" title="collapse" class="btn btn-sm btn-icon">
                                          <i class="icon ion-chevron-down"></i>
                                      </a>
                                      <a role="button" data-close="#panel_impression" title="close" class="btn btn-sm btn-icon">
                                          <i class="icon ion-close-round"></i>
                                      </a>
                                  </div><!-- /panel-actions -->
                                  <h3 class="panel-title">Impressions Graph</h3>
                                  </div><!-- /panel-heading -->
                                 <div class="tab-pane fade in active" id="recent-orders">
                                    <div id="items-chart" class="chart" style="height:225px"></div>
                                </div>
                            </div><!-- /panel -->


                            <div id="panel_click" class="panel panel-default magic-element isotope-item">
                                <div class="panel-heading">
                                  <div class="panel-icon"><i class="icon ion-arrow-graph-up-right"></i></div>
                                  <div class="panel-actions">
                                      <a role="button" data-refresh="#panel_click" title="refresh" class="btn btn-sm btn-icon">
                                          <i class="icon ion-refresh"></i>
                                      </a>
                                      <a role="button" data-expand="#panel_click" title="expand" class="btn btn-sm btn-icon">
                                          <i class="icon ion-arrow-resize"></i>
                                      </a>
                                      <a role="button" data-collapse="#panel_click" title="collapse" class="btn btn-sm btn-icon">
                                          <i class="icon ion-chevron-down"></i>
                                      </a>
                                      <a role="button" data-close="#panel_click" title="close" class="btn btn-sm btn-icon">
                                          <i class="icon ion-close-round"></i>
                                      </a>
                                  </div><!-- /panel-actions -->
                                  <h3 class="panel-title">Clicks Graph</h3>
                                  </div><!-- /panel-heading -->
                                 <div class="tab-pane fade in active" id="recent-orders">
                                    <div id="items-chart2" class="chart" style="height:225px"></div>
                                </div>
                            </div><!-- /panel -->



                            <div class="panel panel-default magic-element width-full isotope-item">
                                <div class="panel-heading">
                                    <ul class="nav nav-pills">
                                        <li class="active">
                                            <a href="#recent-orders" data-toggle="tab">Recent Orders</a>
                                        </li>
                                        <li>
                                            <a href="#recent-posts" data-toggle="tab">Recent Posts</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- tab-content -->
                                <div class="tab-content list-group">
                                    <div class="tab-pane fade in active" id="recent-orders">
                                        <li class="list-group-item">
                                            <div class="media">
                                                <a class="pull-left" href="#">
                                                    <img class="media-object" src="assets/app/img/avatar3.png" alt="">
                                                </a><!-- /media-object -->
                                                <div class="media-body">
                                                    <h3 class="media-heading">Purchase 3 items ($180)</h3>
                                                    <div class="text-bold text-muted">
                                                        <i class="icon ion-person"></i>
                                                        <small>John Doe</small>
                                                        &nbsp;&nbsp;&nbsp;
                                                        <i class="icon ion-ios7-clock-outline"></i>
                                                        <small>16 minutes ago</small>
                                                    </div>
                                                </div><!-- /media-body -->
                                                <div class="list-actions auto-hide">
                                                    <div class="btn-group btn-group-xs">
                                                        <a href="#" title="approve" class="btn btn-default"><i class="icon ion-checkmark"></i></a>
                                                        <a href="#" title="invoice" class="btn btn-default"><i class="icon ion-card"></i></a>
                                                        <a href="#" title="delete" class="btn btn-default"><i class="icon ion-close"></i></a>
                                                    </div><!-- /btn-group -->
                                                </div><!-- /list-actions -->
                                            </div><!-- /media -->
                                        </li><!-- /list-group-item -->

                                        <li class="list-group-item">
                                            <div class="media">
                                                <a class="pull-left" href="#">
                                                    <img class="media-object" src="assets/app/img/avatar5.png" alt="">
                                                </a><!-- /media-object -->
                                                <div class="media-body">
                                                    <h3 class="media-heading">Payment for invoice #141213</h3>
                                                    <div class="text-bold text-muted">
                                                        <i class="icon ion-person"></i>
                                                        <small>Collin</small>
                                                        &nbsp;&nbsp;&nbsp;
                                                        <i class="icon ion-ios7-clock-outline"></i>
                                                        <small>22 hours ago</small>
                                                    </div>
                                                </div><!-- /media-body -->
                                                <div class="list-actions auto-hide">
                                                    <div class="btn-group btn-group-xs">
                                                        <a href="#" title="approve" class="btn btn-default"><i class="icon ion-checkmark"></i></a>
                                                        <a href="#" title="invoice" class="btn btn-default"><i class="icon ion-card"></i></a>
                                                        <a href="#" title="delete" class="btn btn-default"><i class="icon ion-close"></i></a>
                                                    </div><!-- /btn-group -->
                                                </div><!-- /list-actions -->
                                            </div><!-- /media -->
                                        </li><!-- /list-group-item -->
                                    </div><!-- /tab-pane recent order -->

                                    <!-- group recent posts -->
                                    <div class="tab-pane fade" id="recent-posts">
                                        <li class="list-group-item">
                                            <div class="media">
                                                <a class="pull-left" href="#">
                                                    <img class="media-object" src="assets/app/img/avatar11.png" alt="">
                                                </a><!-- /media-object -->
                                                <div class="media-body">
                                                    <h3 class="media-heading">The Ideas to Become a Creative Professionals</h3>
                                                    <div class="text-bold text-muted">
                                                        <i class="icon ion-person"></i>
                                                        <small>Jane Doe</small>
                                                        &nbsp;&nbsp;&nbsp;
                                                        <i class="icon ion-ios7-clock-outline"></i>
                                                        <small>16 minutes ago</small>
                                                    </div>
                                                </div><!-- /media-body -->
                                                <div class="list-actions auto-hide">
                                                    <div class="btn-group btn-group-xs">
                                                        <a href="#" title="edit" class="btn btn-default"><i class="icon ion-edit"></i></a>
                                                        <a href="#" title="draf" class="btn btn-default"><i class="icon ion-filing"></i></a>
                                                        <a href="#" title="delete" class="btn btn-default"><i class="icon ion-close"></i></a>
                                                    </div><!-- /btn-group -->
                                                </div><!-- /list-actions -->
                                            </div><!-- /media -->
                                        </li><!-- /list-group-item -->

                                        <li class="list-group-item">
                                            <div class="media">
                                                <a class="pull-left" href="#">
                                                    <img class="media-object" src="assets/app/img/avatar10.png" alt="">
                                                </a><!-- /media-object -->
                                                <div class="media-body">
                                                    <h3 class="media-heading">Sexy UI Kits, so hard?</h3>
                                                    <div class="text-bold text-muted">
                                                        <i class="icon ion-person"></i>
                                                        <small>Jupainah</small>
                                                        &nbsp;&nbsp;&nbsp;
                                                        <i class="icon ion-ios7-clock-outline"></i>
                                                        <small>3 hours ago</small>
                                                    </div>
                                                </div><!-- /media-body -->
                                                <div class="list-actions auto-hide">
                                                    <div class="btn-group btn-group-xs">
                                                        <a href="#" title="edit" class="btn btn-default"><i class="icon ion-edit"></i></a>
                                                        <a href="#" title="draf" class="btn btn-default"><i class="icon ion-filing"></i></a>
                                                        <a href="#" title="delete" class="btn btn-default"><i class="icon ion-close"></i></a>
                                                    </div><!-- /btn-group -->
                                                </div><!-- /list-actions -->
                                            </div><!-- /media -->
                                        </li><!-- /list-group-item -->
                                    </div><!-- /tab-pane recent post -->
                                </div><!-- /list-group tab-content -->
                            </div><!-- /panel recent reports -->


                            



                        </div><!-- /magic-layout #2 -->
                    </div><!-- /app body -->
                </div><!-- /content app -->
            </section><!-- /content main -->
        </div><!-- /content spliter -->
    </section><!-- /content -->
</section><!-- /wrapper -->

       
<?php
include("footer.php");
?>
