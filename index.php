<?php
//start session
session_start();
//load file config.php
include "config.php";
//load file model.php
include "model/model.php";
//-----
//---
//lay bien controller truyen tu url
$controller = isset($_GET["controller"]) ? $_GET["controller"] : "";
//noi chuoi vao bien controller de ra duong dan thuc cua file controller can load
$controller = "controller/customer/controller_$controller.php";
//---
//kiem tra neu ton tai duong dan file cua $controller thi load content.php, neu khong thi load layout.php
//load file template
//echo $controller;
if (file_exists($controller))
	include "view/customer/view_content.php";
else
	include "view/customer/view_home.php";
