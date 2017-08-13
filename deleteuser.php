<?php
session_start();
ob_start();
?>
<?php
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true && $_SESSION['user']=='administrator') 
{
} 
else {
    header('Location: faculty-login.php');
}
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
.input-generic{
width:50%;
background-color: #ffffff;
color: black;
padding: 14px 20px;
margin: 8px 0;
border: none;
border-radius: 4px;
cursor: pointer;
</style>
<style>
table{
    border-collapse: collapse;
    background-color: #97A8F9;
}

table,tr
{
    border-style: dotted;
    border-radius: 4px;
    border-width:2px;
    padding:2px;
    text-align:center;
    margin:auto;
    width:80%;
}
td:hover,tr:hover,th:hover
{
    background-color: #FF856B;
}
</style>
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
<div class="aruser">

<?php
$servername="localhost";
$user="techzon2";
$pass="RwIKlQ#nQ";
$database="techzon2_accountdata";
$connect=mysqli_connect($servername,$user,$pass,$database);
if($connect)
{
$sql="SELECT * from userdetails";
$totalusers=mysqli_query($connect,$sql);

  if(mysqli_num_rows($totalusers)>0)
  {
echo'<em><b>Current users and their passwords</b>(Use these values to delete a USER)</em> 
<table>
<tr>
    <th>USERNAME</th>
    <th>PASSWORD</th>
</tr>';
   while($totusers=mysqli_fetch_assoc($totalusers))
    {
echo'<tr>';    
            echo'<td>';       
            echo $totusers["username"];
            echo'</td>';
            echo'<td>'; 
            echo $totusers["password"];
            echo'</td>';
echo'</tr>';
    }
echo'</table>';
echo'<hr>';
  }
  else
  {
echo'<em><b>Current users and their passwords</b>(Use these values to delete a USER)</em> 
<table>
<tr>
    <th>USERNAME</th>
    <th>PASSWORD</th>
</tr>
<tr> <td>---------</td><td>---------</td></tr></table>
<hr>';
  }
}
else
{
    die('Unable to connect to database'.mysqli_connect_error());
}
mysqli_close($connect);
ob_end_flush();
?>

<img src="content/images/deleteuser.png" align="center" width="160px" height="160px">
<form action="userdeleted.php" method="post">
<strong>USERNAME :</strong>
<input type="text" name="username" placeholder="Specify username of USER you want to delete" required><br>
<strong>PASSWORD :</strong>
<input type="password" class="input-generic" name="password" placeholder="Specify the password of the user" required><br>
<input type="submit" name="submit">&#160;&#160;<input type="reset" name="reset">

</form>
</div>
<div class="lowercontent">
<code>Designed by <a class="lc" href="http://www.facebook.com/divyam.dhadwal">DIVYAM DHADWAL</a><br>Copyright &#169; 2016 Department of Carrier Development Center - SRM University NCR Campus. All Rights Reserved.<br>Best viewed in IE 10.x, Firefox 25.x, Chrome 30.x onwards with a Resolution of 1024 * 768 & above</code>
</div></body>
</html>