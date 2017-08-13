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
 echo'<div class="usercheck"><code><strong>WELCOME , YOU ARE LOGGED IN. QUICK LINKS :</strong>&#160;&#160;<a class="panelbox" href="u78s56e89r31.php">USER PANEL</a></code> &#160; || &#160;<code><a class="panelbox" href="logout.php">LOGOUT</a> </code></div>';  
}

else
{
	header('Location: faculty-login.php');
}
?>
</head>
<body>
<center> 
<?php
$servername="localhost";
$user="techzon2";
$pass="RwIKlQ#nQ";
$db="techzon2_onlinetest";
$connect=mysqli_connect($servername,$user,$pass,$db);
if($connect)
{
    echo '<br>';
echo '<strong>Test ID/NAME/TIME calculator [Entries in the database] :</strong>';
echo '<br>';
 $sql="SELECT DISTINCT * from testdetails";
 $tottests=mysqli_query($connect,$sql);
 if(mysqli_num_rows($tottests)>0)
 {
echo'<table>
<tr>
   <th>TEST ID</th>
   <th>TEST NAME</th>
   <th>TEST TIME</th>
</tr>';
  while($totaltests=mysqli_fetch_assoc($tottests))
  {
    echo'<tr>';    
            echo'<td>';       
            echo $totaltests["testid"];
            echo'</td>';
            echo'<td>'; 
            echo $totaltests["testname"];
            echo'</td>';
            echo'<td>';       
            echo $totaltests["testtime"];
            echo'</td>';
            
    echo'</tr>';
    }
echo'</table>';
echo "<br>";
echo "To use one of these default test details , just add one of their ID's while creating a new test";

 }
 else
 {
    echo"There are currently no entries in the database.";
 }
}
else
{
    die('There was some error connecting to database'.mysqli_connect_error());
}
mysqli_close($connect);
ob_end_flush();
?>
</center>
<hr>
<div class="testcategory">
<form action="testdetailsvalidator.php" method="post">    
<center>
<strong>ADD A NEW ENTRY :</strong><br>
    <b>TEST ID NO.: </b>
    <input type="number" name="testid" placeholder="Start from 1. See help text below for reference."><br>
    <code><strong>HELP TEXT</strong> : Specify different ID numbers for different test NAMES. Don't keep two or more test names on same ID.</code><br>
    <b>TEST NAME : </b>
    <input type="text" name="testname" placeholder="Please refer to the correct format below."><br>
    <code><strong>FORMAT</strong> : CYCLE TEST (1/2) (YEAR) | MODAL EXAM (YEAR) | SEMESTER EXAM (YEAR) <br>
    "|" represents "OR" <br></code>
    <b>TEST TIME : </b>
    <input type="number" name="testid" placeholder="Specify time allotted to complete this particular test ID in minutes"><br>
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