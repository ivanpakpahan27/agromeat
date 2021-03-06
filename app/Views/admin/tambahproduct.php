<?= $this->extend('admin/detail/template'); ?>



use Config\Validation;

<?= $this->section('content'); ?>
<!-- <i class="fa fa-arrow-circle-left fa-2x bg-primary" aria-hidden="true" onclick="goBack()" href="/adminproduct"></i> -->
<div class="container">
    <div class="row">
        <div class="col-9">
            <h2 class="my-3"> Tambah Produk </h2>

            <form action="/adminproduct/save" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <div class="form-group row">
                    <label for="department" class="col-sm-2 col-form-label">Department</label>
                    <select name="department" id="department" class="form-control">
                        <div class="col-sm-10">
                            <option class="col-sm-3 col-form-label col-sm-8 form-control" value="Daging Domba">Daging Domba</option>
                            <option class="col-sm-3 col-form-label col-sm-8 form-control" value="Daging Sapi">Daging Sapi</option>
                            <option class="col-sm-3 col-form-label col-sm-8 form-control" value="Daging Olahan">Daging Olahan</option>
                            <option class="col-sm-3 col-form-label col-sm-8 form-control" value="Lainnya">Lainnya</option>
                        </div>
                    </select>
                </div>
                <div class="form-group row">
                    <label for="nama_produk" class="col-sm-2 col-form-label">Nama Produk</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('nama_produk')) ? 'is-invalid' : ''; ?>" id="nama_produk" placeholder="" name="nama_produk" autofocus>
                        <div class="invalid-feedback">
                            <?= $validation->getError('nama_produk'); ?>
                        </div>
                    </div>
                </div>
                <!-- <div class="form-group row">
                    <label for="slug" class="col-sm-2 col-form-label">Slug</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="slug" placeholder="Slug" name="slug">
                    </div>
                </div> -->
                <div class="form-group row">
                    <label for="stok" class="col-sm-2 col-form-label">Stok</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="stok" placeholder="Stok" name="stok" required value="<?= old('stok'); ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="harga" placeholder="" name="harga" required value="<?= old('harga'); ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="desc" class="col-sm-2 col-form-label">Deskripsi</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="desc" placeholder="" name="desc" required value="<?= old('desc'); ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="fungsi" class="col-sm-2 col-form-label">Kegunaan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="fungsi" placeholder="" name="fungsi" value="<?= old('fungsi'); ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="lainnya" class="col-sm-2 col-form-label">Lain-lain</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="lainnya" placeholder="..." name="lainnya" value="<?= old('lainnya'); ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="gambar" class="col-sm-2 col-form-label ">Gambar</label>
                    <div class="col-sm-2">
                        <img src="/img/product/default.jpg" class="img-thumbnail img-preview">
                    </div>
                    <div class="col-sm-8">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input <?= ($validation->hasError('gambar')) ? 'is-invalid' : ''; ?>" id="gambar" name="gambar" onchange="previewImg()">
                            <div class="invalid-feedback">
                                <?= $validation->getError('gambar'); ?>
                            </div>
                            <label class="custom-file-label" for="gambar">Choose file</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                </div>
                <br><br><br><br><br><br><br><br>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>