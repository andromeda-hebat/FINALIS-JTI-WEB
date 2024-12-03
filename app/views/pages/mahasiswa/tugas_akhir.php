<div class="d-flex">
    <?php include __DIR__ . '/../../components/mahasiswa/sidebar.php' ?>
    <div class="w-100 position-relative">
        <?php include __DIR__ . '/../../components/mahasiswa/topbar.php' ?>
        <main class="container px-5" style="margin-top: 5rem;">
            <h3 class="mt-2 ms-1 fw-bold" style="color: #052C65;">Formulir Tugas Akhir</h2>

                <?php if (strcasecmp($_SESSION['status']['tugas_akhir'], "kosong") == 0): ?>
                    <div id="body-content" class="mt-4">
                        <form id="tugas-akhir-form" action="/tugas-akhir" method="post" enctype="multipart/form-data">
                            <div class="card card-body px-4" style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);">
                                <p class="mt-4">Unggah berkas berikut untuk memverifikasi tugas akhir anda</p>
                                <label for="laporan" class="form-label mt-2 mb-0">Laporan Tugas Akhir/Skripsi</label>
                                <p class="mb-0" style="color:#7C7C7C ;">(Format PDF, maksimal 10 MB)</p>
                                <input type="file" name="tugas_akhir" accept=".pdf" id="laporan" class="form-control w-50">
                                <br>
                                <label for="program" class="form-label mt-3 mb-0">Program/Aplikasi Tugas Akhir</label>
                                <p class="mb-0" style="color: #7C7C7C;">(Format ZIP/RAR, maksimal 1GB).</p>
                                <input type="file" name="program_aplikasi" accept=".zip,.rar" id="program"
                                    class="form-control w-50">
                                <br>
                                <label for="upload" class="form-label mt-3 mb-0">Upload Bukti Publikasi</label>
                                <p class="mb-0" style="color: #7C7C7C;">File scan PDF</p>
                                <input type="file" name="publikasi_jurnal" accept=".pdf" id="upload"
                                    class="mb-5 form-control w-50">
                            </div>
                            <div class="d-flex justify-content-end">
                                <input type="submit" value="Kirim" id="submitBtn" class="text-white mt-3 px-3"
                                    style="background-color: #052C65;">
                            </div>
                        </form>
                    </div>
                <?php elseif (strcasecmp($_SESSION['status']['tugas_akhir'], "diajukan") == 0): ?>
                    <div id="body-content"
                        class="mt-4 card card-body d-flex flex-column justify-content-center align-items-center"
                        style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25); min-height: 75vh; max-height: 75vh;">
                        <p>Data berhasil dikirim !</p>
                        <p>Mohon tunggu verifikasi dari admin dalam 2x24 jam di hari kerja.</p>
                    </div>
                <?php elseif (strcasecmp($_SESSION['status']['tugas_akhir'], "disetujui") == 0): ?>
                    <div id="body-content"
                        class="mt-4 card card-body d-flex flex-column justify-content-center align-items-center"
                        style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25); min-height: 75vh; max-height: 75vh;">
                        <p class="text-center">Selamat data anda lolos verifikasi tugas akhir! <br>
                            Selanjutnya selesaikan administrasi prodi untuk dapat mengajukan permintaan surat bebas
                            tanggungan
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
                <?php elseif (strcasecmp($_SESSION['status']['tugas_akhir'], "ditolak") == 0): ?>
                    <div id="body-content" class="mt-4 card"
                        style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25); min-height: 65vh;">
                        <div class="mx-4 my-3 card-body">
                            <p class="text-center">
                                Formulir yang anda ajukan belum dapat diverifikasi periksa kembali berkas yang<br>anda
                                upload,
                                baca keterangan dari admin!
                            </p>
                            <p class="mt-4 text-start fw-bold">Keterangan : </p>

                            <textarea name="description" id="keterangan" cols="115" rows="10"
                                style="resize: none;"></textarea>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end mt-3">
                        <button class="px-4 text-white" style="background-color: #052C65; border-color: #052C65;">Edit</button>
                    </div>

                <?php endif; ?>
        </main>
    </div>
</div>




<!-- Bootstrap Modal -->
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



<!-- JavaScript for this page -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
<script>
    $(document).ready(() => {
        $('#tugas-akhir-form').on('submit', function (e) {
            e.preventDefault();

            const data = new FormData($(this)[0]);

            $.ajax({
                url: '/tugas-akhir',
                type: 'POST',
                data: data,
                processData: false,
                contentType: false,
                success: (response) => {
                    alert('Formulir sukses terkirim!');
                },
                error: (xhr, status, error) => {
                    alert('Telah terjadi error pada pengiriman formulir!')
                }
            });
        })
    });
</script>