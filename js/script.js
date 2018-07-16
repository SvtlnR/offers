$(document).ready(function(){
	$(".hdr").fadeIn('slow', function(){});
	$("#shgi").click(function(){
		$("#resform").hide('fast');
		$("#favsh").hide('fast');
		$("#cont").hide('fast');
		$("#offer").hide('fast');
		$("#geninf").show('fast');
	})
	$("#shfsh").click(function(){
		$("#resform").hide('fast');
		$("#geninf").hide('fast');
		$("#cont").hide('fast');
		$("#offer").hide('fast');
		$("#favsh").show('fast');
	})
	$("#shcont").click(function(){
		$("#resform").hide('fast');
		$("#geninf").hide('fast');
		$("#favsh").hide('fast');
		$("#offer").hide('fast');
		$("#cont").show('fast');	
	})
	$("#shoff").click(function(){
		$("#resform").hide('fast');
		$("#geninf").hide('fast');
		$("#favsh").hide('fast');
		$("#cont").hide('fast');
		$("#offer").show('fast');	
		$("#inputoffer").show('fast');
	})
	$("#sandwich").click(function(){
		$("nav ul").toggle('fast');
	})	
	$("footer").text(String.fromCharCode(0169)+ (new Date()).getFullYear());
	if(window.matchMedia("(max-width: 768px)").matches){
	$(window).on("orientationchange",function(){
  		if(window.orientation != 0)
  		{
    		$("nav ul").css({'display':'inline-block'});
  		}
  		else{
  			$("nav ul").css({'display':'none'});	
  		}
	})
	}
	if(window.matchMedia("(min-width: 768px)").matches){
	$(window).on("orientationchange",function(){
  		if(window.orientation != 0)
  		{
    		$("nav ul").css({'display':'inline-block'});
  		}
  		else{
  			$("nav ul").css({'display':'inline-block'});	
  		}
	})
	}
	
});
