<?php
session_start();
ob_start();
$log='u89s54e67r6l899o45g121s.txt';
$username=$_SESSION['validuser'];
date_default_timezone_set("Asia/Kolkata");
$date = new DateTime();
$date = $date->format("d:m:y h:i:s");
if ($handle = fopen($log,'a'))
    {
    fwrite($handle,"LOGOUT : ");  
    fwrite($handle,$username);
    fwrite($handle,"===>");
    fwrite($handle,$date);
    fwrite($handle,"\r\n");
    }
session_destroy();
?>
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
<style>
.dobclass{
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
<div class="message">
<code>You have been successfully logged out!</code>
<?php
header("refresh:2;url=faculty-login.php");
?>
</div>
<div class="lowercontent">
<code>Designed by <a class="lc" href="http://www.facebook.com/divyam.dhadwal">DIVYAM DHADWAL</a><br>Copyright &#169; 2016 Department of Carrier Development Center - SRM University NCR Campus. All Rights Reserved.<br>Best viewed in IE 10.x, Firefox 25.x, Chrome 30.x onwards with a Resolution of 1024 * 768 & above</code>
</div>
</body>
</html>