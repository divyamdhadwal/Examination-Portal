<?php

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
        $sql="SELECT DISTINCT testname,testtime from testdetails";
        $broadcasts=mysqli_query($connect, $sql);
        if(mysqli_num_rows($broadcasts)>0)
        {

            while($row=mysqli_fetch_assoc($broadcasts))
            {
            echo $row['testname'].$row['testtime'];
            }
         }
       }
    
?>