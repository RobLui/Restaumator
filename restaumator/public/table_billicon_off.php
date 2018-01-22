<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://www.restaumator.com/setbilliconfortable/1/restaurant/1/hash/hLWriokZEZpnX3iXVlzOwJxaM3a3SsqE/action/0");
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$output = curl_exec($ch);
curl_close($ch);
?>