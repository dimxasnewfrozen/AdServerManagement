<div class="container">
<!-- Example row of columns -->
      <div class="row" style="margin-top:10px;">
        <div class="col-lg-10" style="border-bottom: 1px solid #E8E8E8; height:80px;">

          <a href="<?php echo BASE_URL; ?>" class="logo_link">
            <span class="logo"> The Mile </span> 
            <span class="sub_logo"> x Advertising </span>
          </a>

        </div>

          <div class="col-lg-2" style="border-bottom: 1px solid #E8E8E8; height:80px; padding-top:25px;">
            <a href='<?php echo BASE_URL; ?>/' style="margin:10px;">Home</a>

            <?php
              if (isset($user[0]->id))
              {
                 ?>
                 <a href='<?php echo BASE_URL; ?>/logout' style="margin:10px;">Sign out </a>
                 <?php
              }
              else {
                ?><a href='<?php echo BASE_URL; ?>/login' style="margin:10px;">Sign in </a><?php
              }
            ?>
           
          </div>
      </div>




