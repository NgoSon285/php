<div class="wrapper">
	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Main content -->
		<section class="content">
			<div class="container-fluid">
				<div class="row justify-content-center ">
					<div class="col-10">
						<div class="card mt-5">
							<div class="card-header p-3">
								<div class="row">
									<div class="col-12">
										<h2>Thêm/Sửa tour</h2>
									</div>
								</div>
							</div>
							<div class="card-body">
								<!-- muon upload anh thi trong thr form phai co thuoc tinh:enctype="multi/form-data" -->
								<form method="post" action="<?php echo $form_action; ?>" enctype="multipart/form-data">
									<input type="hidden" name="_token" value="{{ csrf_token() }}">
									<!-- row -->
									<div class="row mt-2">
										<label class="col-md-1">Tiêu đề</label>
										<div class="col-md-11">
											<input type="text" name="c_name" class="form-control" value="<?php echo isset($record->c_name) ? $record->c_name : ""; ?>">
										</div>
									</div>
									<!-- end row -->
									<!-- row -->
									<div class="row mt-2">
										<label class="col-md-1">Ngày khởi hành</label>
										<div class="col-md-5">
											<input type="date" name="ngay_khoi_hanh" class="form-control" value="<?php echo isset($record->ngay_khoi_hanh) ? $record->ngay_khoi_hanh : date("Y-m-d"); ?>">
										</div>
									</div>
									<!-- end row -->
									<!-- row -->
									<div class="row mt-2">
										<label class="col-md-1">Ngày về</label>
										<div class="col-md-5">
											<input type="date" name="ngay_ve" class="form-control" value="<?php echo isset($record->ngay_ve) ? $record->ngay_ve :  date("Y-m-d"); ?>">
										</div>
									</div>
									<!-- end row -->
									<!-- row -->
									<div class="row mt-2">
										<label class="col-md-1">Giá</label>
										<div class="col-md-5">
											<input type="number" name="c_price" class="form-control" value="<?php echo isset($record->c_price) ? $record->c_price : 0; ?>">
										</div>
									</div>
									<!-- end row -->
									<!-- row -->
									<div class="row mt-2">
										<label class="col-md-1">Thuộc danh mục</label>
										<div class="col-md-11">
											<select name="fk_category_product_id">
												<?php
												$category = model::list_all("select * from tbl_category_product where parent_id=0");
												foreach ($category as $rows) :
												?>
													<option <?php if (isset($record->fk_category_product_id) && $record->fk_category_product_id == $rows->pk_category_product_id) : ?> selected <?php endif; ?> value="<?php echo $rows->pk_category_product_id; ?>"><?php echo $rows->c_name; ?></option>
													<!-- cap con  -->
													<?php
													$category_child = model::list_all("select * from tbl_category_product where parent_id=$rows->pk_category_product_id");
													foreach ($category_child as $rows_child) :
													?>
														<option <?php if (isset($record->fk_category_product_id) && $record->fk_category_product_id == $rows_child->pk_category_product_id) : ?> selected <?php endif; ?> value="<?php echo $rows_child->pk_category_product_id; ?>">-----<?php echo $rows_child->c_name; ?></option>
														<!-- cap con  -->

													<?php endforeach; ?>
												<?php endforeach; ?>
											</select>
										</div>
									</div>
									<!-- end row -->
									<!-- row -->
									<div class="row mt-2">
										<label class="col-md-1">Giới thiệu</label>
										<div class="col-md-11">
											<textarea name="c_description" class="form-control" style="height:250px;">
					<?php echo isset($record->c_description) ? $record->c_description : ""; ?>						
					</textarea>
											<script type="text/javascript">
												CKEDITOR.replace("c_description");
											</script>
										</div>
									</div>
									<!-- end row -->
									<!-- row -->
									<div class="row mt-2">
										<label class="col-md-1">Chi tiết</label>
										<div class="col-md-11">
											<textarea name="c_content" class="form-control" style="height:300px;">
						<?php echo isset($record->c_content) ? $record->c_content : ""; ?>	
					</textarea>
											<script type="text/javascript">
												CKEDITOR.replace("c_content");
											</script>
										</div>
									</div>
									<!-- end row -->
									<!-- row -->
									<div class="row mt-2">
										<div class="col-md-1"></div>
										<div class="col-md-11">
											<input type="checkbox" <?php if (isset($record->c_hotproduct) && $record->c_hotproduct == 1) : ?> checked <?php endif; ?> name="c_hotproduct" id="c_hotproduct"> <label for="c_hotproduct">Tin nổi bật</label>
										</div>
									</div>
									<!-- end row -->
									<!-- row -->
									<div class="row mt-2">
										<label class="col-md-1">Ảnh</label>
										<div class="col-md-11">
											<input type="file" name="c_img">
										</div>
									</div>
									<!-- end row -->
									<!-- row -->
									<div class="row mt-2">
										<div class="col-md-1"></div>
										<div class="col-md-11">
											<input type="submit" class="btn btn-primary" value="Lưu lại">
										</div>
									</div>
									<!-- end row -->
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
</div>