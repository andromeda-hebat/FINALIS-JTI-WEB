<?php require_once __DIR__ . '/../../components/bs_modal/alert.php' ?>





<?php ////////////////////// ?>
<?php ///////--HTML--/////// ?>
<?php ////////////////////// ?>

<div>
    <div class="mt-3 ms-3">
        <a href="/kelola-mahasiswa">
            <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_615_6452)">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M26.25 1.875H3.75C3.25272 1.875 2.77581 2.07254 2.42417 2.42417C2.07254 2.77581 1.875 3.25272 1.875 3.75V26.25C1.875 26.7473 2.07254 27.2242 2.42417 27.5758C2.77581 27.9275 3.25272 28.125 3.75 28.125H26.25C26.7473 28.125 27.2242 27.9275 27.5758 27.5758C27.9275 27.2242 28.125 26.7473 28.125 26.25V3.75C28.125 3.25272 27.9275 2.77581 27.5758 2.42417C27.2242 2.07254 26.7473 1.875 26.25 1.875ZM3.75 0C2.75544 0 1.80161 0.395088 1.09835 1.09835C0.395088 1.80161 0 2.75544 0 3.75L0 26.25C0 27.2446 0.395088 28.1984 1.09835 28.9016C1.80161 29.6049 2.75544 30 3.75 30H26.25C27.2446 30 28.1984 29.6049 28.9016 28.9016C29.6049 28.1984 30 27.2446 30 26.25V3.75C30 2.75544 29.6049 1.80161 28.9016 1.09835C28.1984 0.395088 27.2446 0 26.25 0L3.75 0Z"
                        fill="black" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M22.4998 15.0002C22.4998 15.2488 22.4011 15.4873 22.2253 15.6631C22.0494 15.8389 21.811 15.9377 21.5623 15.9377H10.7005L14.7261 19.9615C14.8133 20.0486 14.8824 20.1521 14.9296 20.266C14.9768 20.3799 15.001 20.5019 15.001 20.6252C15.001 20.7485 14.9768 20.8705 14.9296 20.9844C14.8824 21.0983 14.8133 21.2018 14.7261 21.289C14.6389 21.3761 14.5355 21.4453 14.4216 21.4924C14.3077 21.5396 14.1856 21.5639 14.0623 21.5639C13.9391 21.5639 13.817 21.5396 13.7031 21.4924C13.5892 21.4453 13.4858 21.3761 13.3986 21.289L7.77359 15.664C7.68629 15.5769 7.61702 15.4734 7.56976 15.3595C7.5225 15.2456 7.49817 15.1235 7.49817 15.0002C7.49817 14.8769 7.5225 14.7548 7.56976 14.6409C7.61702 14.527 7.68629 14.4235 7.77359 14.3365L13.3986 8.71146C13.5746 8.53542 13.8134 8.43652 14.0623 8.43652C14.3113 8.43652 14.5501 8.53542 14.7261 8.71146C14.9021 8.8875 15.001 9.12625 15.001 9.37521C15.001 9.62416 14.9021 9.86292 14.7261 10.039L10.7005 14.0627H21.5623C21.811 14.0627 22.0494 14.1615 22.2253 14.3373C22.4011 14.5131 22.4998 14.7516 22.4998 15.0002Z"
                        fill="black" />
                </g>
                <defs>
                    <clipPath id="clip0_615_6452">
                        <rect width="30" height="30" fill="white" />
                    </clipPath>
                </defs>
            </svg>
        </a>
    </div>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm" style="background-color: #F3F7FF;">
                    <div class="card-body p-5">
                        <div class="card-title mb-4 d-flex justify-content-start">
                            <h4 class="fw-bold" style="color: var(--color-navy-blue);">Edit Data Mahasiswa</h4>

                        </div>
                        <form action="/kelola-mahasiswa/edit" method="patch" id="edit-mahasiswa-form">
                            <div class="form-group mt-4">
                                <label for="input-nama" class="font-weight-bold">Nama Lengkap</label>
                                <input type="text" class="form-control" id="input-nama" name="nama" value="<?= $data['mhs_data']->getNamaLengkap() ?>" required>
                            </div>
                            <div class="form-group mt-3">
                                <label for="input-nim" class="font-weight-bold">NIM</label>
                                <input type="text" class="form-control" id="input-nim" name="nim" value="<?= $data['mhs_data']->getUserId() ?>" readonly required>
                            </div>
                            <div class="form-group mt-3">
                                <label for="input-jurusan" class="font-weight-bold">Jurusan</label>
                                <input type="text" class="form-control" id="input-jurusan" name="jurusan"
                                    value="Teknologi Informasi" readonly required>
                            </div>
                            <div class="form-group mt-3">
                                <label for="input-prodi" class="font-weight-bold">Prodi</label>
                                <select class="form-select" name="prodi" id="input-prodi" required>
                                    <option value="D4 Teknik Informatika" <?= $data['mhs_data']->getProdi() == 'D4 Teknik Informatika' ? 'selected' : '' ?>>D4 Teknik Informatika</option>
                                    <option value="D4 Sistem Informasi Bisnis" <?= $data['mhs_data']->getProdi() == 'D4 Sistem Informasi Bisnis' ? 'selected' : '' ?>>D4 Sistem Informasi Bisnis</option>
                                    <option value="D2 Pengembangan Piranti Lunak Situs" <?= $data['mhs_data']->getProdi() == 'D2 Pengembangan Piranti Lunak Situs' ? 'selected' : '' ?>>D2 Pengembangan Piranti Lunak
                                        Situs</option>
                                </select>
                            </div>
                            <div class="form-group mt-3">
                                <label for="input-email" class="font-weight-bold">Email</label>
                                <input type="email" class="form-control" id="input-email" name="email" value="<?= $data['mhs_data']->getEmail() ?>" required>
                            </div>
                            <div class="form-group mt-3">
                                <label for="input-password" class="font-weight-bold">Password</label>
                                <input type="password" class="form-control" id="input-password" name="password">
                            </div>
                            <div class="form-group mt-3">
                                <label for="input-konfirmasi-password" class="font-weight-bold">Konfirmasi
                                    Password</label>
                                <input type="password" class="form-control" name="konfirmasi-password" id="input-konfirmasi-password">
                            </div>
                            <div class="form-group mt-3">
                                <label for="input-tahun-masuk" class="font-weight-bold">Tahun Masuk</label>
                                <input type="text" class="form-control" id="input-tahun-masuk" name="tahun_masuk" value="<?= $data['mhs_data']->getTahunMasuk() ?>">
                            </div>
                            <div class="form-group mt-3">
                                <label for="input-foto-profil" class="font-weight-bold">Foto profil</label>
                                <input type="file" class="form-control" id="input-foto-profil" name="foto-profil">
                                <input type="hidden" name="foto_profil" value="<?= $data['mhs_data']->getFotoProfil() ?>">
                            </div>
                            <div class="d-flex justify-content-center mt-4">
                                <button type="submit" class="text-white px-2"
                                    style="background-color: var(--color-navy-blue);">Perbarui data</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





<?php ////////////////////// ?>
<?php //--BOOTSTRAP MODAL--/ ?>
<?php ////////////////////// ?>

<?php Alert("info-error-bs-modal", "Gagal!", "Gagal memperbarui data mahasiswa!") ?>





<?php ////////////////////// ?>
<?php ////--JAVASCRIPT--//// ?>
<?php ////////////////////// ?>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        $('#input-password').on('change', function () {
            const value = $(this).val();
            if (value !== '') {
                $('#input-konfirmasi-password').attr('required', true);
            } else {
                $('#input-konfirmasi-password').attr('required', false);
            }
        });

        $('#edit-mahasiswa-form').on('submit', function (e) {
            e.preventDefault();

            const formData = {};
            $(this).serializeArray().forEach(field => {
                formData[field.name] = field.value;
            });

            if (formData.password != formData["konfirmasi-password"]) {
                alert("Password dan konfirmasi password tidak sesuai!");
                return;
            }

            $.ajax({
                url: $(this).attr('action'),
                type: $(this).attr('method'),
                data: JSON.stringify(formData),
                processData: false,
                contentType: 'application/json',
                success: function (response) {
                    alert("Sukses memperbarui data admin!")
                },
                error: (xhr, status, error) => {
                    $('#server-error-bs-modal').modal('show');
                }
            });
        });
    })
</script>
