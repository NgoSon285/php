<?php 
	class controller_register{
		public function __construct(){
			//----------
			if($_SERVER["REQUEST_METHOD"] == "POST"){
				$hovaten = $_POST["hovaten"];
				$email = $_POST["email"];
				$diachi = $_POST["diachi"];
				$dienthoai = $_POST["dienthoai"];
				$password = $_POST["password"];
				$password = md5($password);
				//insert thong tin vao csdl
				model::execute("insert into tbl_customer(hovaten,email,diachi,dienthoai,password) values('$hovaten','$email','$diachi','$dienthoai','$password')");
				//header("location:index.php?controller=register&act=success");
				echo "<script language='javascript'>location.href='index.php?controller=register&act=success';</script>";
			}
			//----------
			//load view
			include "view/customer/view_register.php";
		}
	}
	new controller_register();
 ?>