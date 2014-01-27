$(document).ready(function () {

	$(".action").click(function () {
		$(".action_val").val($(this).attr("id"));
		$(".entry_actions").submit();
	});

	$(".trigger_issue").click(function () {

		if (window.confirm("Are you sure you want to create a new issue?"))
		{
			return true;
		}
		else {
			return false;
		}

	});

});