<!DOCTYPE html>
<html>
<head>
<html lang="en-US">
<link rel='shortcut icon' href='content/images/myfavicon.ico' type='image/x-icon'/ >
<link href="content/style.css" rel="stylesheet" type="text/css" media="all" />
<meta charset="UTF-8">
<meta name="author" content="Divyam Dhadwal">
<meta name="description" content="Official Website of CDC Department , SRM University NCR Campus">
<title>CDC Department - SRM University NCR Campus</title>
<link rel="stylesheet" href="menucss/style.css" />
<script src="js/jquery-1.9.1.min.js"></script>
<script>
    $(document).ready(function() {
        $( '.dropdown' ).hover(
            function(){
                $(this).children('.sub-menu').slideDown(200);
            },
            function(){
                $(this).children('.sub-menu').slideUp(200);
            }
        );
    }); // end ready
</script>
<script type="text/javascript">
	document.onkeydown = function(e) {
if(event.keyCode == 123) {
return false;
}
if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)){
return false;
}
if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)){
return false;
}
if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)){
return false;
}
if(e.ctrlKey && e.keyCode == 'C'.charCodeAt(0)){
return false;
}
}
</script>
</head>
<body oncontextmenu="eturn false;">
<div class="sitehead">
<img class="headerimage" src=content/images/sitelogo.png alt="CDC Department" align="center">
</div>
<nav>
    <ul class="content clearfix">
        <li><a href="index.php">HOME</a></li>
        <li><a href="faculty-login.php">FACULTY LOGIN</a></li>
        <li><a href="student-login.php">STUDENT LOGIN</a></li>
        <li class="dropdown">
        <a href="#">SAMPLE TESTS</a>
        <ul class="sub-menu">
               <li class="dropdown">
                <a href="#">FIRST YEAR</a>
                <ul class="sub-menu">
                        <li><a href="pd1003-1.php">SAMPLE TEST-1</a></li>
                        <li><a href="pd1003-2.php">SAMPLE TEST-2</a></li>
                </ul> 
                </li>   
                <li class="dropdown">
                <a href="#">SECOND YEAR</a>
                <ul class="sub-menu">
                        <li><a href="pd1004-1.php">SAMPLE TEST-1</a></li>
                        <li><a href="pd1004-2.php">SAMPLE TEST-2</a></li>
                </ul> 
                </li>  
                <li class="dropdown">
                <a href="#">THIRD YEAR</a>
                <ul class="sub-menu">
                        <li><a href="pd1005-1.php">SAMPLE TEST-1</a></li>
                        <li><a href="pd1005-2.php">SAMPLE TEST-2</a></li>
                </ul> 
                </li>  
                <li class="dropdown">
                <a href="#">FOURTH YEAR</a>
                <ul class="sub-menu">
                        <li><a href="pd1006-1.php">SAMPLE TEST-1</a></li>
                        <li><a href="pd1006-2.php">SAMPLE TEST-2</a></li>
                 </ul>  
                 </li>     
        </ul>
        </li>
        <li><a href="announcements.php">GENERAL ANNOUNCEMENTS</a></li>
        <li><a href="aboutus.php">ABOUT US</a></li>
        <li><a href="contactus.php">CONTACT US</a></li>
    </ul>
</nav>
<?php
$testscore=0;
$q1=$_POST["q1pd10031"];
$q2=$_POST["q2pd10031"];
$q3=$_POST["q3pd10031"];
$q4=$_POST["q4pd10031"];
$q5=$_POST["q5pd10031"];
$q6=$_POST["q6pd10031"];
$q7=$_POST["q7pd10031"];
$q8=$_POST["q8pd10031"];
$q9=$_POST["q9pd10031"];
$q10=$_POST["q10pd10031"];
$q11=$_POST["q11pd10031"];
$q12=$_POST["q12pd10031"];
$q13=$_POST["q13pd10031"];
$q14=$_POST["q14pd10031"];
$q15=$_POST["q15pd10031"];
$q16=$_POST["q16pd10031"];
$q17=$_POST["q17pd10031"];
$q18=$_POST["q18pd10031"];
$q19=$_POST["q19pd10031"];
$q20=$_POST["q20pd10031"];


if($q1=="d")
{
	$testscore+=2;
}
if($q2=="d")
{
	$testscore+=2;
}
if($q3=="b")
{
	$testscore+=2;
}
if($q4=="b")
{
	$testscore+=2;
}
if($q5=="a")
{
	$testscore+=2;
}
if($q6=="c")
{
	$testscore+=2;
}
if($q7=="b")
{
	$testscore+=2;
}
if($q8=="a")
{
	$testscore+=2;
}
if($q9=="d")
{
	$testscore+=2;
}
if($q10=="c")
{
	$testscore+=2;
}
if($q11=="c")
{
	$testscore+=1;
}
if($q12=="b")
{
	$testscore+=1;
}
if($q13=="c")
{
	$testscore+=1;
}
if($q14=="b")
{
    $testscore+=1;
}
if($q15=="c")
{
    $testscore+=1;
}
if($q16=="c")
{
    $testscore+=1;
}
if($q17=="b")
{
    $testscore+=1;
}
if($q18=="d")
{
    $testscore+=1;
}
if($q19=="e")
{
    $testscore+=1;
}
if($q20=="c")
{
    $testscore+=1;
}
echo'<div class="results">';
if($testscore<=10)
{
echo"Oh !! You need to improve. Practise hard.<br>";
echo"<hr>";
echo"Your test score is : $testscore / 30 [i.e, $testscore out of 30 marks]";
}

elseif($testscore<=20)
{
echo"Well , that was good ! But you still need practise , try to score above 20 <br>! Best of luck. ";
echo"<hr>";
echo"Your test score is : $testscore / 30 [i.e, $testscore out of 30 marks]";
}

else
{
echo" Woah !!, that was awesome..Keep practising :) <br>";
echo"<hr>";
echo"Your test score is : $testscore / 30 [i.e, $testscore out of 30 marks]";
}

echo'</div>';
?>
<div class="lowercontent">
<code>Designed by <a class="lc" href="http://www.facebook.com/divyam.dhadwal">DIVYAM DHADWAL</a><br>Copyright &#169; 2016 Department of Carrier Development Center - SRM University NCR Campus. All Rights Reserved.<br>Best viewed in IE 10.x, Firefox 25.x, Chrome 30.x onwards with a Resolution of 1024 * 768 & above</code>
</div>
</body>
</html>