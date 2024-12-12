<main class="d-flex">
    <!-- Sidebar -->
    <?php include __DIR__ . '/../../components/admin_jurusan/sidebar.php' ?>
    <div class="flex-grow-1">

        <?php include __DIR__ . '/../../components/general/topbar.php' ?>

        <div class="halaman mx-5 ">
            <div class="d-flex w-100 justify-content-start mt-3">
                <h3 class="fw-bold" style="color: var(--color-navy-blue);">Catatan Aktivitas</h3>
            </div>

            <div class="mt-3 w-100 border rounded shadow">
                <table class="table">
                    <thead>
                        <tr>
                            <th>User ID</th>
                            <th>Nama Lengkap</th>
                            <th>Aktivitas</th>
                            <th>Tanggal</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>2341720000</td>
                            <td>Vladimir Putin</td>
                            <td>Mengajukan....</td>
                            <td>24 Oktober,2024</td>

                            <td class="text-center"><a href="/detail-permintaan" class="btn btn-primary">Detail</a></td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
</main>