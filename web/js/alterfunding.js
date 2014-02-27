$(document).ready(function()
{
	
	//tri des tableaux
	//$("table.tableSorter").tablesorter();
	
	tinyMCE.init({
		mode : "textareas",
		theme : "advanced",
		editor_selector : "tinymce",
	});

	
	 $(function() {
		$( ".datepicker" ).datepicker();
	});
	
	
    // carousel demo
    $('#myCarousel').carousel();
	
   

	$(".projetsVignettes").click(function() {
		if(($(this).height()) >= 59)
		{
			$(this).animate({height: "58px"}, 500);
		}
		else
		{
			$(this).animate({height: "450px"}, 500);
		}
	});

	
	$('#myTab a').click(function (e) 
	{
		e.preventDefault();
		$(this).tab('show');
    })


	//masque les fenetres de chargement
	$(".loading").hide();
	
	
	//afficher ou masquer la partie technique dans l'index d'administration si on clique sur le titre "Administration"
	$("#Administration").click(function()
	{
		$(".administration-technique").toggle();
	});
	
	$('#myModal').on('hidden.bs.modal', function () {
		$(this).removeData('bs.modal');
	});

	$('#myModal').click(function()
	{
		$('#myModal').modal('hide')
	});
	

	
});