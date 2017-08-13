<?php
session_start();
ob_start();
?>
<!DOCTYPE html>
<html>
<head>
<html lang="en-US">
<link rel='shortcut icon' href='content/images/myfavicon.ico' type='image/x-icon'/ >
<link href="content/studentonlinetests.css" rel="stylesheet" type="text/css" media="all" />
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
    div.tat{
        background-color: black;
        color: white;
        margin:auto;
        width:25%;
    }
    </style>
    <style>
    a{
        text-decoration: none;
        color:white;
    }
    a:hover{
        text-decoration: none;
        color:white;
        background-color:red;
    }
</style>
</head>
<body oncontextmenu="return false;">

<?php
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true && $_SESSION['coursetitle']=='PD1003' && $_SESSION['scounter']=='a') 
{
	echo'<div class="usercheck">';
    echo "<h2>";
    echo $_SESSION['testname'];
    echo "</h2>";
    echo '<code><strong>';
    echo '<h3>';
    echo "Welcome REGISTRATION NUMBER :" . $_SESSION['validstudent'];
    echo '&#160;&#160;&#160;&#160;';
    echo "SUBJECT TITLE : ".$_SESSION['coursetitle'];
    echo '&#160;&#160;&#160;&#160;';
    echo "TOTAL QUESTIONS :" .$_SESSION['totalquestions'];
    echo '&#160;&#160;&#160;&#160;';
    echo "TOTAL TIME : ".$_SESSION['testtime'];
    echo '</h3>';
    echo '</code></strong>';
    echo '</div>';


} 
else {
    header('Location: student-login.php');
}
ob_end_flush();
?>
<div class="ins">
<strong>IMPORTANT INSTRUCTIONS :</strong><br>
<code>*Please carefully read the instructions before proceeding any further. </code><br>
<hr>
1.Don't REFRESH the page during the test. <br>
2.ZERO marks will be alloted if the page is REFRESHED.<br>
2.Test can be given ONE-TIME only.<br>
3.Complete the test in the allotted time period.<br>
4.Click "SUBMIT TEST" when you are done.<br>
<br>
<div class="tat">
<b><em><a href="taketestpd1003.php">TAKE THE TEST</a></em></b>
</div>
</div>
</body>
</html>