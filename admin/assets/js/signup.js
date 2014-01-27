$(document).ready(function () {

  $(".address").focus();


  var selected_text = $('.user_type').find(":selected").val();
  if (selected_text == 'business')
  {
     $(".business_div").toggleClass("hide");
  }

  $(".account_form").submit(function () {

    if (($(".firstname").val() == "") || ($(".lastname").val() == "") ||
        ($(".email_address").val() == "") || ($(".pword1").val() == "") || ($(".pword2").val() == "")
        )
    {
      $(".errors").removeClass("hide").html("<b>Error! </b> You did not enter all of the fields.");
      return false;
    }

    if ($(".pword1").val() != $(".pword2").val())
    {
      $(".errors").removeClass("hide").html("<b>Error! </b> Passwords do not match.");
      return false;
    }

    if ($(".pword1").val().length < 6)
    {
      $(".errors").removeClass("hide").html("<b>Error! </b> Your password is too short.");
      return false;
    }

    if (!$(".terms").prop( "checked" ))
    {
      $(".errors").removeClass("hide").html("<b>Error! </b> You must accept the terms.");
      return false;
    }

  });

  $(".user_type").change(function () {
      $(".business_div").toggleClass("hide");
  });

});

function initialize() {

  var myLatlng = new google.maps.LatLng(42.902855, -73.687341);
  var mapOptions = {
    zoom: 12,
    center: myLatlng
  }
  var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

  var marker = new google.maps.Marker({
      position: myLatlng,
      map: map
  });

  // Add circle overlay and bind to marker
  var circle = new google.maps.Circle({
    map: map,
    radius: 4023.36,    // 10 miles in metres
    fillColor: '#D4E2FF'
  });
  circle.bindTo('center', marker, 'position');

  var bounds = circle.getBounds();

  var geocoder;
  geocoder = new google.maps.Geocoder();

  var address = $(".address").val();

  if (address == '')
  {
    $(".bs-callout").addClass("bs-callout-danger").html("<h4>Error. You not are part of the community.</h4>\
                                    <p>The address you entered is outside the radius of the community. <br/>\
                                    <a href='<?php echo BASE_URL; ?>'>Go back</a></p>");
  }

  geocoder.geocode( { 'address': address}, function(results, status) {

    if (status == google.maps.GeocoderStatus.OK) 
    {
      var lat = results[0].geometry.location.lat().toFixed(6);
      var lng = results[0].geometry.location.lng().toFixed(6);

      // Log into the dev bar console whether the marker is inside or outside
      latLngA = new google.maps.LatLng(lat, lng);

      var marker2 = new google.maps.Marker({
          position: latLngA,
          map: map
      });

      if (bounds.contains( latLngA )) {
        $(".bs-callout").addClass("bs-callout-info").html("<h4>Success. You are part of the community.</h4>\
                                                           <p>Continue filling out the form below to take part in the action!</p>");
        $(".account_div").removeClass("hide");
      }
      else {
          $(".bs-callout").addClass("bs-callout-danger").html("<h4>Error. You not are part of the community.</h4>\
                                    <p>The address you entered is outside the radius of the community. <br/>\
                                    <a href='<?php echo BASE_URL; ?>'>Go back</a></p>");
      
      }
    }
    else 
    {
      console.log(google.maps.GeocoderStatus);
    }

  });


}

if (typeof google != 'undefined')
  google.maps.event.addDomListener(window, 'load', initialize);

