$(document).ready(function () {
  'use strict';

  $('.iCheck').iCheck({
      checkboxClass: 'icheckbox_flat',
      radioClass: 'iradio_flat',
  });

        
  $(".email_address").focus();

  $(".account_form").submit( function (e) {

    e.preventDefault();

    // check if the email is active;
    var email = $(".email_address").val();
    var data = '';
    var self = this;

    $.ajax({
    url: base_url + "application/ajax.php?request=checkActive",
      data:  { email: email },
      async: true
    }).done(function(data) {

      data = $.parseJSON(data);
      if (data.status == "false") 
      {

        $(".status").html('<div class="alert alert-warning"><b>Error! </b> Your account has not been verified yet.<br/><br/>\
                  If you did not receive the verification email, check your spam folder or try to: <br/>\
                  <a href="' + base_url + 'signup/resendActivation/' + email + '">Resend Verification Email</a></div>');
        return false;
      }
      else {
        self.submit();
      }
    
    });

  });

}); 