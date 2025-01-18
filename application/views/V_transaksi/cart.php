<div class="wrapper wrapper-content animated fadeInRight">
	<div class="row">
		<div class="col-lg-12">
			<div class="ibox ">
				<div class="ibox-title">
					<h5>Transaksi Penjualan</small></h5>

				</div>
				<div class="ibox-content">
					<form method="POST" action="<?php echo base_url('c_transaksi/insert') ?>">
						<div class="form-group row"><label class="col-sm-2 col-form-label">Kode Transaksi</label>
							<div class="col-sm-10"><input type="text" class="form-control" name="kode_transaksi" value="<?php echo $kode; ?>" readonly></div>
							<!-- <input type="hidden" name="id" class="form-control" value=""> -->
						</div>
						<div class="hr-line-dashed"></div>
						<div class="form-group row"><label class="col-sm-2 col-form-label">Nama Barang</label>
							<div class="col-sm-10">
								<select id="nama_barang" name="nama_barang" class="form-control select2" style="width: 100%;" required>
									<option value="">Pilih Nama Barang</option>
									<?php
									foreach ($barang as $row) {
									?>
										<option value="<?php echo $row->nama_barang; ?>"><?php echo $row->nama_barang; ?></option>
									<?php
									}
									?>
								</select>
							</div>
						</div>
						<div class="hr-line-dashed"></div>
						<div class="form-group row"><label class="col-sm-2 col-form-label">Harga</label>
							<div class="col-sm-10"><input type="number" class="form-control" id="harga" name="harga" value="" readonly></div>
						</div>
						<div class="hr-line-dashed"></div>
						<div class="form-group row"><label class="col-sm-2 col-form-label">Kode Promo</label>
							<div class="col-sm-10">
								<select id="kode_promo" name="kode_promo" class="form-control select2" style="width: 100%;" required>
									<option value="">Pilih Nama Promo</option>
									<?php
									foreach ($promo as $row) {
									?>
										<option value="<?php echo $row->nama_promo; ?>"><?php echo $row->nama_promo; ?></option>
									<?php
									}
									?>
								</select>
							</div>
						</div>
						<div class="hr-line-dashed"></div>
						<div class="form-group row"><label class="col-sm-2 col-form-label">Keterangan</label>
							<div class="col-sm-10"><textarea type="text" class="form-control" id="keterangan" name="keterangan" readonly></textarea></div>
						</div>
						<div class="hr-line-dashed"></div>
						<div class="form-group row">
							<div class="col-sm-10">
								<div class="row">
									<div class="col-md-3"><label class="col-sm-2 col-form-label">Jumlah</label><input type="number" class="form-control" id="jumlah" name="jumlah" value="" required></div>
									<div class="col-md-3"><label class="col-sm-2 col-form-label">Total</label><input type="number" class="form-control" id="total" name="total" onchange="totalHarga()" value="" readonly></div>
									<div class="col-md-3"><label class="col-sm-2 col-form-label">Bayar</label><input type="number" class="form-control" id="bayar" name="bayar" value="" required></div>
									<div class="col-md-3"><label class="col-sm-2 col-form-label">Kembalian</label><input type="number" class="form-control" id="kembalian" name="kembalian" onchange="kembali()" value="" readonly></div>
								</div>
							</div>
						</div>
						<div class="hr-line-dashed"></div>
						<div class="form-group row">
							<div class="col-sm-4 col-sm-offset-2">
								<a href="<?php echo base_url() . 'c_transaksi'; ?>" class="btn btn-white btn-sm">Cancel</a>
								<button class="btn btn-primary btn-sm" type="submit">Save changes</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
