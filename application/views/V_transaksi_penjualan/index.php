</div>
<div class="row wrapper border-bottom white-bg page-heading">
	<div class="col-lg-10">
		<h2>Data Penjualan</h2>
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="index.html">Home</a>
			</li>
			<li class="breadcrumb-item active">
				<strong>Data CRUD</strong>
			</li>
		</ol>
	</div>
	<div class="col-lg-2">

	</div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
	<div class="row">
		<div class="col-lg-12">
			<div class="ibox ">
				<div class="ibox-title">
					<h5>Data Penjualan</h5>
					<a href="<?php echo base_url('Crud/add'); ?>" class="btn btn-primary dim" title="Add New"><i class="fa fa-plus"></i> Add</a>
					<div class="ibox-tools">
						<a class="collapse-link">
							<i class="fa fa-chevron-up"></i>
						</a>
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">
							<i class="fa fa-wrench"></i>
						</a>
						<ul class="dropdown-menu dropdown-user">
							<li><a href="#" class="dropdown-item">Config option 1</a>
							</li>
							<li><a href="#" class="dropdown-item">Config option 2</a>
							</li>
						</ul>
						<a class="close-link">
							<i class="fa fa-times"></i>
						</a>
					</div>
				</div>
				<div class="ibox-content">

					<div class="table-responsive">
						<table class="table table-striped table-bordered table-hover dataTables-example">
							<thead>
								<tr>
									<th>Nama Produk</th>
									<th>Kategori</th>
									<th>Varian</th>
									<th>Harga</th>
									<th>Jumlah</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<tr class="gradeX">
									<td>Kaos Kaki</td>
									<td>Fashion</td>
									<td>Warna Hitam</td>
									<td class="center">20000</td>
									<td class="center">100</td>
									<td class="center">
										<div class="btn-group">
											<a href="#" class="btn btn-xs btn-success" title="Edit"><i class="fa fa-edit"></i> Edit</a>
											<a href="#" class="btn btn-xs btn-danger" title="Delete"><i class="fa fa-trash"></i> Delete</a>
										</div>
									</td>
								</tr>
							</tbody>
							<!-- <tfoot>
								<tr>
									<th>Rendering engine</th>
									<th>Browser</th>
									<th>Platform(s)</th>
									<th>Engine version</th>
									<th>CSS grade</th>
								</tr>
							</tfoot> -->
						</table>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>
