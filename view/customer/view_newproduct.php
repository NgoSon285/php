<div class="special-collection">
	<div class="tabs-container">
		<div class="clearfix">
			<h2>Tour mới cập nhật</h2>
		</div>
	</div>
	<div class=" row  justify-content-center align-items-center">
		<?php foreach ($newproduct as $rows) : ?>
			<!-- box product -->
			<div class="col-12 col-sm-6 col-md-4  ">
				<div class="card m-3 ">
					<div class="image"> <a href="index.php?controller=product_detail&id=<?php echo $rows->pk_product_id; ?>"><img src="public/upload/product/<?php echo $rows->c_img; ?>" title="<?php echo $rows->c_name; ?>" alt="<?php echo $rows->c_name; ?>" class="card-img-top img-responsive"></a> </div>
					<div class="card-body p-5">
						<h3 class="name card-title"><a href="index.php?controller=product_detail&id=<?php echo $rows->pk_product_id; ?>"><?php echo $rows->c_name; ?></a></h3>
						<p class="card-text" style="font-size:14px"> <i class="far fa-calendar-alt"></i> Ngày khởi hành: <?php echo $rows->ngay_khoi_hanh ?></p>
						<p class="card-text" style="font-size:14px"><i class="far fa-calendar-alt"></i> Ngày về: <?php echo $rows->ngay_ve ?></p>
						<p class="price-box"> <span class="special-price"> <span class="price product-price" style="font-size:14px"> <i class="fas fa-tags"></i> <?php echo number_format($rows->c_price); ?> VNĐ </span> </span> </p>
						<form action="cart/add" method="post" enctype="multipart/form-data" id="product-actions-1168979">
							<a href="index.php?controller=cart&act=add&id=<?php echo $rows->pk_product_id; ?>" class="btn button">Đặt ngay</a>
						</form>
					</div>
				</div>
			</div>

			<!-- end box product -->
		<?php endforeach; ?>
		</>
	</div>
</div>