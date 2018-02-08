<?php
/**
 * Created by PhpStorm.
 * User: jack
 * Date: 2/7/2018
 * Time: 11:28 PM
 */
if (!empty($_SERVER['HTTPS']))
{
    echo 'https is enabled';
}
else
{
    echo 'http is enabled'."\n";
}