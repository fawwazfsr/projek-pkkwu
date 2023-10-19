<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
    data-whatever="@mdo">Tambah barang</button>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Input barang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('admin/barang/simpan') ?>" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="form-group col-6">
                            <label for="recipient-name" class="col-form-label">Nama barang:</label>
                            <input type="text" name="nama_barang" class="form-control" id="recipient-name">
                        </div>
                        <div class="form-group col-6">
                            <label for="message-text" class="col-form-label">Harga:</label>
                            <input type="text" name="harga" class="form-control" id="recipient-name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Keterangan:</label>
                        <textarea name="keterangan" class="form-control" id="message-text"></textarea>
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
<div class="card shadow mt-3">
    <div class="card-header">
        <strong class="card-title">Data barang</strong>
    </div>
    <div class="card-body my-n2">
        <table class="table table-striped table-hover table-borderless">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama barang</th>
                    <th>Keterangan</th>
                    <th>Harga</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
                foreach ($barang as $a) { ?>
                    <tr>
                        <td>
                            <?= $no ?>
                        </td>
                        <td>
                            <?= $a['nama_barang'] ?>
                        </td>
                        <td>
                            <button type="button" class="btn btn-warning" data-toggle="modal"
                                data-target="#keterangan<?= $a['id_barang'] ?>" data-whatever="@mdo">keterangan</button>

                            <div class="modal fade" id="keterangan<?= $a['id_barang'] ?>" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Keterangan</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>
                                                <?= $a['keterangan'] ?>
                                            </p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <?= $a['harga'] ?>
                        </td>
                        <td>
                            <a class="text-dark" type="button" data-toggle="modal"
                                data-target="#tambah<?= $a['id_barang'] ?>" data-whatever="@mdo">foto</a>
                            <div class="modal fade" id="tambah<?= $a['id_barang'] ?>" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Tambah foto</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="<?= base_url('admin/foto/simpan') ?>" method="post"
                                                enctype="multipart/form-data">

                                                <input type="hidden" name="id_barang" value="<?= $a['id_barang'] ?>">

                                                <div class="form-group text-dark">
                                                    <label for="message-text" class="col-form-label">Foto
                                                        barang:</label>
                                                    <div class="custom-file">
                                                        <input type="file" name="foto" class="custom-file-input"
                                                            id="customFile" accept="image/png, image/jpeg">
                                                        <label class="custom-file-label" for="customFile">Masukkan foto
                                                            barang</label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <?php $no = 1;
                                                    foreach ($this->Cms_model->foto($a['id_barang']) as $b) { ?>
                                                        <div class="col-3 mb-1 mx-2">
                                                            <div class="card-body text-center">
                                                                <a href="<?= base_url('aset/temadmin/img/barang/' . $b['foto']) ?>"
                                                                    target="_blank" class="avatar avatar-xl">
                                                                    <img src="<?= base_url('aset/temadmin/img/barang/' . $b['foto']) ?>"
                                                                        alt="..." class="img rounded">
                                                                </a>
                                                            </div> <!-- ./card-text -->
                                                            <div class="">
                                                                <div class="row align-items-center justify-content-between">
                                                                    <div class="mx-5">
                                                                        <a href="<?= base_url('admin/barang/hapus/' . $b['foto']) ?>"
                                                                            class="btn btn-sm btn-danger">Hapus</a>
                                                                    </div>
                                                                </div>
                                                            </div> <!-- /.card-footer -->
                                                        </div>
                                                        <?php $no++;
                                                    } ?>
                                                </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Kirim</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-sm dropdown-toggle more-vertical" type="button" id="dr2"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="text-muted sr-only">Action</span>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dr2">
                                    <a class="dropdown-item text-dark" type="button" data-toggle="modal"
                                        data-target="#edit<?= $a['id_barang'] ?>" data-whatever="@mdo">edit</a>
                                    <!-- <a class="dropdown-item"
                                        href="<?= base_url('admin/barang/hapus/' . $a['foto']) ?>">hapus</a> -->
                                </div>
                                <div class="modal fade" id="edit<?= $a['id_barang'] ?>" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Edit barang</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="<?= base_url('admin/barang/update') ?>" method="post"
                                                    enctype="multipart/form-data">

                                                    <input type="hidden" name="id_barang" value="<?= $a['id_barang'] ?>">
                                                    

                                                    <div class="row">
                                                        <div class="form-group col-6">
                                                            <label for="recipient-name" class="col-form-label">Nama
                                                                barang:</label>
                                                                <input type="text" name="nama_barang" class="form-control" id="recipient-name" value="<?= $a['nama_barang'] ?>">
                                                        </div>
                                                        <div class="form-group col-6">
                                                            <label for="message-text" class="col-form-label">Harga:</label>
                                                            <input type="text" name="harga" class="form-control" id="recipient-name" value="<?= $a['harga'] ?>">
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="message-text" class="col-form-label">Keterangan:</label>
                                                        <textarea name="keterangan" class="form-control" id="message-text"><?= $a['keterangan'] ?></textarea>                                        
                                                    </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Kirim</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <?php $no++;
                } ?>
            </tbody>
        </table>
    </div>
</div>