<!-- define your content header here -->
<header class="content-header">
    <!-- header actions -->
    <div class="header-actions pull-right">

        <!-- (recomended: dont change the id value) -->
        <div class="btn-group">
            <a id="users-setting" class="btn btn-icon data-toggle" data-toggle="dropdown" role="button">
                <i class="icon ion-gear-b"></i>
            </a>
            <ul class="dropdown-menu dropdown-extend pull-right" role="menu">
                <li class="dropdown-profile">
                    <div class="dp-cover">
                        <img class="img-bg" src="assets/app/img/cover-blur.jpg" alt="">
                        <a class="img-avatar" href="page_profile.html">
                            <img class="img-circle" src="assets/app/img/avatar4.png" alt="">
                        </a>
                        <div class="dp-details">Mr. Doe - UI Designer</div>
                    </div>
                </li>
               
                <li class="dropdown-footer">
                    <div class="clearfix">
                        <a href="page_signin.html" class="btn btn-sm btn-default pull-right">Sign out</a>
                        <a href="page_profile.html" class="btn btn-sm btn-default pull-left">Profile</a>
                    </div>
                </li><!-- /dropdown-footer -->
            </ul><!-- /dropdown-extend -->
        </div><!-- /btn-group setting -->
    </div><!-- /header actions -->

    <!-- header actions -->
    <div class="header-actions pull-left">
        <!-- (recomended: dont change the id value) -->
        <button id="toggle-content" class="btn btn-icon" type="button"><i class="icon ion-navicon-round"></i></button>
    </div><!-- /header actions -->

    <!-- your Awesome App title -->
    <?php
    global $config;
    ?>
    <h1 class="content-title"><?php echo $config['controller_titles'][CONTORLLER]; ?></h1>
</header><!-- /side left -->
