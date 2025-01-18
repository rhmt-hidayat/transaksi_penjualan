<div class="wrapper wrapper-content animated fadeInRight">
	<div class="row">
		<div class="col-lg-12">
			<div class="ibox ">
				<div class="ibox-title">
					<h5>Edit Promo</small></h5>

				</div>
				<div class="ibox-content">
					<form method="POST" action="<?php echo base_url('c_promo/update') ?>">
						<div class="form-group row"><label class="col-sm-2 col-form-label">Kode Promo</label>
							<div class="col-sm-10"><input type="text" class="form-control" name="kode_promo" value="<?php echo $edit['kode_promo'] ?>" readonly></div>
							<input type="hidden" name="id" class="form-control" value="<?php echo $edit['id']; ?>">
						</div>
						<div class="hr-line-dashed"></div>
						<div class="form-group row"><label class="col-sm-2 col-form-label">Nama Promo</label>
							<div class="col-sm-10">
								<select name="nama_promo" class="form-control select2bs4" style="width: 100%;">
									<option value="">Pilih Nama Promo</option>
									<?php
									foreach ($barang as $row) {
									?>
										<option value="Promo <?php echo $row->nama_barang; ?>" <?php if ($edit['nama_promo'] == 'Promo ' .$row->nama_barang) { ?> selected <?php } ?>>Promo <?php echo $row->nama_barang; ?></option>
									<?php
									}
									?>
								</select>
							</div>
						</div>
						<div class="hr-line-dashed"></div>
						<div class="form-group row"><label class="col-sm-2 col-form-label">Keterangan</label>
							<div class="col-sm-10"><textarea type="text" class="form-control" name="keterangan"><?php echo $edit['keterangan'] ?></textarea></div>
						</div>
						<div class="hr-line-dashed"></div>
						<div class="form-group row">
							<div class="col-sm-10">
								<div class="row">
									<div class="col-md-2"><input type="text" placeholder="" class="form-control"></div>
									<div class="col-md-3"><input type="text" placeholder="" class="form-control"></div>
									<div class="col-md-4"><input type="text" placeholder="" class="form-control"></div>
								</div>
							</div>
						</div>
						<div class="form-group row">
							<div class="col-sm-4 col-sm-offset-2">
								<a href="<?php echo base_url() . 'c_promo'; ?>" class="btn btn-white btn-sm">Cancel</a>
								<button class="btn btn-primary btn-sm" type="submit">Save changes</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
