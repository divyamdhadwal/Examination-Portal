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
<form action="databaseconnectpd1006.php" method="post">
<center>
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
?>
<hr>
<b>TEST ID :</b>
<input type="number" name="testid" required><br>
<b>QUESTION NUMBER :</b><br>
<input type="number" name="questionnum" required><br>
<b>QUESTION</b> :<br>
<textarea name="question" rows="2" cols="50" placeholder="Please write your question here..." style="margin: auto; width: 70%;" required></textarea>
</textarea><br>
<b>OPTIONS</b> :<br>
<strong>OPTION ID : 1</strong>
<input type="text" class="input-generic" name="o1" placeholder="Write first option here" required><br>
<strong>OPTION ID : 2</strong>
<input type="text" class="input-generic" name="o2" placeholder="Write second option here" required><br>
<strong>OPTION ID : 3</strong>
<input type="text" class="input-generic" name="o3" placeholder="Write third option here" required><br>
<strong>OPTION ID : 4</strong>
<input type="text" class="input-generic" name="o4" placeholder="Write fourth option here" required><br>
<strong>OPTION ID : 5</strong>
<input type="text" class="input-generic" name="o5" placeholder="Write fifth option here" required><br>
<hr>
<b>Correct ID number</b> :
<input type="number" name="answer" class="input-generic" placeholder="1 OR 2 OR 3 OR 4 OR 5" required><br>
<b>Max. Marks alloted</b> :
<input type="number" class="input-generic" name="marks" required><br>
<input type="submit" name="submit">
<input type="reset" name="reset">
</center>   
</form>
</div>
<hr>
<center>
<strong>CURRENT QUESTIONS IN PD1006 for upcoming test :</strong>
<br>
</center>
<center> 
<?php
$servername="localhost";
$user="techzon2";
$pass="RwIKlQ#nQ";
$db="techzon2_onlinetest";
$connect=mysqli_connect($servername,$user,$pass,$db);
if($connect)
{
 $sql="SELECT questionnum,question,option1,option2,option3,option4,answer,marks from pd1006 ORDER BY questionnum";
 $totquestions=mysqli_query($connect,$sql);
 if(mysqli_num_rows($totquestions)>0)
 {

echo'<code><b>***OPTION 5 is always none of the above</b></code><br>
<table>
<tr>
   <th>NUMBER</th>
   <th>QUESTION</th>
   <th>OPTION1</th>
   <th>OPTION2</th>
   <th>OPTION3</th>
   <th>OPTION4</th>
   <th>ANSWER</th>
   <th>MARKS</th>
</tr>';
  while($totalquestions=mysqli_fetch_assoc($totquestions))
  {
    echo'<tr>';    
            echo'<td>';       
            echo $totalquestions["questionnum"];
            echo'</td>';
            echo'<td>'; 
            echo $totalquestions["question"];
            echo'</td>';
            echo'<td>';       
            echo $totalquestions["option1"];
            echo'</td>';
            echo'<td>';       
            echo $totalquestions["option2"];
            echo'</td>';
            echo'<td>';       
            echo $totalquestions["option3"];
            echo'</td>';
            echo'<td>'; 
            echo $totalquestions["option4"];
            echo'</td>';
            echo'<td>'; 
            echo $totalquestions["answer"];
            echo'</td>';
            echo'<td>'; 
            echo $totalquestions["marks"];
            echo'</td>';
    echo'</tr>';
    }
echo'</table>';

 }
 else
 {
    echo"There are currently no questions in the database";
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