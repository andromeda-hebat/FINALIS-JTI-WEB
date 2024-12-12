<div class="d-flex">
    <!-- Sidebar -->
    <?php if (strcasecmp($_SESSION['role'], 'Admin TA') == 0): ?>
        <?php include __DIR__ . '/../../components/admin_ta/sidebar.php' ?>
    <?php elseif (strcasecmp($_SESSION['role'], 'Admin Prodi') == 0): ?>
        <?php include __DIR__ . '/../../components/admin_prodi/sidebar.php' ?>
    <?php elseif (strcasecmp($_SESSION['role'], 'Admin Jurusan') == 0): ?>
        <?php include __DIR__ . '/../../components/admin_jurusan/sidebar.php' ?>
    <?php elseif (strcasecmp($_SESSION['role'], 'Mahasiswa') == 0): ?>
        <?php include __DIR__ . '/../../components/mahasiswa/sidebar.php' ?>
    <?php endif; ?>
    <div class="position-top w-100" style="margin-left: 35vh;">
        <?php include __DIR__ . '/../../components/general/topbar.php' ?>
        <main class="halaman mx-5 " style="min-height:100vh; margin-top:15vh;">
            <section class="mt-2">
                <div class="d-flex w-100 align-items-center ">
                    <h3 class="ms-1 fw-bold mb-0">Notifikasi</h3>
                </div>
                <div class="card mt-3">
                    <div class="card-body d-flex justify-content-between">
                        <div>
                            <p>Vladimir Putin/2341720100</p>
                            <p>Submit form administrasi prodi</p>
                        </div>
                        <p>12:00 PM</p>
                    </div>
                </div>
                <div class="card mt-3">
                    <div class="card-body d-flex justify-content-between">
                        <div>
                            <p>Vladimir Putin/2341720100</p>
                            <p>Submit form administrasi prodi</p>
                        </div>
                        <p>12:00 PM</p>
                    </div>
                </div>
                <div class="card mt-3">
                    <div class="card-body d-flex justify-content-between">
                        <div>
                            <p>Vladimir Putin/2341720100</p>
                            <p>Submit form administrasi prodi</p>
                        </div>
                        <p>12:00 PM</p>
                    </div>
                </div>
                <div class="card mt-3">
                    <div class="card-body d-flex justify-content-between">
                        <div>
                            <p>Vladimir Putin/2341720100</p>
                            <p>Submit form administrasi prodi</p>
                        </div>
                        <p>12:00 PM</p>
                    </div>
                </div>
            </section>
        </main>
    </div>
</div>