<div class="d-flex">
    <?php include __DIR__ . '/../../components/mahasiswa/sidebar.php' ?>
    <div class="w-100 position-relative">
        <?php include __DIR__ . '/../../components/mahasiswa/topbar.php' ?>
        <main class="container" style="margin-top: 5rem;">
            <!-- Status Formulir -->
            <div class="d-flex align-items-center mb-3">
                <svg class="me-2" width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_612_5122)">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M26.25 1.875H3.75C3.25272 1.875 2.77581 2.07254 2.42417 2.42417C2.07254 2.77581 1.875 3.25272 1.875 3.75V26.25C1.875 26.7473 2.07254 27.2242 2.42417 27.5758C2.77581 27.9275 3.25272 28.125 3.75 28.125H26.25C26.7473 28.125 27.2242 27.9275 27.5758 27.5758C27.9275 27.2242 28.125 26.7473 28.125 26.25V3.75C28.125 3.25272 27.9275 2.77581 27.5758 2.42417C27.2242 2.07254 26.7473 1.875 26.25 1.875ZM3.75 0C2.75544 0 1.80161 0.395088 1.09835 1.09835C0.395088 1.80161 0 2.75544 0 3.75L0 26.25C0 27.2446 0.395088 28.1984 1.09835 28.9016C1.80161 29.6049 2.75544 30 3.75 30H26.25C27.2446 30 28.1984 29.6049 28.9016 28.9016C29.6049 28.1984 30 27.2446 30 26.25V3.75C30 2.75544 29.6049 1.80161 28.9016 1.09835C28.1984 0.395088 27.2446 0 26.25 0L3.75 0Z"
                            fill="black" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M22.5 15.0002C22.5 15.2488 22.4012 15.4873 22.2254 15.6631C22.0496 15.8389 21.8111 15.9377 21.5625 15.9377H10.7006L14.7262 19.9615C14.8134 20.0486 14.8825 20.1521 14.9297 20.266C14.9769 20.3799 15.0012 20.5019 15.0012 20.6252C15.0012 20.7485 14.9769 20.8705 14.9297 20.9844C14.8825 21.0983 14.8134 21.2018 14.7262 21.289C14.6391 21.3761 14.5356 21.4453 14.4217 21.4924C14.3078 21.5396 14.1857 21.5639 14.0625 21.5639C13.9392 21.5639 13.8171 21.5396 13.7032 21.4924C13.5894 21.4453 13.4859 21.3761 13.3987 21.289L7.77372 15.664C7.68641 15.5769 7.61714 15.4734 7.56988 15.3595C7.52262 15.2456 7.49829 15.1235 7.49829 15.0002C7.49829 14.8769 7.52262 14.7548 7.56988 14.6409C7.61714 14.527 7.68641 14.4235 7.77372 14.3365L13.3987 8.71146C13.5748 8.53542 13.8135 8.43652 14.0625 8.43652C14.3114 8.43652 14.5502 8.53542 14.7262 8.71146C14.9023 8.8875 15.0012 9.12625 15.0012 9.37521C15.0012 9.62416 14.9023 9.86292 14.7262 10.039L10.7006 14.0627H21.5625C21.8111 14.0627 22.0496 14.1615 22.2254 14.3373C22.4012 14.5131 22.5 14.7516 22.5 15.0002Z"
                            fill="black" />
                    </g>
                    <defs>
                        <clipPath id="clip0_612_5122">
                            <rect width="30" height="30" fill="white" />
                        </clipPath>
                    </defs>
                </svg>
    
                <h5 class="m-0">Status Formulir</h5>
            </div>
            <div class="card shadow mb-4">
                <div class="card-body mx-3">
                    <div class="list-group">
                        <div class="d-flex justify-content-between align-items-center py-2">
                            <label for="tugasAkhir" class="form-check-label">Tugas Akhir</label>
                            <div>
                                <input type="radio" name="statusFormulir" id="tugasAkhir"
                                    class="form-check-input me-2 border-dark">
                                <button class="btn btn-outline-dark btn-sm rounded-pill">Detail</button>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center py-2">
    
                            <label for="adminProdi" class="form-check-label">Administrasi Prodi</label>
                            <div>
                                <input type="radio" name="statusFormulir" id="adminProdi"
                                    class="form-check-input me-2 border-black">
                                <button class="btn btn-outline-dark btn-sm rounded-pill">Detail</button>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center py-2">
                            <label for="bebasTanggungan" class="form-check-label">Bebas Tanggungan</label>
                            <div>
                                <input type="radio" name="statusFormulir" id="bebasTanggungan"
                                    class="form-check-input me-2 border-dark">
                                <button class="btn btn-outline-dark btn-sm rounded-pill">Detail</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
            <!-- Template Surat -->
            <div class=" mt-5">
                <div class="d-flex align-items-center">
                    <svg class="me-2" width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M0 7.5C0 6.50544 0.395088 5.55161 1.09835 4.84835C1.80161 4.14509 2.75544 3.75 3.75 3.75H26.25C27.2446 3.75 28.1984 4.14509 28.9016 4.84835C29.6049 5.55161 30 6.50544 30 7.5V22.5C30 23.4946 29.6049 24.4484 28.9016 25.1516C28.1984 25.8549 27.2446 26.25 26.25 26.25H3.75C2.75544 26.25 1.80161 25.8549 1.09835 25.1516C0.395088 24.4484 0 23.4946 0 22.5V7.5ZM3.75 5.625C3.25272 5.625 2.77581 5.82254 2.42417 6.17417C2.07254 6.52581 1.875 7.00272 1.875 7.5V7.90688L15 15.7819L28.125 7.90688V7.5C28.125 7.00272 27.9275 6.52581 27.5758 6.17417C27.2242 5.82254 26.7473 5.625 26.25 5.625H3.75ZM28.125 10.0931L19.2037 15.4462L28.125 20.8388V10.095V10.0931ZM28.0612 22.9894L17.3831 16.5375L15 17.9681L12.615 16.5375L1.93875 22.9875C2.046 23.3858 2.28159 23.7376 2.60904 23.9885C2.93649 24.2393 3.33752 24.3752 3.75 24.375H26.25C26.6622 24.3753 27.0631 24.2397 27.3905 23.9892C27.7179 23.7387 27.9537 23.3873 28.0612 22.9894ZM1.875 20.8388L10.7962 15.4462L1.875 10.0931V20.8369V20.8388Z"
                            fill="black" />
                    </svg>
    
                    <h5 class="m-0">Template Surat</h5>
                </div>
                <div class="mt-2 mx-4 ps-2">
                    <div class="d-flex justify-content-between align-items-center py-2">
                        <div>Surat Pernyataan Publikasi</div>
                        <div>
                            <button class="me-3 btn btn-outline-dark btn-sm rounded-pill">Preview</button>
                            <button class="btn btn-outline-dark btn-sm rounded-pill">Download</button>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center py-2">
                        <div>Tanda Terima Laporan PKL/Magang</div>
                        <div>
                            <button class="me-3 btn btn-outline-dark btn-sm rounded-pill">Preview</button>
                            <button class="btn btn-outline-dark btn-sm rounded-pill">Download</button>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center py-2">
                        <div>Tanda Terima Laporan TA/Skripsi</div>
                        <div>
                            <button class="me-3 btn btn-outline-dark btn-sm rounded-pill">Preview</button>
                            <button class="btn btn-outline-dark btn-sm rounded-pill">Download</button>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center py-2">
                        <div>Surat Bebas Kompen</div>
                        <div>
                            <button class="me-3 btn btn-outline-dark btn-sm rounded-pill">Preview</button>
                            <button class="btn btn-outline-dark btn-sm rounded-pill">Download</button>
                        </div>
                    </div>
    
                </div>
    
            </div>
        </main>
    </div>
</div>