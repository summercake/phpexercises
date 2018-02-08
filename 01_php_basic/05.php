<?php
/**
 * Created by PhpStorm.
 * User: jack
 * Date: 2/7/2018
 * Time: 10:44 PM
 */
if (!empty($_SERVER['HTTP_CLIENT_IP'])){
    $ip = $_SERVER['HTTP_CLIENT_IP'];
}elseif (!empty($_SERVER['HTTP_X_FORWARD_FOR'])){
    $ip = $_SERVER['HTTP_X_FORWARD_FOR'];
}else{
    $ip = $_SERVER['REMOTE_ADDR'];
}
echo "$ip";