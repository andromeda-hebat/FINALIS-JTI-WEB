<div class="d-flex">
    <?php include __DIR__ . '/../../components/mahasiswa/sidebar.php' ?>
    <div class="w-100 position-relative">
        <?php include __DIR__ . '/../../components/mahasiswa/topbar.php' ?>
        <main class="container px-5" style="margin-top: 5rem;">
            <!-- Status Formulir -->
            <section>
                <div class="d-flex align-items-center mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6 me-2" width="30" height="30">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15 13.5H9m4.06-7.19-2.12-2.12a1.5 1.5 0 0 0-1.061-.44H4.5A2.25 2.25 0 0 0 2.25 6v12a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9a2.25 2.25 0 0 0-2.25-2.25h-5.379a1.5 1.5 0 0 1-1.06-.44Z" />
                    </svg>
                    <h2 class="m-0 fw-bold" style="color: #052C65;">Status Formulir</h2>
                </div>
                <div class="card mb-4 px-4" style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);">
                    <div class="card-body">
                        <div class="list-group">
                            <div class="d-flex justify-content-between align-items-center py-2">
                                <label for="tugasAkhir" class="form-check-label">Tugas Akhir</label>
                                <div>
                                    <input type="radio" name="statusFormulir" id="tugasAkhir"
                                        class="form-check-input me-2 border-dark my-2" disabled
                                        <?= (strcasecmp($_SESSION['status']['tugas_akhir'], "diajukan") == 0) ? "checked" : "" ?>>
                                    <a href="/tugas-akhir" target="_blank"
                                        class="btn btn-outline-dark btn-sm rounded-pill"
                                        style="border-color: #052C65;">Detail
                                    </a>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center py-2">

                                <label for="adminProdi" class="form-check-label">Administrasi Prodi</label>
                                <div>
                                    <input type="radio" name="statusFormulir" id="adminProdi"
                                        class="form-check-input me-2 border-black" disabled
                                        <?= (strcasecmp($_SESSION['status']['administrasi_prodi'], "disetujui") == 0) ? "checked" : "" ?>>
                                    <!-- <button class="btn btn-outline-dark btn-sm rounded-pill" style="border-color: #052C65;">Detail</button> -->
                                    <a href="/administrasi-prodi" class="btn btn-outline-dark btn-sm rounded-pill"
                                        style="border-color: #052C65;">Detail</a>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center py-2">
                                <label for="bebasTanggungan" class="form-check-label">Bebas Tanggungan</label>
                                <div>
                                    <input type="radio" name="statusFormulir" id="bebasTanggungan"
                                        class="form-check-input me-2 border-dark" disabled="">
                                    <a href="/permintaan-surat" class="btn btn-outline-dark btn-sm rounded-pill"
                                        style="border-color: #052C65;">Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
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
                    <h2 class="m-0 fw-bold" style="color: #052C65;">Template Surat</h2>
                </div>
                <div class="card mt-2 px-4" style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center py-2">
                            <div>Surat Pernyataan Publikasi</div>
                            <div>
                                <a href="/files/Surat_Pernyataan_Publikasi.pdf" target="_blank"
                                    class="me-3 btn btn-outline-dark btn-sm rounded-pill"
                                    style="border-color: #052C65;">Preview
                                </a>        
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center py-2">
                            <div>Tanda Terima Laporan PKL/Magang</div>
                            <div>
                                <a href="/files/Tanda Terima Laporan PKL_Magang.pdf" target="_blank"
                                    class="me-3 btn btn-outline-dark btn-sm rounded-pill"
                                    style="border-color: #052C65;">Preview
                                </a>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center py-2">
                            <div>Tanda Terima Laporan TA/Skripsi</div>
                            <div>
                                <a href="/files/Tanda Terima Laporan Skripsi_TI.pdf" target="_blank"
                                    class="me-3 btn btn-outline-dark btn-sm rounded-pill"
                                    style="border-color: #052C65;">Preview
                                </a>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center py-2">
                            <div>Surat Bebas Kompen</div>
                            <div>
                                <a href="/files/Bebas Kompen_TI.pdf" target="_blank"
                                    class="me-3 btn btn-outline-dark btn-sm rounded-pill"
                                    style="border-color: #052C65;">Preview
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>
</div>