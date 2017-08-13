<?php
session_start();
ob_start();
?>
<!DOCTYPE html>
<html>
<head>
<html lang="en-US">
<link rel='shortcut icon' href='content/images/myfavicon.ico' type='image/x-icon'/ >
<link href="content/onlinetests.css" rel="stylesheet" type="text/css" media="all" />
<meta charset="UTF-8">
<meta name="author" content="Divyam Dhadwal">
<meta name="description" content="Official Website of CDC Department , SRM University NCR Campus">
<title>CDC Department - SRM University NCR Campus</title>

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
<style>
.input-generic{
width:50%;
background-color: #ffffff;
color: black;
padding: 14px 20px;
margin: 8px 0;
border: none;
border-radius: 4px;
cursor: pointer;
	}
</style>
</head>
<body oncontextmenu="return false;">
<?php
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true && $_SESSION['user']=='administrator') 
{

echo'<div class="usercheck"><code><strong>WELCOME , YOU ARE LOGGED IN. QUICK LINKS :</strong>&#160;&#160;<a class="panelbox" href="a3d5m8i0n23.php">ADMIN PANEL</a></code> || <code><a class="panelbox" href="logout.php">LOGOUT</a></code> </div>';
} 
elseif (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true && $_SESSION['user']=='user')
{
 echo'<div class="usercheck"><code><strong>WELCOME , YOU ARE LOGGED IN. QUICK LINKS :</strong>&#160;&#160;<a class="panelbox" href="u78s56e89r31.php">USER PANEL</a></code> &#160; || &#160;<code><a class="panelbox" href="logout.php">LOGOUT</a> </code></div>';  
}

else
{
	header('Location: faculty-login.php');
}
?>
<div class="testcategory">
<?php
$servername="localhost";
$username="techzon2";
$pass="RwIKlQ#nQ";
$db="techzon2_onlinetest";
$connect=mysqli_connect($servername,$username,$pass,$db);
if($connect)
{
$questionnum=$_POST["questionnum"];
$question=$_POST["question"];
$option1=$_POST["o1"];
$option2=$_POST["o2"];
$option3=$_POST["o3"];
$option4=$_POST["o4"];
$option5=$_POST["o5"];
$answer=$_POST["answer"];
if($answer==1)
{
	$answertext=$_POST["o1"];
}
elseif($answer==2)
{
	$answertext=$_POST["o2"];
}
elseif($answer==3)
{
	$answertext==$_POST["o3"];
}
elseif($answer==4)
{
	$answertext==$_POST["o4"];
}
else
{
	$answertext==$_POST["o5"];
}
$marks=$_POST["marks"];
$sql="INSERT into pd1006(questionnum,question,option1,option2,option3,option4,option5,answer,answertext,marks) values ('$questionnum','$question','$option1','$option2','$option3','$option4','$option5','$answer','$answertext','$marks')";
   if(mysqli_query($connect,$sql))
   {
   	
	echo"Question was added<br>";
	echo"<hr>";
	echo"<em> <a href='testcreatorpd1006.php'>Add another question</a></em>";

   }
   else
   {

   	echo"Some error occurred . If error persists , please contact administrator".mysqli_connect_error();
   	echo"<br>";
    echo"<em> <a href='testcreatorpd1006.php'>Add another question</a></em>";
    echo"<br>";
    echo("Error description: " . mysqli_error($connect));
   }

}

else{

	die("There was some error connecting to database. Please try again".mysqli_connect_error());

}
mysqli_close($connect);
ob_end_flush();
?>
</div>
<div class="lowercontent">
<code>Designed by <a class="lc" href="http://www.facebook.com/divyam.dhadwal">DIVYAM DHADWAL</a><br>Copyright &#169; 2016 Department of Carrier Development Center - SRM University NCR Campus. All Rights Reserved.<br>Best viewed in IE 10.x, Firefox 25.x, Chrome 30.x onwards with a Resolution of 1024 * 768 & above</code>
</div>
</body>
</html>