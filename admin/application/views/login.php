<?php include("header.php"); ?>
<!-- content wrapper to define fullpage or container -->
<!-- (recomended: dont change the id value) -->
<section id="wrapper" class="container">
    <section id="signin" class="sign-wrapper signin transition-layout">
        <div class="row">
            <div class="col-md-offset-4 col-sm-offset-0 col-xs-offset-0 col-md-4 col-sm-12 col-xs-12">
                <div class="sign-brand">
                    <div class="sign-brand-logo">
                        <img src="assets/app/img/brand-md.png" alt="Brand"/>
                    </div>
                    <h1 class="sign-brand-name">The Mechanicville Mile &nbsp; Ad Manager</h1>
                </div><!-- /sign-brand -->
                <div class="sign-container">

                    <?php
                      if (@$status == "invalid")
                      {
                        ?> <large for="email_address" class="help-block text-warning">Invalid email or password.</large><?php
                      }
                    ?>

                    <form role="form" class="account_form" method="post" action="<?php echo BASE_URL; ?>/login">
                        <div class="form-group"> 
                            <input type="text" name="email_address" class="form-control email_address" placeholder="Email" >
                        </div><!-- /form-group -->
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Password" >
                        </div><!-- /form-group -->
                        <div class="form-group">
                            <input type="submit" class="btn btn-lg btn-primary btn-block" value="Log In" >
                        </div><!-- /form-group -->
                        <div class="form-group">
                            <input class="iCheck" id="rememberme" name="rememberme" type="checkbox" checked>
                            <label class="icheck-label" for="rememberme">Stay sign in</label>
                        </div><!-- /form-group -->
                    </form>
                </div><!-- /sign-container -->
            </div><!-- /col -->
        </div><!-- /row -->

    </section><!-- /signin -->
</section><!-- /wrapper -->
<?php include("footer.php"); ?>
