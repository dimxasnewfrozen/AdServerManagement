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

 $(".phone_number").keyup(function() {
    var curchr = this.value.length;
    var curval = $(this).val();
    if (curchr == 3) {
      $(this).val("(" + curval + ")" + "-");
    } else if (curchr == 9) {
      $(this).val(curval + "-");
    }
  });



  $(".add_post").submit(function () {

    if ($(".client").val() == "")
    {
      alert("Error. You did not select a client!");
      return false;
    }


    if ($(".ad_group").val() == "")
    {
      alert("Error. You did not select an ad group!");
      return false;
    }

    if ($(".website_location").val() == "")
    {
      alert("Error. You did not select a website location!");
      return false;
    }


    if ($(".max_impressions").val() == "")
    {
      alert("Error. You did not select the max impressions!");
      return false;
    }


    if ($(".client").val() == "")
    {
      alert("Error. You did not select a client!");
      return false;
    }





  });

});