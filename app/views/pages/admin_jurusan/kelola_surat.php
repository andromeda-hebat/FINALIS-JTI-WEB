<main class="d-flex">
    <!-- Sidebar -->
    <?php include __DIR__ . '/../../components/admin_jurusan/sidebar.php' ?>
    <div class="flex-grow-1">

        <?php include __DIR__ . '/../../components/admin_jurusan/topbar.php' ?>

        <div class="halaman mx-5 ">
            <div class="d-flex w-100 justify-content-start mt-3">
                <h3 class="fw-bold" style="color: #052C65;">Daftar Template Surat</h3>
            </div>
            <div class="mt-3 d-flex justify-content-start w-100 align-items-center">
                
                <div style="background-color: #052C65; ">
                    <a href="/tambah-surat" class="text-decoration-none">
                        <div class="d-flex align-items-center mx-2 my-2">
                            <svg class="me-1" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_615_6182)">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M2.5 0C1.83696 0 1.20107 0.263392 0.732233 0.732233C0.263392 1.20107 0 1.83696 0 2.5L0 17.5C0 18.163 0.263392 18.7989 0.732233 19.2678C1.20107 19.7366 1.83696 20 2.5 20H17.5C18.163 20 18.7989 19.7366 19.2678 19.2678C19.7366 18.7989 20 18.163 20 17.5V2.5C20 1.83696 19.7366 1.20107 19.2678 0.732233C18.7989 0.263392 18.163 0 17.5 0L2.5 0ZM10.625 5.625C10.625 5.45924 10.5592 5.30027 10.4419 5.18306C10.3247 5.06585 10.1658 5 10 5C9.83424 5 9.67527 5.06585 9.55806 5.18306C9.44085 5.30027 9.375 5.45924 9.375 5.625V9.375H5.625C5.45924 9.375 5.30027 9.44085 5.18306 9.55806C5.06585 9.67527 5 9.83424 5 10C5 10.1658 5.06585 10.3247 5.18306 10.4419C5.30027 10.5592 5.45924 10.625 5.625 10.625H9.375V14.375C9.375 14.5408 9.44085 14.6997 9.55806 14.8169C9.67527 14.9342 9.83424 15 10 15C10.1658 15 10.3247 14.9342 10.4419 14.8169C10.5592 14.6997 10.625 14.5408 10.625 14.375V10.625H14.375C14.5408 10.625 14.6997 10.5592 14.8169 10.4419C14.9342 10.3247 15 10.1658 15 10C15 9.83424 14.9342 9.67527 14.8169 9.55806C14.6997 9.44085 14.5408 9.375 14.375 9.375H10.625V5.625Z"
                                        fill="#E4EEFF" />
                                </g>
                                <rect x="0.5" y="0.5" width="19" height="19" stroke="#E4EEFF" />
                                <defs>
                                    <clipPath id="clip0_615_6182">
                                        <rect width="20" height="20" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                            <p class="ms-1 my-0 text-white">Tambahkan</p>
                        </div>

                    </a>
                </div>
            </div>

            <div class="mt-3 w-100 border rounded shadow">
                <table class="table">
                    <thead>
                        <tr>
                            <th style="background-color:#E4EEFF ;">Surat</th>
                            <th style="background-color:#E4EEFF ;">Keperluan</th>
                            <th style="background-color:#E4EEFF ;">File</th>
                            <th class="text-center" style="background-color:#E4EEFF ;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Surat Pernyataan Publikasi</td>
                            <td>Formulir Tugas Akhir</td>
                            <td>SPP.pdf</td>
                            <td class="text-center">
                                <button type="button" value="hapus" id="submitBtn" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#statusModal">Hapus</button>
                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
</main>


<div class="modal" tabindex="-1" id="statusModal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Hapus Template Surat</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h6>Apakah anda yakin ingin menghapus data template surat ini ?</h6>
            </div>
            <div class="modal-footer">
                <button type="button" style="color: #052C65; border-color: #052C65; background-color: white"
                    data-bs-dismiss="modal">Batal</button>
                <a href="/kelola-surat">
                    <button type="button" class="text-white" style="background-color: #052C65;">Hapus</button>
                </a>

            </div>
        </div>
    </div>
</div>