<div class="d-flex">
    <?php include __DIR__ . '/../../components/student/sidebar_student.php' ?>
    <div class="w-100 position-relative">
        <?php include __DIR__ . '/../../components/student/topbar_student.php' ?>
        <main class="container px-4" style="margin-top: 5rem;">
                
                <h2 class="mt-2 ms-1 fw-bold" style="color: #052C65;">Formulir Tugas Akhir</h2>

            <div class="card mt-4 px-4">
                <div class="card-body">
                    <p class="mt-4">Upload berkas berikut untuk memverifikasi tugas akhir anda</p>

                    <form action="/laporan-skripsi" method="post">
                        <label for="laporan" class="form-label mt-2 mb-0">Laporan Tugas Akhir/Skripsi</label>
                        <p class="mb-0" style="color:#7C7C7C ;">(Format PDF, maksimal 10 MB)</p>
                        <input type="file" id="laporan" class="form-control w-50">
                        <br>
                        <label for="program" class="form-label mt-3 mb-0">Program/Aplikasi Tugas Akhir</label>
                        <p class="mb-0" style="color: #7C7C7C;">(Format ZIP/RAR, maksimal 1GB).</p>
                        <input type="file" id="program" class="form-control w-50">
                        <br>
                        <label for="upload" class="form-label mt-3 mb-0">Upload Bukti Publikasi</label>
                        <p class="mb-0" style="color: #7C7C7C;">File scan PDF</p>
                        <input type="file" id="upload" class="mb-5 form-control w-50">
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
    <div class="modal-dialog modal-dialog-centered">
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