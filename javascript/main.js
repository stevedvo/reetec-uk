function init ()
{
	$("#services_dropdown").click(function()
	{
		$("#services_menu").toggle();
	});
}

document.addEventListener("DOMContentLoaded", init, false);