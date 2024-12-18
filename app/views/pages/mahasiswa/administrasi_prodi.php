<?php require_once __DIR__ . '/../../components/bs_modal/alert.php' ?>





<?php ////////////////////// ?>
<?php ///////--HTML--/////// ?>
<?php ////////////////////// ?>

<div class="d-flex">
    <?php include __DIR__ . '/../../components/mahasiswa/sidebar.php' ?>
    <div class="position-top w-100" style="margin-left: 35vh;">
        <?php include __DIR__ . '/../../components/general/topbar.php' ?>
        <main class="halaman mx-5 " style="min-height:100vh; margin-top:15vh;">
            <h3 class="mt-2 ms-1 fw-bold">Formulir Administrasi Prodi</h3>
            <div id="empty-form-content" class="mt-4" style="display: <?php echo (strcasecmp($data['info_berkas'], 'belum diajukan') == 0) ? 'block' : 'none'; ?>;">
                <form id="administrasi-prodi-form" action="/administrasi-prodi" method="post" enctype="multipart/form-data">
                    <div class="card card-body" style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);">
                        <p class="mt-3">Upload berkas berikut untuk memverifikasi tanggungan prodi anda</p>
                        <label for="skripsi" class="form-label mb-0">Distribusi Laporan Skripsi</label>
                        <p class="mb-0" style="color:#7C7C7C ;">(File scan PDF)</p>
                        <input type="file" name="distribusi_tugas_akhir" accept=".pdf" id="input-laporan-ta"
                            class="form-control w-50">
                        <br>
                        <label for="magang" class="form-label mb-0">Distribusi Laporan Magang</label>
                        <p class="mb-0" style="color: #7C7C7C;">(File scan PDF).</p>
                        <input type="file" name="distribusi_magang" accept=".pdf" id="input-laporan-magang"
                            class="form-control w-50">
                        <br>
                        <label for="kompen" class="form-label mb-0">Surat Bebas Kompen</label>
                        <p class="mb-0" style="color: #7C7C7C;">(File scan PDF)</p>
                        <input type="file" name="bebas_kompen" accept=".pdf" id="input-bebas-kompen"
                            class="form-control w-50">
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

            <?php include __DIR__ . '/../../components/mahasiswa/info_data_berkas.php' ?>
        </main>
    </div>
</div>





<?php ////////////////////// ?>
<?php //--BOOTSTRAP MODAL--/ ?>
<?php ////////////////////// ?>

<?php Alert("info-success-bs-modal", "Berhasil!", "Sukses melakukan pengajuan berkas administrasi prodi!") ?>
<?php Alert("info-error-bs-modal", "Gagal!", "Gagal melakukan pengajuan berkas administrasi prodi!") ?>




<?php ////////////////////// ?>
<?php ////--JAVASCRIPT--//// ?>
<?php ////////////////////// ?>

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
                    $('#info-success-bs-modal').modal('show');
                    $('#info-success-bs-modal').on('hidden.bs.modal', () => location.reload());
                },
                error: (xhr, status, error) => {
                    $('#info-error-bs-modal').modal('show');
                }
            });
        })
    });
</script>