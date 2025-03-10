</div>
<div class="row wrapper border-bottom white-bg page-heading">
	<div class="col-lg-10">
		<h2>Promo</h2>
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="index.html">Master Data</a>
			</li>
			<li class="breadcrumb-item active">
				<strong>Promo</strong>
			</li>
		</ol>
	</div>
	<div class="col-lg-2">

	</div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
	<div class="row">
		<?php
		$this->load->view('Include/error');
		?>
		<div class="col-lg-12">
			<div class="ibox ">
				<div class="ibox-title">
					<h5>Promo</h5>
					<button type="button" data-toggle="modal" data-target="#tambahData" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Promo</button>
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
									<th>No.</th>
									<th>Kode Promo</th>
									<th>Nama Promo</th>
									<th>Keterangan</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$no = 1;
								foreach ($promo as $row) {
								?>
									<tr class="gradeX">
										<td><?php echo $no++; ?></td>
										<td><?php echo $row->kode_promo; ?></td>
										<td><?php echo $row->nama_promo; ?></td>
										<td class="center"><?php echo $row->keterangan; ?></td>
										<td class="center">
											<div class="btn-group">
												<a href="<?php echo base_url() . 'c_promo/edit/' . $row->id; ?>" class="btn btn-xs btn-success" title="Edit"><i class="fa fa-edit"></i> Edit</a>
												<a href="#" data-toggle="modal" data-target="#hapusData<?php echo $row->id; ?>" data-id="" class="btn btn-xs btn-danger" title="Delete"><i class="fa fa-trash"></i> Delete</a>
											</div>
										</td>
									</tr>
								<?php
								}
								?>
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
<?php
$this->load->view('V_promo/modal');
?>
