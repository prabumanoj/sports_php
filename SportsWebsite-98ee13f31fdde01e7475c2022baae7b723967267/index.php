<!DOCTYPE HTML>
<html>
<title>
IIT Madras Sports
</title>

<head>
<link rel="stylesheet" href="style.css" type="text/css">
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
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

  $("#interIIT .menu").click(
  function(){
      $("#interIIT").animate({left:'0%'});
	  $("#landing").animate({left:'85%'});
	  $("#schroeter").animate({left:'100%'});
	  $("#landing .content").hide();
	  $("#interIIT").animate({opacity:'1'});
	  $("#interIIT .menu").css("float","left");
	  $("#interIIT .content").css("float","right");
	  $(".inIIT").hide();
	}
  );
  
  $("#landing .menu").click(
  function(){
      $("#schroeter").animate({left:'85%'});
	  
      $("#landing .content").show(); 
      $("#interIIT").animate({opacity:'0.2'},function(){$("#interIIT").removeAttr("style");});
	  $("#schroeter").animate({opacity:'0.2'},function(){$("#schroeter").removeAttr("style");}); 
	  $("#landing").animate({left:'15%'});	  
	  $("#interIIT").animate({left:'-70%'});
	  $("#interIIT .menu").css("float","right");
	  $("#interIIT .content").css("float","left");
	  $("#schroeter .menu").css("float","left");
	  $("#schroeter .content").css("float","right");
	  }
  );
  
  $("#schroeter .menu").click(
  function(){
	  $("#schroeter .menu").css("float","right");
	  $("#schroeter .content").css({"float":"left","margin-left":"0px"});
      $("#schroeter").animate({left:'15%'});
	  $("#landing").animate({left:'0%'});
	  $("#interIIT").animate({left:'-85%'});
	  $("#landing .content").hide();
	  $("#schroeter").animate({opacity:'1'});
	}
  );
  
  
  $(".inIIT").hover(
  function(){
	$("#interIIT").animate({opacity:'1'});
  },
  function(){
	$("#interIIT").removeAttr("style");
  }
  )
});



</script> 

</head>

<body>

<div id='schroeter'>

<div class='menu'>
Schroeter Menu
</div>

<div class ='content'>
Schroeter Content
</div>

</div>


<div id='interIIT'>

<div class ='content'>
Inter IIT Content
</div>

<div class='menu'>
<h1 class="title">Inter IIT</h1>
<ul id="main-menu">
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

</div>

<div id='landing'>

<div class='menu'>
<h1 class="title">Menu</h1>
<ul id="main-menu">
<li>Home</li>
<li>Events</li>
<li class='inIIT'>InterIIT</li>
<li>NSO</li>
<li>Dean's Trophy</li>
<li>SPL</li>
<li>Sponsorship</li>
<li>Contact</li>
<ul>
</div>

<div class ='content'>

<div class='container large'>

<img class =" image" src="large_1.png" ></img>


<h1>Title</h1>


<p>
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

</div>

<div class='container medium'>
</div>

<div class='container medium'>
</div>


</div>

</div>


</body>

</html>