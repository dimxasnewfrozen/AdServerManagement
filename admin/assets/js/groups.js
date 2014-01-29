$(document).ready(function () {

	$(".modal_code").click(function () {



		$(".modal-title").html($(this).attr("gname"));
		var url = $(".base_url").val();

		var content = '<iframe src="' + url+ '/getAdd.php?action=get_ad&adSlot=' + $(this).attr("guid") + '" frameborder="0" scrolling=no width="' + $(this).attr("width") + '" height="' + $(this).attr("height") + '" style="display:inline"></iframe>';

		$(".modal-title").html($(this).attr("gname"));
		$(".iframe_content").html("<textarea class='form-control' style='height:150px;'>" + content + "</textarea>");

	});


});