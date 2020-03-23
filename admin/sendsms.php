<?php

/**
 * @author Kingster
 * @author SuyashBansal
 * @category SMS
 * @copyright 2015
 * @description Request this page with get or post params
 * @param uid = Way2SMS Username
 * @param pwd = Way2SMS Password
 * @param phone = Number to send to. Multiple Numbers separated by comma (,). 
 * @param msg = Your Message ( Upto 140 Chars)
 */

include('way2sms-api.php');

if (isset($_REQUEST['phone']) && isset($_REQUEST['msg'])) {
		$user="9512562951";
		$pass="nim@123";
    $res = sendWay2SMS($user, $pass, $_REQUEST['phone'], $_REQUEST['msg']);
    if (is_array($res))
        echo "Messase has Been Send Successfully";
    else
        echo "Sorry , Try Again....";
    exit;
}
