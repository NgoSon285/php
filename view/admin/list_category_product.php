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
										<h2>Danh sách danh mục</h2>
										<a href="admin.php?controller=category_product&action=add" class="btn btn-primary  float-right">
											Thêm danh mục
										</a>
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
														<th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending">Tên danh mục</th>

														<th></th>
													</tr>
												</thead>
												<tbody>
													<?php foreach ($data as $rows) : ?>

														<tr>
															<td><?php echo $rows->c_name; ?></td>
															<td class="text-center">
																<a href="admin.php?controller=category_product&action=edit&id=<?php echo $rows->pk_category_product_id; ?>" class="btn btn-warning">Edit</a>&nbsp;
																<a href="admin.php?controller=category_product&action=delete&id=<?php echo $rows->pk_category_product_id; ?>" class="btn btn-danger" onclick="return window.confirm('bạn có chắc muốn xoá?');">Delete</a>
															</td>
														</tr>

													<?php endforeach; ?>
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
																<li class="paginate_button page-item "><a class="page-link" href="admin.php?controller=category_product&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
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