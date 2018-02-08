<?php
/**
 * Created by PhpStorm.
 * User: jack
 * Date: 2/7/2018
 * Time: 11:22 PM
 */
$text = 'PHP Tutorial';
$text = preg_replace('/(\b[a-z])/i','<span style="color:red;">\1</span>',$text);
echo $text;