<div class="d-flex">
    <?php include __DIR__ . '/../../components/mahasiswa/sidebar.php' ?>
    <div class="w-100 position-relative">
        <?php include __DIR__ . '/../../components/mahasiswa/topbar.php' ?>
        <main class="container px-5">
            <h3 class="mt-2 ms-1 fw-bold">Formulir Administrasi Prodi</h3>

            <div id="empty-form-content" class="mt-4" style="display: <?php echo (strcasecmp($_SESSION['status']['administrasi_prodi'], 'kosong') == 0) ? 'block' : 'none'; ?>;">
                <form id="administrasi-prodi-form" action="/administrasi-prodi" method="post" enctype="multipart/form-data">
                    <div class="card card-body" style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);">
                        <p class="mt-3">Upload berkas berikut untuk memverifikasi tanggungan prodi anda</p>
                        <label for="skripsi" class="form-label mb-0">Distribusi Laporan Skripsi</label>
                        <p class="mb-0" style="color:#7C7C7C ;">(File scan PDF)</p>
                        <input type="file" name="distribusi_tugas_akhir" accept=".pdf" id="input-laporan-ta" class="form-control w-50">
                        <br>
                            <label for="magang" class="form-label mb-0">Distribusi Laporan Magang</label>
                        <p class="mb-0" style="color: #7C7C7C;">(File scan PDF).</p>
                        <input type="file" name="distribusi_magang" accept=".pdf" id="input-laporan-magang" class="form-control w-50">
                        <br>
                        <label for="kompen" class="form-label mb-0">Surat Bebas Kompen</label>
                        <p class="mb-0" style="color: #7C7C7C;">(File scan PDF)</p>
                        <input type="file" name="bebas_kompen" accept=".pdf" id="input-bebas-kompen" class="form-control w-50">
                        <br>
                        <label for="toeic" class="form-label mb-0">Sertifikat TOEIC</label>
                        <p class="mb-0" style="color: #7C7C7C;">(File scan PDF)</p>
                        <input type="file" name="toeic" accept=".pdf" id="input-toeic" class="mb-2 form-control w-50">
                    </div>
                    <div class="d-flex justify-content-end">
                        <input type="submit" value="Kirim" id="submitBtn" class="text-white mt-3 px-3"
                            style="background-color: var(--color-navy-blue);">
                    </div>
                </form>
            </div>
            <?php if (strcasecmp($_SESSION['status']['administrasi_prodi'], "diajukan") == 0): ?>
                <?php include __DIR__ . '/../../components/mahasiswa/info_data_berhasil_dikirim.php' ?>
            <?php elseif (strcasecmp($_SESSION['status']['administrasi_prodi'], "disetujui") == 0): ?>
                <div id="body-content"
                    class="mt-4 card card-body d-flex flex-column justify-content-center align-items-center"
                    style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25); min-height: 75vh; max-height: 75vh;">
                    <p class="text-center">Selamat data anda lolos verifikasi administrasi prodi! <br>
                        Selanjutnya selesaikan administrasi prodi untuk dapat mengajukan permintaan surat bebas tanggungan
                        jurusan!</p>
                    <svg width="100" height="100" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_615_7371)">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M100 50C100 63.2608 94.7322 75.9785 85.3553 85.3553C75.9785 94.7322 63.2608 100 50 100C36.7392 100 24.0215 94.7322 14.6447 85.3553C5.26784 75.9785 0 63.2608 0 50C0 36.7392 5.26784 24.0215 14.6447 14.6447C24.0215 5.26784 36.7392 0 50 0C63.2608 0 75.9785 5.26784 85.3553 14.6447C94.7322 24.0215 100 36.7392 100 50ZM75.1875 31.0625C74.7411 30.6176 74.2095 30.2673 73.6246 30.0326C73.0396 29.7979 72.4134 29.6835 71.7833 29.6963C71.1531 29.7092 70.5321 29.8489 69.9572 30.1073C69.3823 30.3657 68.8655 30.7373 68.4375 31.2L46.7313 58.8562L33.65 45.7687C32.7614 44.9408 31.5861 44.49 30.3717 44.5114C29.1574 44.5328 27.9987 45.0248 27.1399 45.8836C26.281 46.7424 25.7891 47.9011 25.7677 49.1155C25.7462 50.3299 26.197 51.5052 27.025 52.3938L43.5625 68.9375C44.008 69.3822 44.5385 69.7326 45.1224 69.9678C45.7063 70.2031 46.3315 70.3183 46.9609 70.3066C47.5903 70.2949 48.2108 70.1566 48.7856 69.8999C49.3604 69.6432 49.8775 69.2734 50.3062 68.8125L75.2563 37.625C76.1068 36.7406 76.5767 35.558 76.565 34.331C76.5534 33.104 76.061 31.9305 75.1937 31.0625H75.1875Z"
                                fill="#31E200" />
                        </g>
                        <defs>
                            <clipPath id="clip0_615_7371">
                                <rect width="100" height="100" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                </div>
            <?php elseif (strcasecmp($_SESSION['status']['administrasi_prodi'], "ditolak") == 0): ?>
                <?php include __DIR__ . '/../../components/mahasiswa/info_data_ditolak.php' ?>
            <?php endif; ?>
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
                <button type="button" class="text-white" style="background-color: var(--color-navy-blue);"
                    data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>





<!-- Bootstrap Modal -->
<?php include __DIR__ . '/../../components/bs_modal/server_error.php' ?>




<!-- JavaScript for this page -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
<script>
    $(document).ready(() => {
        $('#administrasi-prodi-form').on('submit', function (e) {
            e.preventDefault();

            const data = new FormData($(this)[0]);

            $.ajax({
                url: '/administrasi-prodi',
                type: 'POST',
                data: data,
                processData: false,
                contentType: false,
                success: (response) => {
                    alert('Formulir sukses terkirim!');
                    location.reload();
                },
                error: (xhr, status, error) => {
                    $('#server-error-bs-modal').modal('show');
                }
            });
        })
    });
</script>