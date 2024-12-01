<div class="d-flex">
    <?php include __DIR__ . '/../../components/mahasiswa/sidebar.php' ?>
    <div class="w-100 position-relative">
        <?php include __DIR__ . '/../../components/mahasiswa/topbar.php' ?>
        <main class="container px-4" style="margin-top: 5rem;">
            <h2 class="mt-2 ms-1 fw-bold" style="color: #052C65;">Formulir Tugas Akhir</h2>
            <div id="body-content" class="mt-4">
                <form id="tugas-akhir-form" action="/tugas-akhir" method="post" enctype="multipart/form-data">
                    <div class="card card-body" style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);">
                        <p class="mt-4">Upload berkas berikut untuk memverifikasi tugas akhir anda</p>
                        <label for="laporan" class="form-label mt-2 mb-0">Laporan Tugas Akhir/Skripsi</label>
                        <p class="mb-0" style="color:#7C7C7C ;">(Format PDF, maksimal 10 MB)</p>
                        <input type="file" name="tugas_akhir" accept=".pdf" id="laporan" class="form-control w-50">
                        <br>
                        <label for="program" class="form-label mt-3 mb-0">Program/Aplikasi Tugas Akhir</label>
                        <p class="mb-0" style="color: #7C7C7C;">(Format ZIP/RAR, maksimal 1GB).</p>
                        <input type="file" name="program_aplikasi" accept=".zip,.rar" id="program" class="form-control w-50">
                        <br>
                        <label for="upload" class="form-label mt-3 mb-0">Upload Bukti Publikasi</label>
                        <p class="mb-0" style="color: #7C7C7C;">File scan PDF</p>
                        <input type="file" name="publikasi_jurnal" accept=".pdf" id="upload" class="mb-5 form-control w-50">
                    </div>
                    <div class="d-flex justify-content-end">
                        <input type="submit" value="Kirim" id="submitBtn" class="text-white mt-3 px-3" style="background-color: #052C65;">
                    </div>
                </form>
            </div>
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
        $('#tugas-akhir-form').on('submit', function(e) {
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