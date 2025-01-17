<div class="d-flex">
    <?php include __DIR__ . '/../../components/mahasiswa/sidebar.php' ?>
    <div class="position-top w-100" style="margin-left: 35vh;">
        <?php include __DIR__ . '/../../components/general/topbar.php' ?>
        <main class="halaman mx-5 " style="min-height:100vh; margin-top:15vh;">
            <div class="d-flex flex-column">
                <h3 class="mt-2 fw-bold">Permintaan Surat Bebas Tanggungan</h3>
                <div class="card mt-3" style="height: 75vh; box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);">
                    <div class="card-body">
                        <?php if (strcasecmp($data['info_berkas'], 'lunas') == 0): ?>
                        <p class="mt-5 text-center">Selamat! Anda berhasil melunasi tanggungan bebas tanggungan tugas akhir. </p>
                        <p class="text-center">Silakan unduh berkas bebas tanggungan tugas akhir berikut: </p>
                        <div class="d-flex justify-content-center">
                            <button class="me-3 btn btn-outline-dark btn-sm rounded-pill" style="border-color: var(--color-navy-blue);"
                                    data-pdf="/files/Bebas-kompen-TI.pdf" data-bs-toggle="modal"
                                    data-bs-target="#pdfModal">Unduh berkas bebas tanggungan tugas akhir</button>
                        </div>
                        <?php else: ?>
                        <p class="p-5 mt-5 text-center m-auto">Surat Bebas Tanggungan Jurusan belom bisa dicetak.<br>
                        Mohon lunasi tanggungan administrasi prodi dan tugas akhir terlebih dahulu</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>





<?php ////////////////////// ?>
<?php //--BOOTSTRAP MODAL--/ ?>
<?php ////////////////////// ?>

<div class="modal fade" id="pdfModal" tabindex="-1" aria-labelledby="pdfModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="pdfModalLabel">PDF Preview</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <iframe src="/files/Bebas-Tanggungan-TA.pdf" id="pdfViewer" style="width: 100%; height: 500px;" frameborder="0"></iframe>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>