</div>
<div class="row wrapper border-bottom white-bg page-heading">
	<div class="col-lg-10">
		<h2>Master Barang</h2>
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="index.html">Transaksi</a>
			</li>
			<li class="breadcrumb-item active">
				<strong>Master Barang</strong>
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
					<h5>Master Barang</h5>
					<a data-toggle="modal" data-target="#tambah-data" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah</a>
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
									<th>Kode Barang</th>
									<th>Nama Barang</th>
									<th>Harga</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$no = 1;
								foreach ($data as $row) {
								?>
									<tr class="gradeX">
										<td><?php echo $no++; ?></td>
										<td><?php echo $row->kode_barang; ?></td>
										<td><?php echo $row->nama_barang; ?></td>
										<td class="center"><?php echo "Rp " . number_format($row->harga, 2, ",", "."); ?></td>
										<td class="center">
											<div class="btn-group">
												<a href="<?php echo base_url() . 'c_master_barang/edit/' . $row->id; ?>" class="btn btn-xs btn-success" title="Edit"><i class="fa fa-edit"></i> Edit</a>
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
	$this->load->view('V_master_barang/modal');
?>

<!-- Modal Tambah -->
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="tambah-data" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button aria-hidden="true" data-dismiss="modal" class="close" type="button"></button>
				<h4 style="text-align: center;" class="modal-title">Tambah Data</h4>
			</div>
			<form class="form-horizontal" action="<?php echo base_url('C_master_barang/insert') ?>" method="post" enctype="multipart/form-data" role="form">
				<div class="modal-body">
					<div class="form-group">
						<label class="col-lg-4 col-sm-2 control-label">Kode Barang</label>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="kode_barang" placeholder="001">
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-4 col-sm-2 control-label">Nama Barang</label>
						<div class="col-lg-10">
							<textarea class="form-control" name="nama_barang" placeholder="Nama barang"></textarea>
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-4 col-sm-2 control-label">Harga</label>
						<div class="col-lg-10">
							<input type="number" class="form-control" name="harga" placeholder="10000">
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button class="btn btn-info" type="submit"> Simpan&nbsp;</button>
					<button type="button" class="btn btn-warning" data-dismiss="modal"> Batal</button>
				</div>
			</form>
		</div>
	</div>
</div>
</div>
<!-- END Modal Tambah -->
