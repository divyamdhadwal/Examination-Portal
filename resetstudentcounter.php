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
 header('Location: faculty-login.php');
}

else
{
    header('Location: faculty-login.php');
}
ob_end_flush();
?>
</head>
<body>
<div class="testcategory">
<form action="studentcounterdatabasevalidator.php" method="post">    
<center>
    <b>SUBJECT CODE : </b>
    <input type="text" name="subcode" placeholder="PD1003 OR PD1004 OR PD1005 OR PD 1006"><br>
    <code>*Type the correct subject code of a particular student you want to edit the counter value for OR if you want to edit counter value for a whole course.</code><br>
    <hr>
    <input type="submit" name="submit">&#160;&#160;&#160;<input type="reset" name="reset">
</center>
</form>
</div>
</body>
<div class="lowercontent">
<code>Designed by <a class="lc" href="http://www.facebook.com/divyam.dhadwal">DIVYAM DHADWAL</a><br>Copyright &#169; 2016 Department of Carrier Development Center - SRM University NCR Campus. All Rights Reserved.<br>Best viewed in IE 10.x, Firefox 25.x, Chrome 30.x onwards with a Resolution of 1024 * 768 & above</code>
</div>
</body>
</html>