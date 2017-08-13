<?php
session_start();
ob_start();
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
select{
width:50%;
background-color: #ffffff;
color: black;
padding: 14px 20px;
margin: 8px 0;
border: none;
border-radius: 4px;
cursor: pointer;

}
.dobclass,.num{
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
<div class="facultybox">
<img src="content/images/student-login.png" align="center" width="160px" height="160px">
<?php
echo '<form action="studentvalidator.php" method="post">';
?>
<strong>
REG. NUMBER :&nbsp;&nbsp;</strong>
<input type="text" name="regn" placeholder="For example : 1411003030186" required><br>
<br>
<strong>
PASSWORD :&nbsp;&nbsp;</strong>
<input type="text" name="dob" placeholder="Your DOB is your password. FORMAT : DDMMYYYY" class="dobclass" required><br>
<br>
<input type="submit" name="submit">&#160;&#160;&#160;&#160;<input type="reset" name="reset">
</form>
<?php
$regn=$_POST["regn"];
$dob=$_POST["dob"];
$servername="localhost";
$user="techzon2";
$pass="RwIKlQ#nQ";
$database="techzon2_studentinfo";
$connect=mysqli_connect($servername,$user,$pass,$database);
if($connect)
{
$asql="SELECT * from pd1003 where registrationnum='$regn' and dateofbirth='$dob' and counter='1'";
$aresult=mysqli_query($connect,$asql);
 if(mysqli_num_rows($aresult)>0)
 {
   $_SESSION['loggedin']=true;
   $_SESSION['validstudent'] = $regn;
   $_SESSION['coursetitle']='PD1003';
   $_SESSION['scounter']='a';
   $log='studentlogindetailspd1003.txt';
   date_default_timezone_set("Asia/Kolkata");
   $date = new DateTime();
   $date = $date->format("d:m:y h:i:s");
if ($handle = fopen($log,'a'))
   {
    fwrite($handle,"LOGIN : ");
    fwrite($handle,$regn);
    fwrite($handle,"===>");
    fwrite($handle,$date);
    fwrite($handle,"\r\n");
   }
   header("refresh:2;url=qcalcpd1003.php");
   echo'<center><img src="content/images/newloader.gif"></center>';
   echo '<p class="success">Login successful , please wait.<br>';
  }
 else
  {
   $usql="SELECT * from pd1004 where registrationnum='$regn' and dateofbirth='$dob' and counter='1'";
   $uresult=mysqli_query($connect,$usql);
   if(mysqli_num_rows($uresult)>0)
    {
    $_SESSION['loggedin']=true;
    $_SESSION['validstudent'] = $regn;
   $_SESSION['coursetitle']='PD1004';
   $_SESSION['scounter']='b';
   $log='studentlogindetailspd1004.txt';
    date_default_timezone_set("Asia/Kolkata");
    $date = new DateTime();
    $date = $date->format("d:m:y h:i:s");
    if ($handle = fopen($log,'a'))
   {
    fwrite($handle,"LOGIN : ");
    fwrite($handle,$regn);
    fwrite($handle,"===>");
    fwrite($handle,$date);
    fwrite($handle,"\r\n");
   }
    header("refresh:2;url=qcalcpd1004.php");
    echo'<center><img src="content/images/newloader.gif"></center>';
    echo '<p class="success">Login successful , please wait.<br>';
    }
    else
    {
    $msql="SELECT * from pd1005 where registrationnum='$regn' and dateofbirth='$dob' and counter='1'";
    $mresult=mysqli_query($connect,$msql);
     if(mysqli_num_rows($mresult)>0)
     {
     $_SESSION['loggedin']=true;
     $_SESSION['validstudent'] = $regn;
     $_SESSION['coursetitle']='PD1005';
     $_SESSION['scounter']='c';
     $log='studentlogindetailspd1005.txt';
     date_default_timezone_set("Asia/Kolkata");
     $date = new DateTime();
     $date = $date->format("d:m:y h:i:s");
     if ($handle = fopen($log,'a'))
   {
    fwrite($handle,"LOGIN : ");
    fwrite($handle,$regn);
    fwrite($handle,"===>");
    fwrite($handle,$date);
    fwrite($handle,"\r\n");
   }
     header("refresh:2;url=qcalcpd1005.php");
     echo'<center><img src="content/images/newloader.gif"></center>';
     echo '<p class="success">Login successful , please wait.<br>';
     }
     else
     {
     $nsql="SELECT * from pd1006 where registrationnum='$regn' and dateofbirth='$dob' and counter='1'";
     $nresult=mysqli_query($connect,$nsql);
      if(mysqli_num_rows($nresult)>0)
      {
       $_SESSION['loggedin']=true;
     $_SESSION['validstudent'] = $regn;
     $_SESSION['coursetitle']='PD1006';
     $_SESSION['scounter']='d';
     $log='studentlogindetailspd1006.txt';
     date_default_timezone_set("Asia/Kolkata");
     $date = new DateTime();
     $date = $date->format("d:m:y h:i:s");
     if ($handle = fopen($log,'a'))
   {
    fwrite($handle,"LOGIN : ");
    fwrite($handle,$regn);
    fwrite($handle,"===>");
    fwrite($handle,$date);
    fwrite($handle,"\r\n");
   }
     header("refresh:2;url=qcalcpd1006.php");
     echo'<center><img src="content/images/newloader.gif"></center>';
     echo '<p class="success">Login successful , please wait.<br>';
      }
      else
      {
     $_SESSION["invaliduser"] = "Sorry , you are not valid user !";
     header("refresh:2;url=student-login.php");
     echo '<p class="error">Sorry ! You are invalid user at this time';
      }
     }
    }
  }
}
else
{
    die("ERROR CONNECTING TO DATABASE. PLEASE CHECK YOUR INTERNET CONNECTION".mysqli_connect_error());
}
?>
</div>
<div class="lowercontent">
<code>Designed by <a class="lc" href="http://www.facebook.com/divyam.dhadwal">DIVYAM DHADWAL</a><br>Copyright &#169; 2016 Department of Carrier Development Center - SRM University NCR Campus. All Rights Reserved.<br>Best viewed in IE 10.x, Firefox 25.x, Chrome 30.x onwards with a Resolution of 1024 * 768 & above</code>
</div>
</body>
</html>
<?php
ob_end_flush();
?>