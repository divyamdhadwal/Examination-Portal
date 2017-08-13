<?php
session_start();
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
</head>
<body oncontextmenu="return false;">
<div class="sitehead">
<img class="headerimage" src=content/images/sitelogo.png alt="CDC Department" align="center">
</div>

<nav>
    <ul class="content clearfix">
        <li><a href="index.php">HOME</a></li>
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
        <li class="dropdown"><a href="#">CREATE NEW</a>
        <ul class="sub-menu">
         <li><a href="a87d66d08a23d9m476i087n12.php">ADMIN</a></li>
         <li><a href="adduser.php">USER</a></li>
         <li><a href="testcode.php">TEST</a></li>
         <li><a href="testdetails.php">TEST DETAIL</a></li>
         <li><a href="newbroadcast.php">ANNOUNCEMENT</a></li>

        </ul>
        </li>
        <li class="dropdown"><a href="#">DELETE</a>
        <ul class="sub-menu">
         <li><a href="deleteuser.php">USER</a></li>
         <li><a href="deletetestcode.php">TEST</a></li>
         <li><a href="deletebroadcast.php">ANNOUNCEMENT</a></li>
        </ul>
        </li>
        <li class="dropdown"><a href="#">STUDENTS</a>
        <ul class="sub-menu">
         <li><a href="studentcode.php">CHECK/RESULTS</a></li>
         <li><a href="studentcodenewstudent.php">CREATE NEW</a></li>
         <li><a href="studentcodedeletestudent.php">DELETE</a></li>
         <li><a href="resetstudentcounter.php">RESET COUNTER</a></li>

        </ul>
        </li>
        <li class="dropdown"><a href="#">LOGS</a>
        <ul class="sub-menu">
         <li><a href="logs.php">CHECK</a></li>
         <li><a href="deletelogs.php">CLEAR</a></li>
        </ul>
        </li>
        <li class="dropdown"><a href="#">ACCOUNT</a>
        <ul class="sub-menu">
        <li><a href="c34h2a56n1g4e98a223d7m0i13n27p80a91s77s45w7or0d.php">CHANGE PASSWORD</a></li>
        <li><a href="logout.php">LOGOUT</a></li>
        </ul>
        </li>
    </ul>
</nav>
<div class="controlmenu">
<?php
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true && $_SESSION['user']=='administrator') 
{
    echo'<div class=memberarea>';
    echo "HOLA !! Welcome to the ADMINISTRATOR PANEL, " . $_SESSION['validuser'] . "!";
    echo'&nbsp;For any issue , please contact +91-8091403027<br>';
    echo'NOTE : Please LOGOUT when you are done. It ensures your account is safe and prevents unauthorised access';
    echo'</div>';
} 
else {
    header('Location: faculty-login.php');
}
?>
</div>
<br>
<div class="adminhelp">
<strong>ADMIN TOOLS</strong>
<ol>
<li>To create a new USER , See the menu. Hover over CREATE NEW tab and click USER.</li><br>
<li>To create a new ANNOUNCEMENT , refer to the menu . Hover over CREATE NEW tab and click ANNOUNCEMENT</li><br>
<li>To create a new TEST , refer to the menu . Hover over CREATE NEW tab and click TEST.</li>
</ol>
<hr>
<ul type="disc">
<li>TEST RESULTS can be fetched by clicking RESULTS Tab in the main menu.</li><br>
<li>You can simply LOGOUT by clicking LOGOUT tab in the main menu. [**RECOMMENDED]</li>
</ul>
</div>
<div class="lowercontent">
<code>Designed by <a class="lc" href="http://www.facebook.com/divyam.dhadwal">DIVYAM DHADWAL</a><br>Copyright &#169; 2016 Department of Carrier Development Center - SRM University NCR Campus. All Rights Reserved.<br>Best viewed in IE 10.x, Firefox 25.x, Chrome 30.x onwards with a Resolution of 1024 * 768 & above</code>
</div></body>
</html>