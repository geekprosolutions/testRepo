<?php
include "getpost-lib.php";
$mobileNumber=9459243930;
$message="Dear Customer! Thank You for Your Visit at Cafesoul Desires. Please Visit Again.";
$senderId="BSHSMS";
$routeId="1";
$serverUrl="167.114.117.218";
$authKey="77ea6fd6736af65751c93a9283bedb5";
echo sendsmsPOST($mobileNumber,$senderId,$routeId,$message,$serverUrl,$authKey);


?>