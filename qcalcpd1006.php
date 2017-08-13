<?php
session_start();
ob_start();
?>

<?php
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true && $_SESSION['coursetitle']=='PD1006' && $_SESSION['scounter']=='a')
{
$count=0;
    $servername="localhost";
    $username="techzon2";
    $password="RwIKlQ#nQ";
    $database="techzon2_onlinetest";
    $connect=mysqli_connect($servername,$username,$password,$database);
    if(!$connect)
    {
        die('There has been some error. If error persists , please contact the administrator'.mysqli_connect_error());
    }
    else
    {
        $sql="SELECT * from pd1006";
        $broadcasts=mysqli_query($connect, $sql);
        if(mysqli_num_rows($broadcasts) > 0)
        {
            while($row=mysqli_fetch_assoc($broadcasts))
            {
                $count++;
            }
            $_SESSION['totalquestions']=$count;
            header('Location: testdetailcalcpd1006.php');
        }
        else
        {
        	$mcount=0;
            $_SESSION['totalquestions']=$mcount;
            header('Location: testdetailcalcpd1006.php');
        }
    }
}
else
{
	header('Location: student-login.php');
}
ob_end_flush();
?>