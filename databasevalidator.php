<?php
$subcode=$_POST["subcode"];
if(($subcode=="PD1003") || ($subcode=="pd1003"))
{
	header('Location:testcreatorpd1003.php');
}
elseif(($subcode=="PD1004") || ($subcode=="pd1004"))
{
	header('Location:testcreatorpd1004.php');
}
elseif(($subcode=="PD1005") || ($subcode=="pd1005"))
{
	header('Location:testcreatorpd1005.php');
}
elseif(($subcode=="PD1006") || ($subcode=="pd1006"))
{
	header('Location:testcreatorpd1006.php');
}
else
{
	header('Location:testcode.php');
}
?>