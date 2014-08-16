<head>
<link rel="stylesheet" href="style.css" type="text/css">
<link href='http://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,200' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lora:700,400,100,300,200' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
<script src="jquery-1.11.1.js"></script>
<script src="hoverIntent.js"></script>

<script> 
var background_count=0;
var bg_color=["#99b433","#1e7145","#7e3878","#1d1d1d","#2b5797","#e3a21a","#da532c","#110000","#b91d47"];
var k=Math.random();
var i = Math.floor((k * 10));


function nextBg(){
++background_count;

if (background_count<=4){
$("#landing .content").css("background-image","url(back"+background_count+".jpg)");
if (background_count==4){
background_count=0;

}
}
}

function calColor(){
j=0;
while (j<=9){
j++;

if(i>=8){i=0}
i++;
$("#calender .date"+ j +"").css("background-color",""+bg_color[i]+"");
}
}


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
nextBg();
calColor();

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
  
  $(".today").hoverIntent(
  function(){
  $(".front").stop().fadeOut(500, function(){$(".back").slideDown(1000);});
  
  },
  function(){
	$(".back").stop().slideUp(500, function(){$(".front").fadeIn(500);});
	

  }
  )
  $(".sidepage .menu").click(
  function(){
	  nextBg();
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
	  $("#landing").removeClass("init");
	  $("#landing .home").click(function(){$("#landing").animate({left:'0%'});	});
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
	  
      $("#landing .content").show("slow"); 
	  $(".sidepage").removeClass("inactive");
	  $(".sidepage").addClass("active");
	  $(".inIIT").show();
	  $(".schr").show();
	  $("#landing").removeAttr("style");	
	  $(".sidepage").animate({left:'-70%'});
	  $(".sidepage .menu").css("float","right");
	  $(".sidepage .content").css("float","left");
	  $(".interIIT").hide();
	  $(".schroeter").hide();
	  $("#landing").addClass("init");
	  
	  }
  );


if ($("#landing").hasClass("init")){  


  $(".inIIT").click(
	  function(){
		
		$(".init").animate({left:"15%"},function(){$(".interIIT").show();});
		$(".schroeter").hide();

		}
	)

  $(".schr").click(
	  function(){
	  	$(".init").animate({left:"15%"},function(){$(".schroeter").show();});
		$(".interIIT").hide();

		}
	)
}
	$(".interIIT").mouseenter(
		function(){
		$(".interIIT").show();
		}
		);
		
	$(".schroeter").mouseenter(
		function(){
		$(".schroeter").show();
		}
		);

	}
);

</script> 

</head>
