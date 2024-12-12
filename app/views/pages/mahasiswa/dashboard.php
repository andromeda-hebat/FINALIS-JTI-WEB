<div class="d-flex">
    <?php include __DIR__ . '/../../components/mahasiswa/sidebar.php' ?>
    <div class="position-top w-100" style="margin-left: 35vh;">
        <?php include __DIR__ . '/../../components/general/topbar.php' ?>
        <main class="halaman mx-5 " style="min-height:100vh; margin-top:15vh;">
            <!-- Status Formulir -->
            <section>
                <div class="d-flex align-items-center mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6 me-2" width="30" height="30">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15 13.5H9m4.06-7.19-2.12-2.12a1.5 1.5 0 0 0-1.061-.44H4.5A2.25 2.25 0 0 0 2.25 6v12a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9a2.25 2.25 0 0 0-2.25-2.25h-5.379a1.5 1.5 0 0 1-1.06-.44Z" />
                    </svg>
                    <h3 class="m-0 fw-bold">Status Formulir</h3>
                </div>
                <div class="card mb-4 px-4" style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);">
                    <div class="card-body">
                        <div class="list-group">
                            <div class="d-flex justify-content-between align-items-center py-2">
                                <label for="tugasAkhir" class="form-check-label">Tugas Akhir</label>
                                <div class="d-flex">
                                    <p class="me-3 my-0">Status: <span><?= $_SESSION['status']['tugas_akhir'] ?></span>
                                    </p>
                                    <a href="/tugas-akhir" class="btn btn-outline-dark btn-sm rounded-pill"
                                        style="border-color: var(--color-navy-blue);">Detail
                                    </a>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center py-2">
                                <label for="adminProdi" class="form-check-label">Administrasi Prodi</label>
                                <div class="d-flex">
                                    <p class="me-3 my-0">Status:
                                        <span><?= $_SESSION['status']['administrasi_prodi'] ?></span>
                                    </p>
                                    <a href="/administrasi-prodi" class="btn btn-outline-dark btn-sm rounded-pill"
                                        style="border-color: var(--color-navy-blue);">Detail</a>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center py-2">
                                <label for="bebasTanggungan" class="form-check-label">Bebas Tanggungan</label>
                                <div class="d-flex">
                                    <p class="me-3 my-0">Status:
                                        <span><?= $_SESSION['status']['bebas_tanggungan'] ?></span>
                                    </p>
                                    <a href="/permintaan-surat" class="btn btn-outline-dark btn-sm rounded-pill"
                                        style="border-color: var(--color-navy-blue);">Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="card flex-row align-items-center border border-info text-primary"
                    style="background-color: rgba(116, 182, 222, 0.23) !important">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6 m-3" style="width: 20px;">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z" />
                    </svg>
                    <p class="my-0">Lihat petunjuk pengajuan pada halaman berikut: <a href="/petunjuk-pengajuan"
                            class="fw-bold">petunjuk pengajuan</a></p>
                </div>
            </section>
            <!-- Template Surat -->
            <section class="mt-5">
                <div class="d-flex align-items-center">
                    <svg class="me-2" width="30" height="30" viewBox="0 0 30 30" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M0 7.5C0 6.50544 0.395088 5.55161 1.09835 4.84835C1.80161 4.14509 2.75544 3.75 3.75 3.75H26.25C27.2446 3.75 28.1984 4.14509 28.9016 4.84835C29.6049 5.55161 30 6.50544 30 7.5V22.5C30 23.4946 29.6049 24.4484 28.9016 25.1516C28.1984 25.8549 27.2446 26.25 26.25 26.25H3.75C2.75544 26.25 1.80161 25.8549 1.09835 25.1516C0.395088 24.4484 0 23.4946 0 22.5V7.5ZM3.75 5.625C3.25272 5.625 2.77581 5.82254 2.42417 6.17417C2.07254 6.52581 1.875 7.00272 1.875 7.5V7.90688L15 15.7819L28.125 7.90688V7.5C28.125 7.00272 27.9275 6.52581 27.5758 6.17417C27.2242 5.82254 26.7473 5.625 26.25 5.625H3.75ZM28.125 10.0931L19.2037 15.4462L28.125 20.8388V10.095V10.0931ZM28.0612 22.9894L17.3831 16.5375L15 17.9681L12.615 16.5375L1.93875 22.9875C2.046 23.3858 2.28159 23.7376 2.60904 23.9885C2.93649 24.2393 3.33752 24.3752 3.75 24.375H26.25C26.6622 24.3753 27.0631 24.2397 27.3905 23.9892C27.7179 23.7387 27.9537 23.3873 28.0612 22.9894ZM1.875 20.8388L10.7962 15.4462L1.875 10.0931V20.8369V20.8388Z"
                            fill="black" />
                    </svg>
                    <h3 class="m-0 fw-bold">Template Surat</h3>
                </div>
                <div class="card mt-2 px-4" style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center py-2">
                            <div>Surat Pernyataan Publikasi</div>
                            <button class="me-3 btn btn-outline-dark btn-sm rounded-pill" style="border-color: var(--color-navy-blue);"
                                data-pdf="/files/Surat-pernyataan-publikasi.pdf" data-bs-toggle="modal"
                                data-bs-target="#pdfModal">Pratinjau</button>
                        </div>
                        <div class="d-flex justify-content-between align-items-center py-2">
                            <div>Tanda Terima Laporan PKL/Magang</div>
                            <button class="me-3 btn btn-outline-dark btn-sm rounded-pill" style="border-color: var(--color-navy-blue);"
                                data-pdf="/files/Tanda-terima-laporan-PKL-magang.pdf" data-bs-toggle="modal"
                                data-bs-target="#pdfModal">Pratinjau</button>
                        </div>
                        <div class="d-flex justify-content-between align-items-center py-2">
                            <div>Tanda Terima Laporan TA/Skripsi</div>
                            <button class="me-3 btn btn-outline-dark btn-sm rounded-pill" style="border-color: var(--color-navy-blue);"
                                data-pdf="/files/Tanda-terima-laporan-skripsi-TI.pdf" data-bs-toggle="modal"
                                data-bs-target="#pdfModal">Pratinjau</button>
                        </div>
                        <div class="d-flex justify-content-between align-items-center py-2">
                            <div>Surat Bebas Kompen</div>
                            <button class="me-3 btn btn-outline-dark btn-sm rounded-pill" style="border-color: var(--color-navy-blue);"
                                data-pdf="/files/Bebas-kompen-TI.pdf" data-bs-toggle="modal"
                                data-bs-target="#pdfModal">Pratinjau</button>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>
</div>






<!-- Bootstrap Modal -->
<div class="modal fade" id="pdfModal" tabindex="-1" aria-labelledby="pdfModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="pdfModalLabel">PDF Preview</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <iframe id="pdfViewer" style="width: 100%; height: 500px;" frameborder="0"></iframe>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>





<!-- JavaScript for this page -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        $('#pdfModal').on('show.bs.modal', function (event) {
            const button = $(event.relatedTarget);
            const pdfFile = button.data('pdf');

            $('#pdfViewer').attr('src', pdfFile);
        });

        $('#pdfModal').on('hidden.bs.modal', function () {
            $('#pdfViewer').attr('src', '');
        });
    });
</script>