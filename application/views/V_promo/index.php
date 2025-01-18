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
												<a target="_blank" href="<?= base_url(); ?>c_promo/cetak_invoice/<?= $row->id; ?>" style="font-size:10px;" class="btn btn-primary" onclick=""><i class="fa fa-print" data-toggle="tooltip" title="Print" aria-hidden="true"></i> Cetak Invoice</a>
												<a href="<?= base_url(); ?>c_promo/print_pdf/<?= $row->id; ?>" style="font-size:10px;" class="btn btn-warning" onclick=""><i class="fa fa-download" data-toggle="tooltip" title="Download" aria-hidden="true"></i> Download PDF</a>
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



<script>
	$('#tambah-data').on('show.bs.modal', function(e) {
		$('#nama_promo').change(function() {
			var nama_promo = $(this).val();
			// console.log(nama_promo);

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
</script>
