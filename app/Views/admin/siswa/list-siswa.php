<?= $this->extend('template/admin_page') ?>
<?= $this->section('content') ?>
<div class="content">
    <div class="container">
        <div class="page-title">
            <h3><?= $judul; ?>
                <a href="<?= base_url('admin/siswa/tambah'); ?>" class="btn btn-sm btn-outline-primary float-end"><i
                        class="fas fa-user-plus"></i>
                    Siswa</a>
            </h3>
        </div>
        <div class="box box-primary">
            <div class="box-body">
                <table width="100%" class="table table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Nama</th>
                            <th>NIS</th>
                            <th>NIK</th>
                            <th>Jenis Kelamin</th>
                            <th>Kelas</th>
                            <th>Jurusan</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1;
            foreach ($siswa as $value) : ?>
                        <tr>
                            <td><?= $i; ?></td>
                            <td><b><?= $value['nama_siswa']; ?></b></td>
                            <td><?= $value['nis']; ?></td>
                            <td><?= $value['nik']; ?></td>
                            <td><?= $value['jenis_kelamin']; ?></td>
                            <td><?= $value['kelas']; ?></td>
                            <td><?= $value['jurusan']; ?></td>
                            <!-- <td><?= $value['no_hp']; ?></td> -->
                            <td>
                            <td class="text-end">
                                <a href="<?= base_url('admin/siswa/profile/'.$value['id_siswa']); ?>"
                                    class="btn btn-outline-info btn-rounded"><i class="fas fa-book"></i></a>
                                <a href="<?= base_url('admin/siswa/edit/'.$value['id_siswa']); ?>"
                                    class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></a>
                                <!-- <form action="<?= base_url('admin/siswa/delete/' . $value['id_siswa']); ?>"
                                    method="post" class="d-inline">
                                    <?= csrf_field(); ?>
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button onclick="return confirm('Konfirmasi untuk menghapus data');" type="submit"
                                        class="btn btn-outline-danger btn-rounded" id="<?= $value['nis']; ?>">
                                        <i class="fas fa-trash">
                                    </button>
                                </form>  -->
                                <a href="" class="btn btn-outline-danger btn-rounded"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                        <?php $i++;
            endforeach; ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>