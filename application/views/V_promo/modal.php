<!-- Modal Tambah -->
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="tambahData" class="modal fade">
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
							<input type="text" class="form-control" name="kode_promo" placeholder="001" value="<?php echo $data; ?>" readonly>
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-4 col-sm-2 control-label">Nama Promo</label>
						<select id="nama_promo" name="nama_promo" class="form-control select2" style="width: 100%;" required>
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
							<!-- onchange nama_promo muncul lalu cari data di master barang -->
							<?php
							$nama_barang = 'Hair Care';
							$this->db->where('nama_barang', $nama_barang);
							$data = $this->db->get('master_barang');
							if ($data->num_rows() > 0) {
								$rowsdata = $data->row();
								$nama = $rowsdata->nama_barang;
								$harga = $rowsdata->harga;
							?>
								<textarea type="text" class="form-control" name="keterangan" placeholder="Keterangan" required>setiap pembelian <?php echo $nama ?> sejumlah 2 pcs akan mendapat potongan harga <?php echo $harga ?></textarea>
							<?php
							} else { ?>
								<textarea type="text" class="form-control" name="keterangan" placeholder="Keterangan" required></textarea>
							<?php }
							?>
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

<!-- Modal Hapus -->
<?php foreach ($promo as $row): $id = $row->id; $nama_promo = $row->nama_promo; ?>
	<div class="modal fade" id="hapusData<?php echo $row->id; ?>" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-centered" role="dialog">
			<div class="modal-content">
				<form method="POST" action="<?php echo base_url('c_promo/delete'); ?>">
					<div class="modal-header">
						<h5 class="modal-title">Delete Data</h5>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<p>Are you sure you want to delete this data?</p>
						<div class="form-group">
							<input type="hidden" name="id" class="form-control" value="<?php echo $id; ?>">
							<input type="text" name="nama_promo" class="form-control" value="<?php echo $nama_promo; ?>" readonly>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-flat btn-default" data-dismiss="modal"><i class="fa fa-times"></i> No</button>
						<button type="submit" class="btn btn-danger btn-flat"><i class="fa fa-trash"></i> Yes</button>
					</div>
				</form>
			</div>
		</div>
	</div>
<?php endforeach; ?>
<!-- End Modal Hapus -->
