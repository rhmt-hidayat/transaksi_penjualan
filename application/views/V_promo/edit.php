<div class="wrapper wrapper-content animated fadeInRight">
	<div class="row">
		<div class="col-lg-12">
			<div class="ibox ">
				<div class="ibox-title">
					<h5>Edit Promo</small></h5>
					
				</div>
				<div class="ibox-content">
					<form method="POST" action="<?php echo base_url('c_promo/update') ?>">
						<div class="form-group row"><label class="col-sm-2 col-form-label">Kode Barang</label>

							<div class="col-sm-10"><input type="text" class="form-control" name="kode_barang" value="<?php echo $edit['kode_promo'] ?>" readonly></div>
							<input type="hidden" name="id" class="form-control" value="<?php echo $edit['id']; ?>">
						</div>
						<div class="hr-line-dashed"></div>
						<div class="form-group row"><label class="col-sm-2 col-form-label">Nama Barang</label>

							<div class="col-sm-10"><input type="text" class="form-control" name="nama_barang" value="<?php echo $edit['nama_promo'] ?>"></div>
						</div>
						<div class="hr-line-dashed"></div>
						<div class="form-group row"><label class="col-sm-2 col-form-label">Harga</label>

							<div class="col-sm-10"><textarea type="text" class="form-control" name="harga"><?php echo $edit['keterangan'] ?></textarea></div>
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
								<button class="btn btn-white btn-sm" type="submit">Cancel</button>
								<button class="btn btn-primary btn-sm" type="submit">Save changes</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
