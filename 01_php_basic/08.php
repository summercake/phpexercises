<?php
/**
 * Created by PhpStorm.
 * User: jack
 * Date: 2/7/2018
 * Time: 10:55 PM
 */
$url = 'https://www.w3resource.com/php-exercises/php-basic-exercises.php';
$url = parse_url($url);
echo 'Scheme : '.$url['scheme']."<br>";
echo 'Host : '.$url['host']."<br>";
echo 'Path : '.$url['path']."<br>";

