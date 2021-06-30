<div class="wrapper">
	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Main content -->
		<section class="content">
			<div class="container-fluid">
				<div class="row justify-content-center ">
					<div class="col-9">
						<div class="card mt-5">
							<div class="card-header p-3">
								<div class="row">
									<div class="col-12">
										<h2>Thêm/Sửa danh mục</h2>
									</div>
								</div>
							</div>
							<div class="card-body">
								<form method="post" action="<?php echo $form_action; ?>">

									<!-- rows -->
									<div class="row" style="margin-top:5px;">
										<div class="col-md-2">Name</div>
										<div class="col-md-10">
											<input type="text" value="<?php echo isset($record->c_name) ? $record->c_name : ''; ?>" name="c_name" class="form-control" required>
										</div>
									</div>
									<!-- end rows -->
									<!-- rows -->
									<div class="row" style="margin-top:5px;">
										<div class="col-md-11"></div>
										<div class="col-md-1">
											<input type="submit" value="Lưu" class="btn btn-primary btn-block ">
										</div>
									</div>
									<!-- end rows -->
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
</div>