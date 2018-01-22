<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://www.restaumator.com/setdrinkiconfortable/1/restaurant/1/hash/hLWriokZEZpnX3iXVlzOwJxaM3a3SsqE/action/1");
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$output = curl_exec($ch);
curl_close($ch);
?>