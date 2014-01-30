<!-- define side left theme -->
<aside class="side-left">
    <!-- side header -->
    <div class="side-header">
        <!-- place your brand (recomended: dont change the id value) -->
        <!-- (recomended: dont change the id value) -->
        <h1 id="brand" class="brand">
            <a href="<?php echo BASE_URL; ?>">
                <i class="icon ion-ionic"></i>
                The Mile
            </a>
        </h1><!-- /brand -->

    </div><!-- /side header -->
    <!-- side body -->
    <div class="side-body">
        <!-- separate nav for ease development -->
        <nav class="side-nav">
            <!-- open nav ul -->
            <ul>
                <li class="side-nav-item <?php echo ($current_view == 'dashboard') ? 'active' : ''; ?>">
                    <a href='<?php echo BASE_URL; ?>/dashboard'>
                        <i class="nav-item-icon icon ion-ios7-speedometer"></i>
                        Dashboard
                    </a>
                </li><!-- /coverage -->
                <li class="side-nav-item <?php echo ($current_view == 'ads') ? 'active' : ''; ?>">
                    <a href='<?php echo BASE_URL; ?>/ad'>
                        <i class="nav-item-icon icon ion-ios7-monitor-outline"></i>
                        ADs
                    </a>
                </li><!-- /ADs -->
                <li class="side-nav-item <?php echo ($current_view == 'groups') ? 'active' : ''; ?>">
                    <a href='<?php echo BASE_URL; ?>/groups'>
                        <i class="nav-item-icon icon ion-ios7-photos-outline"></i>
                        AD Groups
                    </a>
                </li><!-- /ADs -->

                <li class="side-nav-item <?php echo ($current_view == 'clients') ? 'active' : ''; ?>">
                    <a href='<?php echo BASE_URL; ?>/clients'>
                        <span class="badge">3</span>
                        <i class="nav-item-icon icon ion-ios7-people"></i>
                        Clients
                    </a>
                </li><!-- /Clients -->
                <li class="side-nav-item <?php echo ($current_view == 'revenue') ? 'active' : ''; ?>">
                    <a href='<?php echo BASE_URL; ?>/revenue'>
                        <i class="nav-item-icon icon ion-ios7-calculator"></i>
                        Revenue
                    </a>
                </li>
                <li class="side-nav-item <?php echo ($current_view == 'settings') ? 'active' : ''; ?>">
                    <a href='<?php echo BASE_URL; ?>/settings'>
                        <i class="nav-item-icon icon ion-ios7-gear"></i>
                        Settings
                    </a>
                </li><!-- /settings -->
            </ul><!-- /nav ul-->
        </nav>
    </div><!-- /side body -->
</aside><!-- /side left -->