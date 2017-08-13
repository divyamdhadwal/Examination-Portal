<?php
ob_start();
$subcode=$_POST["subcode"];
if(($subcode=="PD1003") || ($subcode=="pd1003"))
{
	header('Location:studentspd1003.php');
}
elseif(($subcode=="PD1004") || ($subcode=="pd1004"))
{
	header('Location:studentspd1004.php');
}
elseif(($subcode=="PD1005") || ($subcode=="pd1005"))
{
	header('Location:studentspd1005.php');
}
elseif(($subcode=="PD1006") || ($subcode=="pd1006"))
{
	header('Location:studentspd1006.php');
}
else
{
	header('Location:studentcode.php');
}
ob_end_flush();
?>