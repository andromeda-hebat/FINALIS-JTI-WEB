<?php require_once __DIR__ . '/../../components/bs_modal/file_viewer.php' ?>
<?php require_once __DIR__ . '/../../components/bs_modal/confirm_delete_data.php' ?>




<?php ////////////////////// ?>
<?php ///////--HTML--/////// ?>
<?php ////////////////////// ?>

<div class="d-flex">
    <?php include __DIR__ . '/../../components/admin_prodi/sidebar.php' ?>
    <div class="position-top w-100" style="margin-left: 35vh;">
        <?php include __DIR__ . '/../../components/general/topbar.php' ?>
        <main class="halaman mx-5 " style="min-height:100vh; margin-top:15vh;">
            <section class="mt-2">

                <div class="d-flex w-100 align-items-center ">
                    <a href="/permintaan-verifikasi-prodi">
                        <svg width="25" height="25" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_570_986)">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M26.25 1.875H3.75C3.25272 1.875 2.77581 2.07254 2.42417 2.42417C2.07254 2.77581 1.875 3.25272 1.875 3.75V26.25C1.875 26.7473 2.07254 27.2242 2.42417 27.5758C2.77581 27.9275 3.25272 28.125 3.75 28.125H26.25C26.7473 28.125 27.2242 27.9275 27.5758 27.5758C27.9275 27.2242 28.125 26.7473 28.125 26.25V3.75C28.125 3.25272 27.9275 2.77581 27.5758 2.42417C27.2242 2.07254 26.7473 1.875 26.25 1.875ZM3.75 0C2.75544 0 1.80161 0.395088 1.09835 1.09835C0.395088 1.80161 0 2.75544 0 3.75L0 26.25C0 27.2446 0.395088 28.1984 1.09835 28.9016C1.80161 29.6049 2.75544 30 3.75 30H26.25C27.2446 30 28.1984 29.6049 28.9016 28.9016C29.6049 28.1984 30 27.2446 30 26.25V3.75C30 2.75544 29.6049 1.80161 28.9016 1.09835C28.1984 0.395088 27.2446 0 26.25 0L3.75 0Z"
                                    fill="black" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M22.4997 15.0002C22.4997 15.2488 22.401 15.4873 22.2251 15.6631C22.0493 15.8389 21.8109 15.9377 21.5622 15.9377H10.7003L14.726 19.9615C14.8131 20.0486 14.8823 20.1521 14.9295 20.266C14.9766 20.3799 15.0009 20.5019 15.0009 20.6252C15.0009 20.7485 14.9766 20.8705 14.9295 20.9844C14.8823 21.0983 14.8131 21.2018 14.726 21.289C14.6388 21.3761 14.5353 21.4453 14.4214 21.4924C14.3076 21.5396 14.1855 21.5639 14.0622 21.5639C13.939 21.5639 13.8169 21.5396 13.703 21.4924C13.5891 21.4453 13.4856 21.3761 13.3985 21.289L7.77347 15.664C7.68617 15.5769 7.6169 15.4734 7.56964 15.3595C7.52237 15.2456 7.49805 15.1235 7.49805 15.0002C7.49805 14.8769 7.52237 14.7548 7.56964 14.6409C7.6169 14.527 7.68617 14.4235 7.77347 14.3365L13.3985 8.71146C13.5745 8.53542 13.8133 8.43652 14.0622 8.43652C14.3112 8.43652 14.5499 8.53542 14.726 8.71146C14.902 8.8875 15.0009 9.12625 15.0009 9.37521C15.0009 9.62416 14.902 9.86292 14.726 10.039L10.7003 14.0627H21.5622C21.8109 14.0627 22.0493 14.1615 22.2251 14.3373C22.401 14.5131 22.4997 14.7516 22.4997 15.0002Z"
                                    fill="black" />
                            </g>
                            <defs>
                                <clipPath id="clip0_570_986">
                                    <rect width="30" height="30" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                    </a>

                    <h3 class="ms-1 fw-bold mb-0" style="color: var(--color-navy-blue);">Detail Permintaan</h3>
                </div>


                <?php if ($data['user_file'] != false): ?>
                    <div class="card my-3 px-5 " style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);">
                        <div class="card-body row">
                            <div class="col me-5">
                                <div class="d-flex">
                                    <h5 class="mb-0" style="color: #8D8D8D;">Informasi Mahasiswa</h5>
                                    <svg class="ms-2" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_570_1010)">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M10 18.75C12.3206 18.75 14.5462 17.8281 16.1872 16.1872C17.8281 14.5462 18.75 12.3206 18.75 10C18.75 7.67936 17.8281 5.45376 16.1872 3.81282C14.5462 2.17187 12.3206 1.25 10 1.25C7.67936 1.25 5.45376 2.17187 3.81282 3.81282C2.17187 5.45376 1.25 7.67936 1.25 10C1.25 12.3206 2.17187 14.5462 3.81282 16.1872C5.45376 17.8281 7.67936 18.75 10 18.75ZM10 20C12.6522 20 15.1957 18.9464 17.0711 17.0711C18.9464 15.1957 20 12.6522 20 10C20 7.34784 18.9464 4.8043 17.0711 2.92893C15.1957 1.05357 12.6522 0 10 0C7.34784 0 4.8043 1.05357 2.92893 2.92893C1.05357 4.8043 0 7.34784 0 10C0 12.6522 1.05357 15.1957 2.92893 17.0711C4.8043 18.9464 7.34784 20 10 20Z"
                                                fill="#8D8D8D" />
                                            <path
                                                d="M11.1624 8.23486L8.29994 8.59361L8.19744 9.06861L8.75994 9.17236C9.12744 9.25986 9.19994 9.39236 9.11994 9.75861L8.19744 14.0936C7.95494 15.2149 8.32869 15.7424 9.20744 15.7424C9.88869 15.7424 10.6799 15.4274 11.0387 14.9949L11.1487 14.4749C10.8987 14.6949 10.5337 14.7824 10.2912 14.7824C9.94744 14.7824 9.82244 14.5411 9.91119 14.1161L11.1624 8.23486Z"
                                                fill="#8D8D8D" />
                                            <path
                                                d="M10 6.875C10.6904 6.875 11.25 6.31536 11.25 5.625C11.25 4.93464 10.6904 4.375 10 4.375C9.30964 4.375 8.75 4.93464 8.75 5.625C8.75 6.31536 9.30964 6.875 10 6.875Z"
                                                fill="#8D8D8D" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_570_1010">
                                                <rect width="20" height="20" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>

                                <div class="d-flex align-items-center mb-0 mt-2">
                                    <img src="data:image/png;base64,<?= $data['user_file']->getFotoProfil() ?>"
                                        alt="Foto profil" class="rounded-circle"
                                        style="width: 30px; height: 30px; background-color: #ddd;">
                                    <div class="ms-3">
                                        <p class="my-0"><?= $data['user_file']->getNamaLengkap() ?></p>
                                        <p class="my-0">NIM <span><?= $data['user_file']->getNim() ?></span></p>
                                    </div>
                                </div>
                            </div>

                            <div class="col me-5">
                                <div class="d-flex">
                                    <h5 style="color: #8D8D8D;">Informasi Permintaan</h5>
                                    <svg class="ms-2" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_570_1010)">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M10 18.75C12.3206 18.75 14.5462 17.8281 16.1872 16.1872C17.8281 14.5462 18.75 12.3206 18.75 10C18.75 7.67936 17.8281 5.45376 16.1872 3.81282C14.5462 2.17187 12.3206 1.25 10 1.25C7.67936 1.25 5.45376 2.17187 3.81282 3.81282C2.17187 5.45376 1.25 7.67936 1.25 10C1.25 12.3206 2.17187 14.5462 3.81282 16.1872C5.45376 17.8281 7.67936 18.75 10 18.75ZM10 20C12.6522 20 15.1957 18.9464 17.0711 17.0711C18.9464 15.1957 20 12.6522 20 10C20 7.34784 18.9464 4.8043 17.0711 2.92893C15.1957 1.05357 12.6522 0 10 0C7.34784 0 4.8043 1.05357 2.92893 2.92893C1.05357 4.8043 0 7.34784 0 10C0 12.6522 1.05357 15.1957 2.92893 17.0711C4.8043 18.9464 7.34784 20 10 20Z"
                                                fill="#8D8D8D" />
                                            <path
                                                d="M11.1624 8.23486L8.29994 8.59361L8.19744 9.06861L8.75994 9.17236C9.12744 9.25986 9.19994 9.39236 9.11994 9.75861L8.19744 14.0936C7.95494 15.2149 8.32869 15.7424 9.20744 15.7424C9.88869 15.7424 10.6799 15.4274 11.0387 14.9949L11.1487 14.4749C10.8987 14.6949 10.5337 14.7824 10.2912 14.7824C9.94744 14.7824 9.82244 14.5411 9.91119 14.1161L11.1624 8.23486Z"
                                                fill="#8D8D8D" />
                                            <path
                                                d="M10 6.875C10.6904 6.875 11.25 6.31536 11.25 5.625C11.25 4.93464 10.6904 4.375 10 4.375C9.30964 4.375 8.75 4.93464 8.75 5.625C8.75 6.31536 9.30964 6.875 10 6.875Z"
                                                fill="#8D8D8D" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_570_1010">
                                                <rect width="20" height="20" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                                <div class="d-flex mb-0 mt-2">
                                    <div class="me-5">
                                        <p class="my-0" style="color: #8D8D8D;">Jenis</p>
                                        <p class="my-0">Administrasi Prodi</p>
                                    </div>
                                    <div class="mx-5">
                                        <p class="my-0" style="color: #8D8D8D;">ID</p>
                                        <p class="my-0"><?= $data['user_file']->getIdVerifikasi() ?></p>
                                    </div>
                                    <div class="ms-5">
                                        <p class="my-0" style="color: #8D8D8D;">Status</p>
                                        <?php include __DIR__ . '/../../atoms/badge_' . strtolower($data['user_file']->getStatusVerifikasi()) . '.php' ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mt-2 px-5 py-2 " style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);">
                        <div class="card-body row">
                            <div class="col">
                                <div class="d-flex align-items-center">
                                    <h5 class="me-1 my-0">Detail Informasi</h4>
                                        <svg class="ms-1" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_570_1010)">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M10 18.75C12.3206 18.75 14.5462 17.8281 16.1872 16.1872C17.8281 14.5462 18.75 12.3206 18.75 10C18.75 7.67936 17.8281 5.45376 16.1872 3.81282C14.5462 2.17187 12.3206 1.25 10 1.25C7.67936 1.25 5.45376 2.17187 3.81282 3.81282C2.17187 5.45376 1.25 7.67936 1.25 10C1.25 12.3206 2.17187 14.5462 3.81282 16.1872C5.45376 17.8281 7.67936 18.75 10 18.75ZM10 20C12.6522 20 15.1957 18.9464 17.0711 17.0711C18.9464 15.1957 20 12.6522 20 10C20 7.34784 18.9464 4.8043 17.0711 2.92893C15.1957 1.05357 12.6522 0 10 0C7.34784 0 4.8043 1.05357 2.92893 2.92893C1.05357 4.8043 0 7.34784 0 10C0 12.6522 1.05357 15.1957 2.92893 17.0711C4.8043 18.9464 7.34784 20 10 20Z"
                                                    fill="#8D8D8D" />
                                                <path
                                                    d="M11.1624 8.23486L8.29994 8.59361L8.19744 9.06861L8.75994 9.17236C9.12744 9.25986 9.19994 9.39236 9.11994 9.75861L8.19744 14.0936C7.95494 15.2149 8.32869 15.7424 9.20744 15.7424C9.88869 15.7424 10.6799 15.4274 11.0387 14.9949L11.1487 14.4749C10.8987 14.6949 10.5337 14.7824 10.2912 14.7824C9.94744 14.7824 9.82244 14.5411 9.91119 14.1161L11.1624 8.23486Z"
                                                    fill="#8D8D8D" />
                                                <path
                                                    d="M10 6.875C10.6904 6.875 11.25 6.31536 11.25 5.625C11.25 4.93464 10.6904 4.375 10 4.375C9.30964 4.375 8.75 4.93464 8.75 5.625C8.75 6.31536 9.30964 6.875 10 6.875Z"
                                                    fill="#8D8D8D" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_570_1010">
                                                    <rect width="20" height="20" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                </div>

                                <p class="mt-3 mb-0">Distribusi Laporan Skripsi</p>
                                <p style="color: var(--color-light-gray)"><?= $data['user_file']->getDistribusiSkripsi() ?>
                                </p>
                                <button class="btn-preview-file btn-secondary"
                                    data-pdf-name="<?= htmlspecialchars($data['user_file']->getDistribusiSkripsi()) ?>"
                                    data-pdf-sub-category="distribusi_tugas_akhir"
                                    data-bs-toggle="modal"
                                    data-bs-target="#file-preview-modal">Buka file</button>

                                <p class="mt-3 mb-0">Distribusi Laporan Magang</p>
                                <p style="color: var(--color-light-gray)"><?= $data['user_file']->getDistribusiMagang() ?>
                                </p>
                                <button class="btn-preview-file btn-secondary"
                                    data-pdf-name="<?= htmlspecialchars($data['user_file']->getDistribusiMagang()) ?>"
                                    data-pdf-sub-category="distribusi_magang"
                                    data-bs-toggle="modal"
                                    data-bs-target="#file-preview-modal">Buka file</button>

                                <p class="mt-3 mb-0">Distribusi Laporan Kompensasi</p>
                                <p style="color: var(--color-light-gray)"><?= $data['user_file']->getSuratBebasKompen() ?>
                                </p>
                                <button class="btn-preview-file btn-secondary"
                                    data-pdf-name="<?= htmlspecialchars($data['user_file']->getSuratBebasKompen()) ?>"
                                    data-pdf-sub-category="bebas_kompen"
                                    data-bs-toggle="modal"
                                    data-bs-target="#file-preview-modal">Buka file</button>

                                <p class="mt-3 mb-0">Sertifikat TOEIC</p>
                                <p style="color: var(--color-light-gray)"><?= $data['user_file']->getToeic() ?></p>
                                <button class="btn-preview-file btn-secondary"
                                    data-pdf-name="<?= htmlspecialchars($data['user_file']->getToeic()) ?>"
                                    data-pdf-sub-category="toeic"
                                    data-bs-toggle="modal"
                                    data-bs-target="#file-preview-modal">Buka file</button>
                            </div>

                            <form id="form-verify"
                                action="/permintaan-verifikasi-prodi/detail/<?= $data['user_file']->getIdVerifikasi() ?>"
                                method="PATCH" class="col w-100">
                                <h5 clas="my-0">Proses Verifikasi</h5>
                                <p>Staff Administrasi Prodi</p>
                                <input type="hidden" name="id_berkas" value="<?= $data['user_file']->getIdBerkas() ?>">
                                <div class="d-flex mb-3">
                                    <div class="d-flex me-3 ms-3">
                                        <input type="radio" name="is_verified" value="true" id="verify">
                                        <label for="verify">Verifikasi</label>
                                    </div>
                                    <div class="d-flex ms-3">
                                        <input type="radio" name="is_verified" value="false" id="reject">
                                        <label for="reject">Tolak</label>
                                    </div>
                                </div>
                                <textarea name="description" id="description"
                                    placeholder="Tambahkan keterangan kepada pihak mahasiswa"
                                    style="resize: none; min-width: 80%; min-height: 60%"></textarea>
                                <div class="d-flex justify-content-end">
                                    <button type="submit" value="Kirim" id="submitBtn" class="px-4 text-white mt-3"
                                        style="background-color: var(--color-navy-blue);">Kirim</button>
                                </div>
                            </form>
                        </div>
                    </div>
                <?php else: ?>
                    <div class="card justify-content-center align-items-center"
                        style="min-height: 60vh; box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);">
                        <h1>Data tidak bisa ditemukan!</h1>
                    </div>
                <?php endif; ?>
            </section>
        </main>
    </div>
</div>





<?php ////////////////////// ?>
<?php //--BOOTSTRAP MODAL--/ ?>
<?php ////////////////////// ?>

<?php FileViewer(true, true, "administrasi_prodi") ?>
<?php Alert("info-success-bs-modal", "Berhasil!", "Sukses melakukan verifikasi berkas pengajuan administrasi prodi!") ?>
<?php Alert("info-error-bs-modal", "Gagal!", "Gagal melakukan verifikasi berkas pengajuan administrasi prodi!") ?>





<?php ////////////////////// ?>
<?php ////--JAVASCRIPT--//// ?>
<?php ////////////////////// ?>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        $('#form-verify').on('submit', function (e) {
            e.preventDefault();

            const data = new FormData($(this)[0]);

            const formObject = {};
            data.forEach((value, key) => {
                formObject[key] = value;
            });

            $.ajax({
                url: $(this).attr('action'),
                type: $(this).attr('method'),
                data: JSON.stringify(formObject),
                processData: false,
                contentType: 'application/json',
                success: function (response) {
                    $('#info-success-bs-modal').modal('show');
                },
                error: (xhr, status, error) => {
                    $('#info-error-bs-modal').modal('show');
                }
            });
        });
    });
</script>
