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
<div class="addquestion">
<form action="studentaddedpd1006.php" method="post">
<center>
<b>REGISTRATION NUMBER :</b><br>
<input type="number" name="regnumber" placeholder="For example : 1411003030186" required><br>
<b>NAME</b> :<br>
<input type="text" name="studentname" placeholder="Name of student goes here" required><br>
<b>DATE OF BIRTH</b> :<br>
<input type="number" name="dateofbirth" placeholder="e.g : If DOB is 28th Jan 1997 write 28011997" required><br>
<hr>
<b>COUNTER</b> :<br>
<input type="number" name="counter" placeholder="See help text below for reference" required><br>
<code><b>HELP TEXT</b>: 0 -> Student cannot appear for the test<br> 1 -> Student can appear for the test<br>**Please keep the default value = 0</code><br>
<hr>
<b>MARKS </b>:<br><input type="number" name="marks" placeholder="Please keep it 0"><br>
<code>Please keep the student marks = 0 while adding a new student</code>
<br>
<br>
<input type="submit" name="submit">
<input type="reset" name="reset">
</center>   
</form>
</div>
<hr>
<center>
<strong>CURRENT STUDENTS IN PD1006 for upcoming test :</strong>
<br>
<br>
</center>
<center> 
<?php
$servername="localhost";
$user="techzon2";
$pass="RwIKlQ#nQ";
$db="techzon2_studentinfo";
$connect=mysqli_connect($servername,$user,$pass,$db);
if($connect)
{
 $sql="SELECT registrationnum,name,dateofbirth,counter from pd1006";
 $totstudents=mysqli_query($connect,$sql);
 if(mysqli_num_rows($totstudents)>0)
 {

echo'<table>
<tr>
   <th>REGISTRATION NO.</th>
   <th>STUDENT NAME</th>
   <th>DATE OF BIRTH</th>
   <th>COUNTER</th>
</tr>';
  while($totalstudents=mysqli_fetch_assoc($totstudents))
  {
    echo'<tr>';    
            echo'<td>';       
            echo $totalstudents["registrationnum"];
            echo'</td>';
            echo'<td>'; 
            echo $totalstudents["name"];
            echo'</td>';
            echo'<td>';       
            echo $totalstudents["dateofbirth"];
            echo'</td>';
            echo'<td>';       
            echo $totalstudents["counter"];
            echo'</td>';
            
    echo'</tr>';
    }
echo'</table>';

 }
 else
 {
    echo"There are currently no students in the database";
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
<div class="lowercontent">
<code>Designed by <a class="lc" href="http://www.facebook.com/divyam.dhadwal">DIVYAM DHADWAL</a><br>Copyright &#169; 2016 Department of Carrier Development Center - SRM University NCR Campus. All Rights Reserved.<br>Best viewed in IE 10.x, Firefox 25.x, Chrome 30.x onwards with a Resolution of 1024 * 768 & above</code>
</div>
</body>
</html>