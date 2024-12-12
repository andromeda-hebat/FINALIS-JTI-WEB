<div class="d-flex">
    <?php include __DIR__ . '/../../components/mahasiswa/sidebar.php' ?>
    <div class="w-100 position-relative">
        <?php include __DIR__ . '/../../components/general/topbar.php' ?>
        <main class="container px-5">
            <div class="d-flex">
                <h3 class="mt-2 fw-bold">Riwayat Pengajuan Formulir</h3>
            </div>
            <div class="mt-4">
                <table class="table table-striped border">
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
                                <td><?= $value->getNomor() ?></td>
                                <td><?= $value->getTanggalRequest() ?></td>
                                <td><?= $value->getJenisFormulir() ?></td>
                                <td><?= $value->getStatus() ?></td>
                                <td><?= $value->getKeterangan() ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </main>

    </div>
</div>