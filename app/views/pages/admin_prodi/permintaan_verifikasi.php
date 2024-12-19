<div class="d-flex">
    <?php include __DIR__ . '/../../components/admin_prodi/sidebar.php' ?>
    <div class="position-top w-100" style="margin-left: 35vh;">
        <?php include __DIR__ . '/../../components/general/topbar.php' ?>
        <main class="halaman mx-5 " style="min-height:100vh; margin-top:15vh;">
            <section class="mt-5">
                <h3 class="fw-bold mb-0" style="color: var(--color-navy-blue);">Permintaan Verifikasi</h3>
                <div class="mt-3 d-flex justify-content-between w-100 align-items-center">
                    <h6 class="m-0">Seluruh Permintaan</h6>
                </div>
                <div class="mt-3 w-100 border rounded shadow">
                    <table class="table">
                        <thead class="table">
                            <th>No</th>
                            <th>NIM</th>
                            <th>Mahasiswa</th>
                            <th>Status</th>
                            <th>Tanggal Pengajuan</th>
                            <th>Keterangan</th>
                            <th>Aksi</th>
                        </thead>
                        <tbody>
                            <?php foreach ($data['all_req_verif'] as $key => $value): ?>
                                <tr>
                                    <td><?= $value->getNomor() ?></td>
                                    <td><?= $value->getNim() ?></td>
                                    <td><?= $value->getNamaLengkap() ?></td>
                                    <td>
                                        <?php include __DIR__ . '/../../atoms/badge_' . strtolower($value->getStatusVerifikasi()) . '.php' ?>
                                    </td>
                                    <td><?= $value->getTanggalRequest() ?></td>
                                    <td><?= $value->getKeteranganVerifikasi() ?></td>
                                    <td><a href="/permintaan-verifikasi-prodi/detail/<?= $value->getIdVerifikasi() ?>"
                                            class="btn btn-primary">Rincian</a></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </section>
        </main>
    </div>
</div>
