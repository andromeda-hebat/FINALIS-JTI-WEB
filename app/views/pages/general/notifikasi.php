<style>
    .card-not-read {
        background-color:rgb(197, 197, 197);
        color: black;
        border: 1px solid rgb(131, 129, 129);
    }
</style>



<div class="d-flex">
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
                <button class="mt-3">Tandai semua sudah dibaca</button>
                <?php foreach ($data['notifications'] as $key => $value): ?>
                <div class="card mt-3 <?= $value->getStatus() == 'Belum Dibaca' ? 'card-not-read' : '' ?>">
                    <div class="card-body d-flex justify-content-between">
                        <div>
                            <p><?= $value->getAdmin() ?></p>
                            <p><?= $value->getPesan() ?></p>
                        </div>
                        <p><?= $value->getTanggal() ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </section>
        </main>
    </div>
</div>