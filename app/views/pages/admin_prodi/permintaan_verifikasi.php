<main class="d-flex">
    <!-- Sidebar -->
    <?php include __DIR__ . '/../../components/admin_prodi/sidebar.php' ?>
    <div class="flex-grow-1">

        <?php include __DIR__ . '/../../components/admin_prodi/topbar.php' ?>

        <div class="halaman mx-5">
            <section class="mt-5">

                <h3 class="fw-bold mb-0" style="color: #052C65;">Permintaan Verifikasi</h3>

                <div class="mt-3 d-flex justify-content-between w-100 align-items-center">
                    <!-- Sort -->
                    <h6 class="m-0">Seluruh Permintaan</h6>

                </div>

                <!-- div kotak tabel -->
                <div class="mt-3 w-100 border rounded shadow">
                    <table class="table">
                        <thead class="table">
                            <th style="background-color:#E4EEFF ;">No</th>
                            <th style="background-color:#E4EEFF ;">NIM</th>
                            <th style="background-color:#E4EEFF ;">Mahasiswa</th>
                            <th style="background-color:#E4EEFF ;">Status</th>
                            <th style="background-color:#E4EEFF ;">Tanggal Pengajuan</th>
                            <th style="background-color:#E4EEFF ;">Keterangan</th>
                            <th style="background-color:#E4EEFF ;">Aksi</th>
                        </thead>
                        <tbody>
                            <?php foreach ($data['all_req_verif'] as $key => $value): ?>
                                <tr>
                                    <td><?= $value->getNomor() ?></td>
                                    <td><?= $value->getNim() ?></td>
                                    <td><?= $value->getNamaLengkap() ?></td>
                                    <td><?= $value->getStatusVerifikasi() ?></td>
                                    <td><?= $value->getTanggalRequest() ?></td>
                                    <td><?= $value->getKeteranganVerifikasi() ?></td>
                                    <td><a href="/permintaan-verif-ta/detail/<?= $value->getIdVerifikasi() ?>"
                                            class="btn btn-primary">Rincian</a></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </section>

        </div>
    </div>
</main>