<?php
class controller_logout
{
	public function __construct()
	{
		//huy session
		unset($_SESSION["c_email"]);
		// session_destroy();
		//quay tro lai trang admin
		echo "<script language='javascript'>location.href='admin.php';</script>";
	}
}
new controller_logout();
