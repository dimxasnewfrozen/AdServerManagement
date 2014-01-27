$(document).ready(function() {

	$(".adsbymm").each(function() {
		// generate the link
		var link = $("<a>");
			link.addClass("mm_ad");

		// generate the image for the link
		var img = new Image();

		$.ajax({
			url: "getAdd.php?action=get_ad",
			async: false
		}).done(function( data ) {

			data = JSON.parse(data);
			link.attr("href", data[0].link_src);
			img.onload = function() {}
			img.src = data[0].image_src;

		});

		link.html(img);

		// add the link/image to the page
		$(this).html(link);

	});
	
	// track the link click
	$(".mm_ad").on("click", function (){
		alert('Clicked!');
	});

});