<!DOCTYPE HTML>
<html>
<?php
$eps = 0.01;
echo $eps;
while((1+$eps)>1){
$eps=$eps/2;
}
echo "<br>";
echo $eps;

echo "<br>";
$eps = 0.01;
echo $eps;
while((1+$eps)>1){
$eps=$eps/3;
}
echo "<br>";
echo $eps;

echo "<br>";
$eps = 0.001;
echo $eps;
while((1+$eps)>1){
$eps=$eps/16;
}
echo "<br>";
echo $eps;

?>
</html>
