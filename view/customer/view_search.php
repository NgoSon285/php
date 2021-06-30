<div class="special-collection">
	<div class="tabs-container">
		<div class="clearfix">
			<h2 style="font-weight: bold; color:red;">Tên danh mục</h2>
		</div>
	</div>
	<div class="tabs-content row">
		<div id="content-tabb1" class="content-tab content-tab-proindex">
			<div class="clearfix">

				<?php foreach ($data as $rows) : ?>
					<!-- box product -->
					<div class="col-xs-6 col-md-3 col-sm-6 ">
						<div class="product-grid" id="product-1168979">
							<div class="image"> <a href="index.php?controller=product_detail&id=<?php echo $rows->pk_product_id; ?>"><img src="public/upload/product/<?php echo $rows->c_img; ?>" title="<?php echo $rows->c_name; ?>" alt="<?php echo $rows->c_name; ?>" class="img-responsive"></a> </div>
							<div class="info">
								<h3 class="name"><a href="index.php?controller=product_detail&id=<?php echo $rows->pk_product_id; ?>"><?php echo $rows->c_name; ?></a></h3>
								<p class="price-box"> <span class="special-price"> <span class="price product-price"> <?php echo number_format($rows->c_price); ?> </span> </span> </p>
								<div class="action-btn">
									<form action="cart/add" method="post" enctype="multipart/form-data" id="product-actions-1168979">
										<a href="index.php?controller=cart&act=add&id=<?php echo $rows->pk_product_id; ?>" class="button">Cho vào giỏ hàng</a>
									</form>
								</div>
							</div>
						</div>
					</div>
					<!-- end box product -->
				<?php endforeach; ?>

				<!-- paging -->
				<div style="clear: both;"></div>
				<ul class="pagination pull-right" style="margin-top: 0px !important; padding-right: 15px;">
					<li><a href="#">Trang</a></li>
					<?php for ($i = 1; $i <= $num_page; $i++) : ?>
						<li><a href="index.php?controller=search&id=<?php echo $key; ?>&p=<<?php echo $i; ?>"><?php echo $i; ?></a></li>
					<?php endfor; ?>
				</ul>
				<!-- end paging -->
			</div>
		</div>
	</div>
</div>