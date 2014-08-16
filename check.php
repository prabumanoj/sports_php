<!DOCTYPE HTML>
<html>
<title>
IIT Madras Sports
</title>

<head>
<link rel="stylesheet" href="style2.css" type="text/css">
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
	}
  );
  
  $("#landing .menu").click(
  function(){
      $("#landing .content").show('fast');
      $("#schroeter").animate({left:'85%'});
	  $("#landing").animate({left:'15%'});	  
	  $("#interIIT").animate({left:'-70%'});
	  }
  );
  
  $("#schroeter .menu").click(
  function(){
      $("#schroeter").animate({left:'15%'});
	  $("#landing").animate({left:'0%'});
	  $("#interIIT").animate({left:'-85%'});
	  $("#landing .content").hide();
	}
  );
  
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
Inter IIT Menu
</div>

</div>



<div id='landing'>

<div class='menu'>
Menu
</div>

<div class ='content'>
Content
</div>

</div>


</body>

</html>