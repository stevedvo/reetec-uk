function init ()
{
	$("#services_dropdown").click(function()
	{
		$("#services_menu, #ServOpen, #ServClose").toggle();
	});

}

document.addEventListener("DOMContentLoaded", init, false);