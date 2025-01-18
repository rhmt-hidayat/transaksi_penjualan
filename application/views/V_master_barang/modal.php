<?php foreach($data as $row): $id=$row->id; $nama_barang = $row->nama_barang; $kode_barang = $row->kode_barang; ?>
<div class="modal fade" id="hapusData<?php echo $row->id; ?>" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="dialog">
        <div class="modal-content">
            <form method="POST" action="<?php echo base_url('c_master_barang/delete'); ?>">
                <div class="modal-header">
                    <h5 class="modal-title">Delete Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to delete this data?</p>
                    <div class="form-group">
                        <input type="hidden" name="id" class="form-control" value="<?php echo $id;?>">
                        <input type="text" name="nama_barang" class="form-control" value="<?php echo $kode_barang.' - '.$nama_barang;?>" readonly>
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
<?php endforeach;?>
