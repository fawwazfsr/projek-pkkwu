<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
    data-whatever="@mdo">Kariawan</button>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Input kariawan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('admin/kariawan/simpan') ?>" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="form-group col-6">
                            <label for="recipient-name" class="col-form-label">Nama Kariawan:</label>
                            <input type="text" name="nama_kariawan" class="form-control" id="recipient-name">
                        </div>
                        <div class="form-group col-6">
                            <label for="message-text" class="col-form-label">Jabatan:</label>
                            <input type="text" name="jabatan" class="form-control" id="recipient-name">
                        </div>
                    </div>
                    <div class="form-group text-dark">
                        <label for="message-text" class="col-form-label">Foto barang:</label>
                        <div class="custom-file">
                            <input type="file" name="foto" class="custom-file-input" id="customFile"
                                accept="image/png, image/jpeg">
                            <label class="custom-file-label" for="customFile">Masukkan foto barang</label>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Kirim</button>
            </div>
            </form>
        </div>
    </div>
</div>