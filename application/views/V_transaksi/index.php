</div>
<div class="row wrapper border-bottom white-bg page-heading">
	<div class="col-lg-10">
		<h2>Data Penjualan</h2>
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="index.html">Transaksi</a>
			</li>
			<li class="breadcrumb-item active">
				<strong>Penjualan</strong>
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
					<h5>Data Penjualan</h5>
					<a href="<?php echo base_url() . 'c_transaksi/cart'; ?>" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Transaksi</a>
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
									<th>Nama Barang</th>
									<th>Kode Promo</th>
									<th>Keterangan</th>
									<th>Harga</th>
									<th>Jumlah</th>
									<th>Total</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$no = 1;
								foreach ($DataTransaksi as $row) {
								?>
									<tr class="gradeX">
										<td><?php echo $no++; ?></td>
										<td><?php echo $row->nama_barang; ?></td>
										<td><?php echo $row->kode_promo; ?></td>
										<td class="center"><?php echo $row->keterangan; ?></td>
										<td><?php echo $row->harga; ?></td>
										<td><?php echo $row->jumlah; ?></td>
										<td><?php echo $row->total; ?></td>
										<td class="center">
											<div class="btn-group">
												<a target="_blank" href="<?= base_url(); ?>c_transaksi/cetak_invoice/<?= $row->id; ?>" style="font-size:10px;" class="btn btn-primary" onclick=""><i class="fa fa-print" data-toggle="tooltip" title="Print" aria-hidden="true"></i> Cetak Invoice</a>
												<a href="<?= base_url(); ?>c_transaksi/print_pdf/<?= $row->id; ?>" style="font-size:10px;" class="btn btn-warning" onclick=""><i class="fa fa-download" data-toggle="tooltip" title="Download" aria-hidden="true"></i> Download PDF</a>
											</div>
										</td>
									</tr>
								<!-- <?php
								}
								?> -->
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
