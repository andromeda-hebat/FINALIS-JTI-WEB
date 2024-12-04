<div class="d-flex">
    <?php include __DIR__ . '/../../components/mahasiswa/sidebar.php' ?>
    <div class="w-100 position-relative">
        <?php include __DIR__ . '/../../components/mahasiswa/topbar.php' ?>
        <main class="container px-5" style="margin-top: 5rem;">
            <div class="d-flex">
                <h3 class="mt-2 fw-bold" style="color: #052C65;">Riwayat Pengajuan Formulir</h3>
            </div>
            <div class="mt-5">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Tanggal Pengajuan</th>
                            <th scope="col">Jenis Formulir</th>
                            <th scope="col">Status</th>
                            <th scope="col">Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data['req_history'] as $key => $value): ?>
                            <tr>
                                <td><?= $value ?></td>
                                <td><?= $value ?></td>
                                <td><?= $value ?></td>
                                <td><?= $value ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </main>

    </div>
</div>