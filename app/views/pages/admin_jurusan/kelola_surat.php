<main class="d-flex">
    <!-- Sidebar -->
    <?php include __DIR__ . '/../../components/admin_jurusan/sidebar.php' ?>
    <div class="flex-grow-1">

        <?php include __DIR__ . '/../../components/admin_jurusan/topbar.php' ?>

        <div class="halaman mx-5 ">
            <div class="d-flex w-100 justify-content-start mt-3">
                <h3 class="fw-bold" style="color: #052C65;">Daftar Template Surat</h3>
            </div>
            <div class="mt-3 d-flex justify-content-between w-100 align-items-center">
                <!-- Sort -->
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

                <div class="d-flex align-items-center">
                    <svg class="me-1" width="20" height="20" viewBox="0 0 20 20" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_530_8608)">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M14.3751 18.7499C14.5408 18.7499 14.6998 18.684 14.817 18.5668C14.9342 18.4496 15.0001 18.2907 15.0001 18.1249V3.38365L18.9326 7.3174C19.0499 7.43476 19.2091 7.50069 19.3751 7.50069C19.541 7.50069 19.7002 7.43476 19.8176 7.3174C19.9349 7.20004 20.0008 7.04087 20.0008 6.8749C20.0008 6.70893 19.9349 6.54976 19.8176 6.4324L14.8176 1.4324C14.7595 1.37419 14.6905 1.32801 14.6146 1.29651C14.5387 1.265 14.4573 1.24878 14.3751 1.24878C14.2928 1.24878 14.2114 1.265 14.1355 1.29651C14.0596 1.32801 13.9906 1.37419 13.9326 1.4324L8.93256 6.4324C8.8152 6.54976 8.74927 6.70893 8.74927 6.8749C8.74927 7.04087 8.8152 7.20004 8.93256 7.3174C9.04992 7.43476 9.20909 7.50069 9.37506 7.50069C9.54103 7.50069 9.7002 7.43476 9.81756 7.3174L13.7501 3.38365V18.1249C13.7501 18.2907 13.8159 18.4496 13.9331 18.5668C14.0503 18.684 14.2093 18.7499 14.3751 18.7499ZM5.62506 1.2499C5.79082 1.2499 5.94979 1.31574 6.067 1.43295C6.18421 1.55016 6.25006 1.70914 6.25006 1.8749V16.6161L10.1826 12.6824C10.2999 12.565 10.4591 12.4991 10.6251 12.4991C10.791 12.4991 10.9502 12.565 11.0676 12.6824C11.1849 12.7998 11.2508 12.9589 11.2508 13.1249C11.2508 13.2909 11.1849 13.45 11.0676 13.5674L6.06756 18.5674C6.0095 18.6256 5.94053 18.6718 5.8646 18.7033C5.78867 18.7348 5.70727 18.751 5.62506 18.751C5.54285 18.751 5.46145 18.7348 5.38552 18.7033C5.30958 18.6718 5.24061 18.6256 5.18256 18.5674L0.182557 13.5674C0.0651988 13.45 -0.000732426 13.2909 -0.000732422 13.1249C-0.000732418 12.9589 0.0651988 12.7998 0.182557 12.6824C0.299915 12.565 0.459087 12.4991 0.625057 12.4991C0.791027 12.4991 0.950199 12.565 1.06756 12.6824L5.00006 16.6161V1.8749C5.00006 1.70914 5.06591 1.55016 5.18312 1.43295C5.30033 1.31574 5.4593 1.2499 5.62506 1.2499Z"
                                fill="black" />
                        </g>
                        <defs>
                            <clipPath id="clip0_530_8608">
                                <rect width="20" height="20" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                    <p class="m-0">Sorting</p>
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