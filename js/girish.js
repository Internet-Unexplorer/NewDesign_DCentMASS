var wdth = $(window).width();
    	$(document).ready(function(){
		    if(wdth<"880")
				{
				   	$(".right-bars").css("display","none");
				   	$(".left-bar").css("display","none");
				   	$("#openNavID").css("display","inline-block");
				   	
				   	
				}
				else if(wdth>="880")
				{
				   	$(".right-bars").css("display","block");
				   	$(".left-bar").css("display","block");
				   	$("#openNavID").css("display","none");
				   	
				}


		});
		// Read window width change
		$(window).on('resize', function(){
		   if($(this).width() != wdth){
		      wdth = $(this).width();
		       if(wdth<"880")
				{
				   	$(".right-bars").css("display","none");
				   	$(".left-bar").css("display","none");
				   	$("#openNavID").css("display","inline-block");
					
				}
				else if(wdth>="880")
				{
				   	$(".right-bars").css("display","block");
				   	$(".left-bar").css("display","block");
				   	$("#openNavID").css("display","none");
				}
		   }
		});

		

	function openNav() {
    document.getElementById("mySidenav").style.width = "100%";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}


$(document).ready(function() {
    $('#Carousel').carousel({
        interval: 5000
    })
});

