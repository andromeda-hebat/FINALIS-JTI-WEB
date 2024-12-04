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
                        <thead>
                            <tr>
                                <th style="background-color:#E4EEFF ;">NIM</th>
                                <th style="background-color:#E4EEFF ;">Mahasiswa</th>
                                <th style="background-color:#E4EEFF ;">Aktivitas</th>
                                <th style="background-color:#E4EEFF ;">Tanggal</th>
                                <th style="background-color:#E4EEFF ;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $iteration = 0;
                            foreach ($data['all_req_verif'] as $key => $value):
                                ?>
                                <tr>
                                    <td><?= $value->nim ?></td>
                                    <td><?= $value->nama_lengkap ?></td>
                                    <td><?= $value->tanggal_request ?></td>
                                    <td><?= $value->keterangan_verifikasi ?></td>
                                    <td><a href="/permintaan-verif-prodi/detail/<?= $value->id_verifikasi ?>"
                                            class="btn btn-primary">Detail</a></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </section>

        </div>
    </div>
</main>