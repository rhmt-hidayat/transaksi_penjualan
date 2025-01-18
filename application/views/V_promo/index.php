</div>
<div class="row wrapper border-bottom white-bg page-heading">
	<div class="col-lg-10">
		<h2>Promo Penjualan</h2>
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="index.html">Transaksi</a>
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
					<h5>Promo Penjualan</h5>
					<a data-toggle="modal" data-target="#tambah-data" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Promo</a>
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

<!-- Modal Tambah -->
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="tambah-data" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button aria-hidden="true" data-dismiss="modal" class="close" type="button"></button>
				<h4 style="text-align: center;" class="modal-title">Tambah Data</h4>
			</div>
			<form class="form-horizontal" action="<?php echo base_url('C_promo/insert') ?>" method="post" enctype="multipart/form-data" role="form">
				<div class="modal-body">
					<div class="form-group">
						<label class="col-lg-4 col-sm-2 control-label">Kode Promo</label>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="kode_promo" placeholder="001" value="<?php echo $data; ?>">
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-4 col-sm-2 control-label">Nama Promo</label>
						<select id="nama_promo" name="nama_promo" class="form-control select2bs4" style="width: 100%;" required>
							<option value="">Pilih Barang</option>
							<?php
							foreach ($barang as $row) {
							?>
								<option value="Promo <?php echo $row->nama_barang; ?>">Promo <?php echo $row->nama_barang; ?></option>
							<?php
							}
							?>
						</select>
					</div>
					<div class="form-group">
						<label class="col-lg-4 col-sm-2 control-label">Keterangan</label>
						<div class="col-lg-10">
							<!-- kasih kondisi jika pilih select muncul keterangan jika tidak no keterangan -->
							<textarea type="text" class="form-control" name="keterangan" placeholder="Keterangan" required>setiap pembelian Facial Care sejumlah 2 pcs akan mendapat potongan harga 3000</textarea>
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

<!-- <script>
	$('#tambah-data').on('show.bs.modal', function(e) {
		$('#nama_promo').change(function() {
			var nama_promo = $(this).val();

			$.ajax({
				method: 'POST',
				url: '<?php echo base_url() . 'c_promo/getBarang'; ?>',
				data: {
					nama_promo: nama_promo
				},
				async: true,
				dataType: 'json',
				success: function(data) {
					$('#nama_barang').val(data.nama_barang);
					$('#harga').val(data.harga);
				},
				error: function(xhr, ajaxOptions, thrownError) {
					alert(thrownError);
				}
			});
		});
	});
</script> -->
