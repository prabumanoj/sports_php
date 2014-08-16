<!DOCTYPE HTML>
<html>
<title>
IIT Madras Sports
</title>

<head>
<link rel="stylesheet" href="style.css" type="text/css">
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,200' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lora:700,400,100,300,200' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
<script src="jquery-1.11.1.js"></script>

<script> 
$.fn.clicktoggle = function(a, b) {
    return this.each(function() {
        var clicked = false;
        $(this).click(function() {
            if (clicked) {
                clicked = false;
                return b.apply(this, arguments);
            }
            clicked = true;
            return a.apply(this, arguments);
        });
    });
};

$(document).ready(function(){


  $(window).scroll(function(){
	
	$('*[class^="image-tile"]').each(function(r){
            var pos = $(this).offset().top;
            var scrolled = $(window).scrollTop();
			if(scrolled<320){
			$('*[class^="image-tile"]').css('position', 'absolute');
			$('*[class^="image-tile"]').css('top', -(scrolled * 0.2) + 'px');  
			}
			else{
			$('*[class^="image-tile"]').css('position', 'fixed');
			$('*[class^="image-tile"]').css('top', '-380px');	
			}
		});
  
  });
  $(".sidepage .menu").click(
  function(){
	  $(".sidepage").removeClass("active");
	  $(".sidepage").addClass("inactive");
      $(".sidepage").animate({left:'0%'});
	  $("#landing").animate({left:'85%'});
	  $("#schroeter").animate({left:'100%'});
	  $("#landing .content").hide();
	  $(".sidepage").animate({opacity:'1'});
	  $(".sidepage .menu").css("float","left");
	  $(".sidepage .content").css("float","right");
	  $(".sidepage .menu").show;
	  $(".sidepage .menu").removeClass("hov");
	  $("#landing").removeClass("init");
	}
  );
  
  $(".interIIT .menu").click(
  function(){ 
	$(".inactive").mouseleave(function(){$(".interIIT").show();});
	}
  );
  
  $(".schroeter .menu").click(
  function(){ 
	$(".inactive").mouseleave(function(){$(".schroeter").show();});
	}
  );
  
  
  $("#landing .menu").click(
  function(){
      $("#landing .content").show(); 
	  $(".sidepage").removeClass("inactive");
	  $(".sidepage").addClass("active");
	  $(".inIIT").show();
	  $(".schr").show();
	  $("#landing").animate({left:'0%'});	  
	  $(".sidepage").animate({left:'-70%'});
	  $(".sidepage .menu").css("float","right");
	  $(".sidepage .content").css("float","left");
	  $(".interIIT").hide();
	  $(".schroeter").hide();
	  $("#landing").addClass("init");
	  
	  }
  );
  
    $("#landing .content").click(
  function(){
	$('*[class^="image-tile"]').each(function(r){
	var scrolled = $(window).scrollTop();
	alert(scrolled);
	})
  
  }
  )

if ($("#landing").hasClass("init")){  


  $(".inIIT").hover(
	  function(){
		$(".interIIT").show("fast");
		$(".init").animate({left:"15%"});
		$(".schroeter").hide();

		},
	  function(){
		
		$(".hov").mouseleave(function(){
			$(".init").animate({left:"0%"}, function(){$(".inIIT").show("slow");$(".interIIT .menu").removeClass("hov");});
		})
		}
	)
}
  $(".schr").hover(
	  function(){
		$(".interIIT").hide();
		$(".schroeter").show();
		$(".schroeter .menu").addClass("hov");
		$(".init").animate({left:"25%"});
		},
	  function(){
		$(".hov").mouseleave(function(){
			$(".init").animate({left:"0%"}, function(){$(".schr").show("slow");$(".interIIT .menu").removeClass("hov");});
		})		
		}
	)

	$(".interIIT").hover(
		function(){
		$(".interIIT").show();
		
		},
		function(){
		$(".interIIT").hide();		
		}
		);
		
	$(".schroeter").hover(
		function(){
		$(".schroeter").show();
		},
		function(){
		$(".schroeter").hide();
		}
		);

	}
);

</script> 

</head>

<body>
<div class='sidepage active interIIT'>

<div class ='content'>
Inter IIT Content
</div>

<div class='menu'>

<h1 class="title">Inter IIT</h1>
<ul class="main-menu">
<li>About Inter-IIT</li>
<li>Events</li>
<li>The Teams</li>
<li>Records</li>
<li>Calender</li>
</ul>

<div class="table">

<div class='tab'>
<div class='name'>IIT Madras</div>
<div class='points'>0</div>
</div>

<div class='tab'>
<div class='name'>IIT Bombay</div>
<div class='points'>0</div>
</div>

<div class='tab'>
<div class='name'>IIT Delhi</div>
<div class='points'>0</div>
</div>

<div class='tab'>
<div class='name'>IIT Kanpur</div>
<div class='points'>0</div>
</div>

<div class='tab'>
<div class='name'>IIT Kharagpur</div>
<div class='points'>0</div>
</div>

<div class='tab'>
<div class='name'>IIT Guwahati</div>
<div class='points'>0</div>
</div>

<div class='tab'>
<div class='name'>IIT Roorkee</div>
<div class='points'>0</div>
</div>

<div class='tab'>
<div class='name'>IIT GandhiNagar</div>
<div class='points'>0</div>
</div>

<div class='tab'>
<div class='name'>IIT Patna</div>
<div class='points'>0</div>
</div>

<div class='tab'>
<div class='name'>IIT Mandi</div>
<div class='points'>0</div>
</div>

<div class='tab'>
<div class='name'>IIT Hyderabad</div>
<div class='points'>0</div>
</div>

<div class='tab'>
<div class='name'>IIT Indore</div>
<div class='points'>0</div>
</div>


<div class='tab'>
<div class='name'>IIT Rajasthan</div>
<div class='points'>0</div>
</div>

<div class='tab'>
<div class='name'>IIT Ropar</div>
<div class='points'>0</div>
</div>

<div class='tab'>
<div class='name'>IIT BHU</div>
<div class='points'>0</div>
</div>

<div class='tab'>
<div class='name'>IIT Bhuvaneshwar</div>
<div class='points'>0</div>
</div>


</div>

</div>
<a href=""><img src="cancel.png" class="esc"></a>
</div>
<div class="sidepage active schroeter">
<div class ='content'>
<h1>Schroeter Content goes here</h1>
</div>

<div class='menu'>

<h1 class="title">Schroeter</h1>
<ul class="main-menu">
<li>About Schroeter</li>
<li>Events</li>
<li>Pools - Schroeter 2015</li>
<li>Schedule</li>
<li>Results</li>
</ul>

<div class="table">

<div class='tab'>
<div class='name'>Saraswathi</div>
<div class='points'>0</div>
</div>

<div class='tab'>
<div class='name'>Pampa</div>
<div class='points'>0</div>
</div>

<div class='tab'>
<div class='name'>Sarayu</div>
<div class='points'>0</div>
</div>

<div class='tab'>
<div class='name'>Sharavathi</div>
<div class='points'>0</div>
</div>

<div class='tab'>
<div class='name'>Godavari</div>
<div class='points'>0</div>
</div>

<div class='tab'>
<div class='name'>Mandakini</div>
<div class='points'>0</div>
</div>

<div class='tab'>
<div class='name'>Tamaraparani</div>
<div class='points'>0</div>
</div>

<div class='tab'>
<div class='name'>Sindhu</div>
<div class='points'>0</div>
</div>

<div class='tab'>
<div class='name'>Mahanadi</div>
<div class='points'>0</div>
</div>

<div class='tab'>
<div class='name'>Krishna</div>
<div class='points'>0</div>
</div>

<div class='tab'>
<div class='name'>Brahmaputra</div>
<div class='points'>0</div>
</div>

<div class='tab'>
<div class='name'>Cauvery</div>
<div class='points'>0</div>
</div>


<div class='tab'>
<div class='name'>Tapti</div>
<div class='points'>0</div>
</div>

<div class='tab'>
<div class='name'>Ganga</div>
<div class='points'>0</div>
</div>

<div class='tab'>
<div class='name'>Jamuna</div>
<div class='points'>0</div>
</div>

<div class='tab'>
<div class='name'>Alakananda</div>
<div class='points'>0</div>
</div>

<div class='tab'>
<div class='name'>Narmada</div>
<div class='points'>0</div>
</div>

</div>

</div>
<a href=""><img src="cancel.png" class="esc"></a>
</div>

<div id='landing'  class="init">


<div class='menu'>

<img src="logo.png">
<br><br>
<ul class="main-menu">
<li class='item'>Home</li>
<li class='item'>Events</li>
<li class='inIIT'>InterIIT</li>
<li class='schr'>Schroeter</li>
<li class='item'>NSO</li>
<li class='item'>Dean's Trophy</li>
<li class='item'>SPL</li>
<li class='item'>Sponsorship</li>
<li class='item'>Contact</li>
<ul>
</div>

<div class ='content' >
<div class='trend-wrapper'>
<h1 style="color:white;font-weight:400;">Trending</h1>
<hr>
<div class="trend-tile-large">
</div>
<div class="trend-tile-small top">
</div>
<div class="trend-tile-small bottom">
</div>
</div>

<div class='calender'>
<div class='today'>


</div>
</div> 





</div>


</div>


</body>

</html>