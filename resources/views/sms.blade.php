<?php
$con=mysqli_connect("localhost","root","","civil");

/*if(@$_GET['catid']=='1')
{ 
*/
date_default_timezone_set('Asia/Dhaka');
$ctime = date('h:i:s', time());

$cdate=date("yy-m-d");

$q="UPDATE `applicant` SET `status`='No' WHERE `id`='".@$_POST['app']."'";

$squery = "INSERT INTO declineapp (`apid`,`message`,`ctime`,`cdate`) Values ('".@$_POST['app']."','".@$_POST['decdetails']."',
'".@$_POST['ctime']."','".@$_POST['cdate']."')";

var_dump($squery);
exit();

$Query= mysqli_query($con, $squery) or die(mysqli_error($con));



//}

?>