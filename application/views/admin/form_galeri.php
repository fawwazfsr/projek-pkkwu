<div class="row">
    <div class="container mb-4">
        <div class="card shadow col- h-100 mb-4">
            <div class="card-header">
                <strong class="card-title">Galeri</strong>
            </div>
            <div class="card-body">
                <form Action="<?= base_url('admin/galeri/simpan') ?>" method="post" enctype="multipart/form-data">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Judul</label>
                            <input type="text" class="form-control" name="judul" placeholder="Masukkan Judul" value="">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Foto</label>
                            <div class="custom-file">
                                <input type="file" name="foto" class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile"
                                    accept="image/png, image/jpeg">Masukkan
                                    Foto</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail4">Keterangan</label>
                        <input type="text" class="form-control" name="keterangan" placeholder="Masukkan keterangan"
                            value="">
                    </div>
                    <button type="submit" class="btn btn-primary" fdprocessedid="8wkfz">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <div id="carouselExampleIndicators" class="carousel slide w-50 col-12 rounded " data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <?php $no = 1;
            foreach ($galeri as $a) { ?>
                <div class="carousel-item <?php if ($no == 1) {
                    echo 'active';
                } ?> ">
                    <img class="d-block w-100" src="<?= base_url('aset/temadmin/img/galeri/' . $a['foto']) ?>"
                        target="_blank" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="text-light">
                            <?= $a['judul'] ?>
                        </h5>
                        <p>
                            <?= $a['keterangan'] ?>
                        </p>
                        <a class="btn btn-sm btn-danger" href="<?= base_url('admin/galeri/hapus/' . $a['foto']) ?>"><span
                                class="text-danger">hapus</span></a>
                    </div>
                </div>
                <?php $no++;
            } ?>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<!-- <div class="row">
    <?php $no = 1;
    foreach ($galeri as $a) { ?>
        <div class="col-3 card shadow mb-4 mx-2">
            <div class="card-body text-center">
                <a href="<?= base_url('aset/temadmin/img/galeri/' . $a['foto']) ?>" target="_blank" class="avatar avatar-xl">
                    <img src="<?= base_url('aset/temadmin/img/galeri/' . $a['foto']) ?>" alt="..." class="img rounded">
                </a>
                <div class="card-text my-2">
                    <strong class="card-title my-0"><?=$a['judul']?></strong>
                    <p class="small text-muted mb-0"><?=$a['keterangan']?></p>
                    <p class="small"><span class="badge badge-dark">New York, USA</span></p>
                </div>
            </div>
            <div class="card-footer">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto">
                        <a href="<?= base_url('admin/galeri/hapus/' . $a['foto']) ?>" class="btn btn-sm btn-danger">Hapus</a>
                    </div>
                </div>
            </div>
        </div>
        <?php $no++;
    } ?>
</div> -->