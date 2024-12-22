<div class="d-flex">
    <?php include __DIR__ . '/../../components/admin_jurusan/sidebar.php' ?>
    <div class="position-top w-100" style="margin-left: 35vh;">
        <?php include __DIR__ . '/../../components/general/topbar.php' ?>
        <main class="halaman mx-5 " style="min-height:100vh; margin-top:15vh;">
            <h2 class="fw-bold">Laporan Sistem</h2>
            
            <p>Pilih jenis laporan yang ingin dibuat</p>
            <a href="/laporan/laporan-umum" target="_blank">
                <button>Laporan umum</button>
            </a>

            <button>Laporan Aktivitas Admin</button>

            <button>Laporan Analisa</button>
        </main>
    </div>
</div>