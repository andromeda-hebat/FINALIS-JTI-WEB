<div class="d-flex">
    <?php include __DIR__ . '/../../components/admin_jurusan/sidebar.php' ?>
    <div class="position-top w-100" style="margin-left: 35vh;">
        <?php include __DIR__ . '/../../components/general/topbar.php' ?>
        <main class="halaman mx-5 " style="min-height:100vh; margin-top:15vh;">
            <div class="d-flex w-100 justify-content-between">
                <h3 class="fw-bold" style="color: var(--color-navy-blue);">Kelola Data Mahasiswa</h3>
            </div>
            <div class="mt-3 d-flex justify-content-start w-100 align-items-center">
                <div style="background-color: var(--color-navy-blue);">
                    <a href="/kelola-mahasiswa/tambah" class="text-decoration-none">
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
                            <th>No.</th>
                            <th>NIM</th>
                            <th>Nama Lengkap</th>
                            <th>Email</th>
                            <th>Jurusan</th>
                            <th>Prodi</th>
                            <th>Tahun Masuk</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data['mhs_data'] as $key => $value): ?>
                        <tr>
                            <td><?= $value->getNomor() ?></td>
                            <td><?= $value->getUserId() ?></td>
                            <td><?= $value->getNamaLengkap() ?></td>
                            <td><?= $value->getEmail() ?></td>
                            <td><?= $value->getJurusan() ?></td>
                            <td><?= $value->getProdi() ?></td>
                            <td><?= $value->getTahunMasuk() ?></td>
                            <td class="text-center">
                                <a href="/kelola-mahasiswa/edit/<?= $value->getUserId() ?>" class="btn btn-primary">Edit</a>
                                <button type="button" value="hapus" id="deleteBtn" class="btn btn-danger"
                                    data-bs-toggle="modal" data-bs-target="#deleteModal">Hapus</button>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

            </div>
        </main>
</div>





<?php ////////////////////// ?>
<?php //--BOOTSTRAP MODAL--/ ?>
<?php ////////////////////// ?>

<?php include __DIR__ . '/../../components/bs_modal/sucess_update_berkas.php' ?>
<?php include __DIR__ . '/../../components/bs_modal/server_error.php' ?>

<div class="modal" tabindex="-1" id="deleteModal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Hapus Data Mahasiswa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h6>Apakah anda yakin ingin menghapus data ini ?</h6>
            </div>
            <div class="modal-footer">
                <button type="button"
                    style="color: var(--color-navy-blue); border-color: var(--color-navy-blue); background-color: white"
                    data-bs-dismiss="modal">Batal</button>
                <form action="/kelola-mahasiswa/<?= $value->getUserId() ?>" method="delete" id="form-delete-data">
                    <button type="submit" class="text-white"
                        style="background-color: var(--color-navy-blue);">Hapus</button>
                </form>
            </div>
        </div>
    </div>
</div>





<?php ////////////////////// ?>
<?php ////--JAVASCRIPT--//// ?>
<?php ////////////////////// ?>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        $('#form-delete-data').on('submit', function (e) {
            e.preventDefault();

            const formData = {};
            $(this).serializeArray().forEach(field => {
                formData[field.name] = field.value;
            });

            $.ajax({
                url: $(this).attr('action'),
                type: $(this).attr('method'),
                data: JSON.stringify(formData),
                processData: false,
                contentType: 'application/json',
                success: function (response) {
                    $('#info-success-update-modal').modal('show');
                },
                error: (xhr, status, error) => {
                    $('#server-error-bs-modal').modal('show');
                }
            })
        });
    });
</script>
