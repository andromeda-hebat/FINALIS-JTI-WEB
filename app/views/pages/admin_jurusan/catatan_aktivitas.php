<main class="d-flex">
    <!-- Sidebar -->
    <?php include __DIR__ . '/../../components/admin_jurusan/sidebar.php' ?>
    <div class="flex-grow-1">

        <?php include __DIR__ . '/../../components/admin_jurusan/topbar.php' ?>

        <div class="halaman mx-5 ">
            <div class="d-flex w-100 justify-content-start mt-3">
                <h3 class="fw-bold" style="color: #052C65;">Catatan Aktivitas</h3>
            </div>

            <div class="mt-3 w-100 border rounded shadow">
                <table class="table">
                    <thead>
                        <tr>
                            <th style="background-color:#E4EEFF ;">User ID</th>
                            <th style="background-color:#E4EEFF ;">Nama Lengkap</th>
                            <th style="background-color:#E4EEFF ;">Aktivitas</th>
                            <th style="background-color:#E4EEFF ;">Tanggal</th>
                            <th class="text-center" style="background-color:#E4EEFF ;">Aksi</th>
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