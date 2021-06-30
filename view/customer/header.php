<!-- header -->
<header id="header">
	<!-- top header -->
	<div class="top-header" style="background-color: #16a5e9">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6"></div>
				<div class="col-xs-12 col-sm-6 col-md-6 customer">
					<?php
					//kiem tra, neu user da dang nhap thi hien thi thong tin user
					if (isset($_SESSION["customer_email"])) {
					?>
						Xin chào <?php echo $_SESSION["customer_email"]; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php?controller=login&act=logout">Logout</a>
					<?php } else { ?>
						<a href="index.php?controller=login"><i class="fa fa-user"></i> Đăng nhập</a> <a href="index.php?controller=register"><i class="fa fa-user-plus"></i> Đăng ký</a>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
	<!-- end top header -->
	<!-- middle header -->
	<div class="mid-header">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-3 logo "> <a href="index.php"> <img src="https://demaitinh.vn/wp-content/uploads/2020/01/Vi%E1%BB%87t-Travel.png" style="width: 200px" alt="" title="" class="img-responsive"> </a> </div>
				<div class="col-xs-12 col-sm-12 col-md-6 header-search">
				<script type="text/javascript">
						function search() {
							key = document.getElementById("key").value;
							location.href = "index.php?controller=search&key=" + key;
							return false;
						}
					</script>
					<form method="post" action="">
						<input type="text" value="" placeholder="Nhập tour bạn cần tìm..." id="key" class="input-control">
						<button type="submit"> <i class="fa fa-search" onclick="return search();"></i> </button>
					</form>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-3 mini-cart">
					<div class="wrapper-mini-cart"> 
						<span class="icon" style="background-color: #16a5e9"><i class="fa fa-shopping-cart"></i></span> 
						<a href="index.php?controller=cart"> <span class="mini-cart-count"> </span> Tour bạn đã thêm <i class="fa fa-caret-down"></i></a>
					</div>
				</div>
			</div>
		</div>
		<!-- end middle header -->
		<!-- bottom header -->
		<div class="bottom-header" style="background-color: #16a5e9">
			<div class="container">
				<div class="clearfix">
					<ul class="main-nav hidden-xs hidden-sm list-unstyled">
						<li class="active"><a href="index.php">Trang chủ</a></li>
						<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Danh mục </a>
							<ul class="dropdown-menu">
								<?php
								//lay tat ca ban ghi trong tbl_category_product
								$category = model::list_all("select * from tbl_category_product order by pk_category_product_id desc");
								foreach ($category as $rows) :
								?>
									<li><a href="index.php?controller=product_category&id=<?php echo $rows->pk_category_product_id; ?>"><?php echo $rows->c_name; ?></a></li>
								<?php endforeach; ?>
							</ul>
						</li>
						<li><a href="index.php?controller=lienhe">Liên hệ</a></li>
					</ul>
					<a href="javascript:void(0);" class="toggle-main-menu hidden-md hidden-lg"> <i class="fa fa-bars"></i> </a>
					<ul class="list-unstyled mobile-main-menu hidden-md hidden-lg" style="display:none">
						<li class="active"><a href="index.php">Trang chủ</a></li>
						<li><a href="index.php?controller=lienhe">Liên hệ</a></li>
					</ul>
				</div>
			</div>
		</div>
		<!-- end bottom header -->
</header>
<!-- end header -->