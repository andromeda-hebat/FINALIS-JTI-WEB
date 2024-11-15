<main>
    <?php include __DIR__ . '/../../components/student/topbar_student.php' ?>
    <div class="position-relative d-flex">
        <?php include __DIR__ . '/../../components/student/sidebar_student.php' ?>
        <div class="p-5">
            <div class="d-flex">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6" style="width: 50px; height: 50px">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                </svg>
                <h2 class="mt-2">Formulir Administrasi Prodi</h2>
            </div>
            <form method="post" class="mt-4">
                <label for="laporan" class="form-label">Distribusi laporan Skripsi</label>
                <input type="file" id="laporan" class="form-control">

                <label for="program" class="form-label mt-3">Distribusi Laporan Magang</label>
                <input type="file" id="program" class="form-control">

                <label for="upload" class="form-label mt-3">Bebas Kompensasi</label>
                <input type="file" id="upload" class="form-control">

                
                <label for="sertif" class="form-label mt-3">Sertifikat TOEIC</label>
                <input type="file" id="sertif" class="form-control">

                <input type="button" value="Kirim" class="btn btn-primary mt-3">
            </form>
        </div>

    </div>
</main>