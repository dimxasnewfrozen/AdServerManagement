<?php

$base_url = "AdManager2/admin/";

return array(

    'main' => array(
        '//' . $base_url .'assets/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js',
        '//' . $base_url .'assets/jquery/jquery.js',
        '//' . $base_url .'assets/bootstrap/js/bootstrap.min.js',
        '//' . $base_url .'assets/app/js/dependencies.js',
        '//' . $base_url .'assets/morris/morris.min.js',
        '//' . $base_url .'assets/app/js/main.js'
    ),
    'dashboard' => array(
      '//' . $base_url .'assets/js/dashboard.js'
     ),
    'groups' => array(
        '//' . $base_url .'assets/js/groups.js'
      ),

    'ad' => array(
        '//' . $base_url .'assets/js/vendor/bootstrap/bootstrap-datepicker.js',
        '//' . $base_url .'assets/js/ad.js'
      ),

    'signup' => array(
          '//' . $base_url .'assets/js/signup.js'
      ),

    'login' => array(
          '//' . $base_url .'assets/jquery-icheck/jquery.icheck.min.js',
          '//' . $base_url .'assets/js/login.js'
      ),

    'account' => array(
          '//' . $base_url .'assets/js/account.js'
      ),

    'css' => array(
        '//' . $base_url .'assets/bootstrap/css/bootstrap.min.css',
        '//' . $base_url .'assets/app/css/dependencies.css',
        '//' . $base_url .'assets/app/css/syrena-admin.css'
      ),



);


