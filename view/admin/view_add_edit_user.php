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
										<h2>Thêm/Sửa người dùng</h2>
									</div>
								</div>
							</div>
							<div class="card-body">
								<form method="post" action="<?php echo $form_action; ?>">
									<!-- rows -->
									<div class="row" style="margin-top:5px;">
										<div class="col-md-2">Fullname</div>
										<div class="col-md-10">
											<input type="text" value="<?php echo isset($record->c_fullname) ? $record->c_fullname : ""; ?>" name="c_fullname" class="form-control" required>
										</div>
									</div>
									<!-- end rows -->
									<!-- rows -->
									<div class="row" style="margin-top:5px;">
										<div class="col-md-2">Email</div>
										<div class="col-md-10">
											<input type="email" value="<?php echo isset($record->c_email) ? $record->c_email : ""; ?>" name="c_email" class="form-control" <?php if (isset($record->c_email)) : ?> disabled <?php else : ?> required <?php endif; ?>>
										</div>
									</div>
									<!-- end rows -->
									<!-- rows -->
									<div class="row" style="margin-top:5px;">
										<div class="col-md-2">Password</div>
										<div class="col-md-10">
											<input type="password" name="c_password" class="form-control" <?php if (isset($record->c_email)) : ?> placeholder="Không đổi password thì không nhập thông tin vào ô textbox này" <?php else : ?> required <?php endif; ?>>
										</div>
									</div>
									<!-- end rows -->
									<!-- rows -->
									<div class="row" style="margin-top:5px;">
										<div class="col-md-2"></div>
										<div class="col-md-10">
											<input type="submit" value="Lưu" class="btn btn-primary">
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