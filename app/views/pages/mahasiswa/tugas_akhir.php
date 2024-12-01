<div class="d-flex">
    <?php include __DIR__ . '/../../components/mahasiswa/sidebar.php' ?>
    <div class="w-100 position-relative">
        <?php include __DIR__ . '/../../components/mahasiswa/topbar.php' ?>
        <main class="container px-4" style="margin-top: 5rem;">
            <div class="d-flex align-items-center">
                <a href="/dashboard" style="text-decoration: none;">
                    <svg class="me-1" width="30" height="30" viewBox="0 0 30 30" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_612_5138)">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M26.25 1.875H3.75C3.25272 1.875 2.77581 2.07254 2.42417 2.42417C2.07254 2.77581 1.875 3.25272 1.875 3.75V26.25C1.875 26.7473 2.07254 27.2242 2.42417 27.5758C2.77581 27.9275 3.25272 28.125 3.75 28.125H26.25C26.7473 28.125 27.2242 27.9275 27.5758 27.5758C27.9275 27.2242 28.125 26.7473 28.125 26.25V3.75C28.125 3.25272 27.9275 2.77581 27.5758 2.42417C27.2242 2.07254 26.7473 1.875 26.25 1.875ZM3.75 0C2.75544 0 1.80161 0.395088 1.09835 1.09835C0.395088 1.80161 0 2.75544 0 3.75L0 26.25C0 27.2446 0.395088 28.1984 1.09835 28.9016C1.80161 29.6049 2.75544 30 3.75 30H26.25C27.2446 30 28.1984 29.6049 28.9016 28.9016C29.6049 28.1984 30 27.2446 30 26.25V3.75C30 2.75544 29.6049 1.80161 28.9016 1.09835C28.1984 0.395088 27.2446 0 26.25 0L3.75 0Z"
                                fill="black" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M22.5 15.0002C22.5 15.2488 22.4012 15.4873 22.2254 15.6631C22.0496 15.8389 21.8111 15.9377 21.5625 15.9377H10.7006L14.7262 19.9615C14.8134 20.0486 14.8825 20.1521 14.9297 20.266C14.9769 20.3799 15.0012 20.5019 15.0012 20.6252C15.0012 20.7485 14.9769 20.8705 14.9297 20.9844C14.8825 21.0983 14.8134 21.2018 14.7262 21.289C14.6391 21.3761 14.5356 21.4453 14.4217 21.4924C14.3078 21.5396 14.1857 21.5639 14.0625 21.5639C13.9392 21.5639 13.8171 21.5396 13.7032 21.4924C13.5894 21.4453 13.4859 21.3761 13.3987 21.289L7.77372 15.664C7.68641 15.5769 7.61714 15.4734 7.56988 15.3595C7.52262 15.2456 7.49829 15.1235 7.49829 15.0002C7.49829 14.8769 7.52262 14.7548 7.56988 14.6409C7.61714 14.527 7.68641 14.4235 7.77372 14.3365L13.3987 8.71146C13.5748 8.53542 13.8135 8.43652 14.0625 8.43652C14.3114 8.43652 14.5502 8.53542 14.7262 8.71146C14.9023 8.8875 15.0012 9.12625 15.0012 9.37521C15.0012 9.62416 14.9023 9.86292 14.7262 10.039L10.7006 14.0627H21.5625C21.8111 14.0627 22.0496 14.1615 22.2254 14.3373C22.4012 14.5131 22.5 14.7516 22.5 15.0002Z"
                                fill="black" />
                        </g>
                        <defs>
                            <clipPath id="clip0_612_5138">
                                <rect width="30" height="30" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                </a>
                <h2 class="mt-2 ms-1 fw-bold" style="color: #052C65;">Formulir Tugas Akhir</h2>
            </div>

            <div class="card mt-3">
                <div class="card-body">
                    <p class="mt-3">Upload berkas berikut untuk memverifikasi tugas akhir anda</p>

                    <form action="/laporan-skripsi" method="post">
                        <label for="laporan" class="form-label mt-4 mb-0">Laporan Tugas Akhir/Skripsi</label>
                        <p class="mb-0" style="color:#7C7C7C ;">(Format PDF, maksimal 10 MB)</p>
                        <input type="file" id="laporan">
                        <br>
                        <label for="program" class="form-label mt-5 mb-0">Program/Aplikasi Tugas Akhir</label>
                        <p class="mb-0" style="color: #7C7C7C;">(Format ZIP/RAR, maksimal 1GB).</p>
                        <input type="file" id="program">
                        <br>
                        <label for="upload" class="form-label mt-5 mb-0">Upload Bukti Publikasi</label>
                        <p class="mb-0" style="color: #7C7C7C;">File scan PDF</p>
                        <input type="file" id="upload" class="mb-5">
                    </form>

                </div>
            </div>
            <div class="d-flex justify-content-end">
                <input type="button" value="Kirim" id="submitBtn" class="text-white mt-3"
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