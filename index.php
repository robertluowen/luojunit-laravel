<?php
/**************************************************************
 * File Name   : index.php
 * Author      : robert
 * Create Time : 2023-11-22 2:18
 * DESC        :
 ***************************************************************/

require_once __DIR__ . '/vendor/autoload.php';

//use Robertluowen\LuojunitLaravel\Test;
use Robertluowen\LuojunitLaravel\Http\Controller\LuojunitController;
$tt = new LuojunitController();
$tt->index();