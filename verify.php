<?php
$access_token = 'Wx5vGbch7d1Ia2Rmc6evm8W9KhvrgapaDITG7VJJpCQLjEwre6vDAlTa4HbhPJo0YaD8/69iZ4ufSUbRLG+fuG2Sbhd8oLcz0XpsncdWts9ODHqTGt6Ejcjx1PrvrtmAPLl1d+r+5ha5LuZIfPYvCAdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
?>