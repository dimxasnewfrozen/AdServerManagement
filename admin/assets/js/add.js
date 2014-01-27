$(document).ready(function () {

  $(".subject").focus();

  $('.start_date').datepicker();

  $(".client").change(function () {

    if ($(this).val() == "new")
    {
      $(".client_options").removeClass("hide");
    }
    else {
      $(".client_options").addClass("hide");
    }

  });

  $('.start_date').datepicker({
  }).on('changeDate', function(ev) {
    $(this).datepicker('hide');
  }).on('keypress', function(e) {
    if (e.which == 13)
    { 
      $(this).datepicker('hide');
      return false;
    }

  }).data('datepicker');


  $('.end_date').datepicker({
  }).on('changeDate', function(ev) {
    $(this).datepicker('hide');
  }).on('keypress', function(e) {
    if (e.which == 13)
    { 
      $(this).datepicker('hide');
      return false;
    }
  }).data('datepicker');



  $(".add_post").submit( function () {

    if ($(".message").val() == "" || $(".subject").val() == "")
    {
      $(".empty_fields").removeClass("hide");
      return false;
    }

  }); 


});