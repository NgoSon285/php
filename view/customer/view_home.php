	<!doctype html>
	<html lang="vi">

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta http-equiv="content-language" content="vi" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<title>Việt Travel</title>
		<link rel="canonical" href="index.html">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
		<link href='public/customer/assets/bootstrap.min221b.css' rel='stylesheet' />
		<link href='public/customer/assets/styles.css' rel='stylesheet' />
	</head>

	<body class="index">
		<?php include "view/customer/header.php"; ?>
		<div class="content">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-md-12">
						<?php include "controller/customer/controller_hotproduct.php"; ?>
						<?php include "controller/customer/controller_newproduct.php"; ?>
					</div>
				</div>
			</div>
		</div>
		<footer id="footer">
			<div class="top-footer">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-3">
							<h3>Về chúng tôi</h3>
							<ul class="list-unstyled">
								<li><a href="index.php">Trang chủ</a></li>
								<li><a href="#">Giới thiệu</a></li>
								<li><a href="#">Tin tức</a></li>
								<li><a href="index.php?controller=lienhe">Liên hệ</a></li>
							</ul>
						</div>
						<div class="col-xs-12 col-sm-3">
							<h3>Tour châu Á</h3>
							<ul class="list-unstyled">
								<li><a href="#">Hàn Quốc</a></li>
								<li><a href="#">Nhật Bản</a></li>
								<li><a href="#">Trung Quốc</a></li>
								<li><a href="#">Thái Lan</a></li>
							</ul>
						</div>
						<div class="col-xs-12 col-sm-3">
							<h3>Tour châu Âu</h3>
							<ul class="list-unstyled">
								<li><a href="#">Pháp</a></li>
								<li><a href="#">Đức</a></li>
								<li><a href="#">Ý</a></li>
								<li><a href="#">Nga</a></li>
							</ul>
						</div>
						<div class="col-xs-12 col-sm-3">
							<h3>Điều khoản</h3>
							<ul class="list-unstyled">
								<li><a href="#">Điều khoản sử dụng</a></li>
								<li><a href="#">Điều khoản giao dịch</a></li>
								<li><a href="#">Dịch vụ tiện ích</a></li>
								<li><a href="#">Quyền sở hữu trí tuệ</a></li>
							</ul>
						</div>
					</div>
					<div class="payments-method"> <img src="public/customer/assets/payments-method221b.png" alt="Phương thức thanh toán" title="Phương thức thanh toán"> </div>
				</div>
			</div>
		</footer>
		<script src='public/customer/assets/jquery.min221b.js' type='text/javascript'></script>
		<script src='public/customer/assets/responsive-menu221b.js' type='text/javascript'></script>
		<script src='public/customer/assets/elevate-zoom221b.js' type='text/javascript'></script>
	</body>

	</html>