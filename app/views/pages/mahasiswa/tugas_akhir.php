<div class="d-flex">
    <?php include __DIR__ . '/../../components/mahasiswa/sidebar.php' ?>
    <div class="position-top w-100" style="margin-left: 35vh;">
        <?php include __DIR__ . '/../../components/general/topbar.php' ?>
        <main class="halaman mx-5 " style="min-height:100vh; margin-top:15vh;">
            <h3 class="mt-2 ms-1 fw-bold">Formulir Tugas Akhir</h2>

            <div id="empty-form-content" class="mt-4" style="display: <?= (strcasecmp($data['info_berkas'], 'belum diajukan') == 0) ? 'block' : 'none'; ?>;">
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
                            style="background-color: var(--color-navy-blue);">
                    </div>
                </form>
            </div>
            
            <?php include __DIR__ . '/../../components/mahasiswa/info_data_berkas.php' ?>
        </main>
    </div>
</div>





<?php ////////////////////// ?>
<?php //--BOOTSTRAP MODAL--/ ?>
<?php ////////////////////// ?>

<?php include_once __DIR__ . '/../../components/bs_modal/server_error.php' ?>
<?php include_once __DIR__ . '/../../components/bs_modal/client_error.php' ?>





<?php ////////////////////// ?>
<?php ////--JAVASCRIPT--//// ?>
<?php ////////////////////// ?>

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
                    location.reload();
                },
                error: (xhr, status, error) => {
                    $('#server-error-bs-modal').modal('show');
                }
            });
        })
    });
</script>