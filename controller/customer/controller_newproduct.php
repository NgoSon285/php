<?php 
	class controller_newproduct{
		public function __construct(){
			//lay 6 san pham moi nhat
			$newproduct = model::list_all("select * from tbl_product order by pk_product_id desc limit 6");
			//load view
			include "view/customer/view_newproduct.php";
		}
	}
	new controller_newproduct();
 ?>