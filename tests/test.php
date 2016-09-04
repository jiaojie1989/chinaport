<?php

/* 
 * Copyright (C) 2016 SINA Corporation
 *  
 *  
 * 
 * This script is firstly created at 2016-09-04.
 * 
 * To see more infomation,
 *    visit our official website http://jiaoyi.sina.com.cn/.
 */

require "../vendor/autoload.php";

use Symfony\Component\VarDumper\VarDumper;

$obj = new \Chinaport_Demo();
VarDumper::dump($obj);