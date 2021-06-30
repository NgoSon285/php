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
										<h2>Quản lý đơn hàng</h2>
									</div>
								</div>
							</div>
							<!-- /.card-header -->
							<div class="card-body table-responsive p-0">
								<div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
									<div class="row">
										<div class="col-sm-12 col-md-6">
											<div class="dt-buttons btn-group flex-wrap"> <button class="btn btn-secondary buttons-copy buttons-html5" tabindex="0" aria-controls="example1" type="button"><span>Copy</span></button> <button class="btn btn-secondary buttons-csv buttons-html5" tabindex="0" aria-controls="example1" type="button"><span>CSV</span></button> <button class="btn btn-secondary buttons-excel buttons-html5" tabindex="0" aria-controls="example1" type="button"><span>Excel</span></button> <button class="btn btn-secondary buttons-pdf buttons-html5" tabindex="0" aria-controls="example1" type="button"><span>PDF</span></button> <button class="btn btn-secondary buttons-print" tabindex="0" aria-controls="example1" type="button"><span>Print</span></button>
												<div class="btn-group"><button class="btn btn-secondary buttons-collection dropdown-toggle buttons-colvis" tabindex="0" aria-controls="example1" type="button" aria-haspopup="true" aria-expanded="false"><span>Column visibility</span></button></div>
											</div>
										</div>
										<div class="col-sm-12 col-md-6">
											<div id="example1_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example1"></label></div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info">
												<thead>
													<tr role="row">
														<th>Tên khách hàng</th>
														<th>Ngày mua</th>
														<th>Đơn giá</th>
														<th>Trạng thái</th>
														<th></th>
													</tr>
												</thead>
												<tbody>
													<?php
													foreach ($arr as $rows) {
													?>
														<tr>
															<td><?php echo $rows->hovaten; ?></td>
															<td style="text-align: center;">
																<?php
																$date = date_create($rows->ngaymua);
																echo date_format($date, "d/m/Y");
																?></td>
															<td style="text-align: center;"><?php echo $rows->gia; ?></td>
															<td style="text-align: center;">
																<?php echo $rows->trangthai == 1 ? "<span class='text-success'>Đã duyệt</span>" : "<span class = 'text-danger'>Chưa duyệt</span>" ?>
															</td>
															<td style="text-align: center;">
																<a href="admin.php?controller=order_detail&order_id=<?php echo $rows->order_id; ?>" class="btn  btn-primary">Chi tiết</a>
																&nbsp;&nbsp;
																<a class="btn  btn-danger" onclick=" return window.confirm('Bạn có muốn xoá?');" href="admin.php?controller=order&act=delete&id=<?php echo $rows->order_id; ?>">Delete</a>

															</td>
														</tr>
													<?php } ?>
												</tbody>

											</table>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12 col-md-5">
										</div>
										<div class="col-sm-12 col-md-7">
											<div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
												<ul class="pagination">
													<li class="paginate_button page-item previous disabled" id="example1_previous"><a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
													<li>
														<ul class="pagination">
															<?php for ($i = 1; $i <= $num_page; $i++) : ?>
																<li class="paginate_button page-item "><a class="page-link" href="admin.php?controller=order&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
															<?php endfor; ?>
														</ul>
													</li>
													<li class="paginate_button page-item next" id="example1_next"><a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /.card-body -->
						</div>
						<!-- /.card -->
					</div>
				</div>
			</div><!-- /.container-fluid -->
		</section>
		<!-- /.content -->
	</div>
	<!-- /.content-wrapper -->

</div>
<script>
	$(function() {
		$("#example1").DataTable({
			"responsive": true,
			"lengthChange": false,
			"autoWidth": false,
			"buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
		}).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
	});
</script>