<?= $this->extend('template/admin_page') ?>
<?= $this->section('content') ?>
<div class="content">
    <div class="container">
        <div class="page-title">
            <h3><?= $judul; ?></h3>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">Form <?= $judul; ?></div>
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <form class="">

                            <div class="mb-3 row has-danger">
                                <label class="col-sm-2">Nama Siswa</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control is-invalid">
                                    <div class="invalid-feedback">Read error message here.</div>
                                </div>
                            </div>
                            <div class="mb-3 row has-danger">
                                <label class="col-sm-2">NIK</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control is-invalid">
                                    <div class="invalid-feedback">Read error message here.</div>
                                </div>
                            </div>
                            <div class="mb-3 row has-danger">
                                <label class="col-sm-2">NIS</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control is-invalid">
                                    <div class="invalid-feedback">Read error message here.</div>
                                </div>
                            </div>
                            <div class="line"></div><br>
                            <div class="mb-3 row">
                                <label class="col-sm-2">Jenis Kelamin</label>
                                <div class="col-sm-10 select">
                                    <select name="" class="form-select">
                                        <option value="">option 1</option>
                                        <option value="">option 2</option>
                                        <option value="">option 3</option>
                                        <option value="">option 4</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row has-danger">
                                <label class="col-sm-2">No HP</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control is-invalid">
                                    <div class="invalid-feedback">Read error message here.</div>
                                </div>
                            </div>
                            <div class="line"></div><br>
                            <div class="mb-3 row">
                                <div class="col-sm-4 offset-sm-2">
                                    <button type="submit" class="btn btn-secondary mb-2"><i class="fas fa-times"></i>
                                        Cancel</button>
                                    <button type="submit" class="btn btn-primary mb-2"><i class="fas fa-save"></i>
                                        Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>