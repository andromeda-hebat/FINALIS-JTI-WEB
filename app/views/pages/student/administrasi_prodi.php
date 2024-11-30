<div class="d-flex">
    <?php include __DIR__ . '/../../components/student/sidebar_student.php' ?>
    <div class="w-100 position-relative">
        <?php include __DIR__ . '/../../components/student/topbar_student.php' ?>
        <main class="container px-4" style="margin-top: 5rem;">
                
                <h2 class="mt-2 ms-1 fw-bold" style="color: #052C65;">Formulir Administrasi Prodi</h2>

            <div class="card mt-4 px-4">
                <div class="card-body">
                    <p class="mt-3">Upload berkas berikut untuk memverifikasi tanggungan prodi anda</p>

                    <form action="/laporan-skripsi" method="post">
                        <label for="skripsi" class="form-label mb-0">Distribusi Laporan Skripsi</label>
                        <p class="mb-0" style="color:#7C7C7C ;">(File scan PDF)</p>
                        <input type="file" id="skripsi" class="form-control w-50">
                        <br>
                        <label for="magang" class="form-label mb-0">Distribusi Laporan Magang</label>
                        <p class="mb-0" style="color: #7C7C7C;">(File scan PDF).</p>
                        <input type="file" id="magang" class="form-control w-50">
                        <br>
                        <label for="kompen" class="form-label mb-0">Surat Bebas Kompen</label>
                        <p class="mb-0" style="color: #7C7C7C;">(File scan PDF)</p>
                        <input type="file" id="kompen" class="form-control w-50">
                        <br>
                        <label for="toeic" class="form-label mb-0">Sertifikat TOEIC</label>
                        <p class="mb-0" style="color: #7C7C7C;">(File scan PDF)</p>
                        <input type="file" id="toeic" class="mb-2 form-control w-50">

                    </form>

                </div>
            </div>
            <div class="d-flex justify-content-end">
                <input type="button" value="Kirim" id="submitBtn" class="text-white mt-3 px-3"
                    style="background-color:#052C65 ;">
            </div>
        </main>
    </div>
</div>

<div class="modal" tabindex="-1" id="statusModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-danger">Gagal</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>File gagal diupload
                    Periksa kembali data yang anda upload</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="text-white" style="background-color: #052C65;"
                    data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const submitBtn = document.getElementById("submitBtn");
        const modal = new bootstrap.Modal(document.getElementById("statusModal"));

        submitBtn.addEventListener("click", function () {
            // Validasi file input
            const laporan = document.getElementById("laporan").files.length;
            const program = document.getElementById("program").files.length;
            const upload = document.getElementById("upload").files.length;

            if (laporan && program && upload) {
                // Jika semua file diunggah, arahkan ke halaman berikutnya
                window.location.href = "/ta-terkirim"; // Ganti "/nextPage" dengan URL halaman tujuan
            } else {
                // Jika gagal, tampilkan modal
                modal.show();
            }
        });
    });
</script>