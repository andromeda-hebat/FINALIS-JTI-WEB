<main class="d-flex">
    <!-- Sidebar -->
    <?php include __DIR__ . '/../../components/sidebar_admin.php' ?>
    <div class="flex-grow-1">

        <?php include __DIR__ . '/../../components/top_bar.php' ?>

        <div class="halaman ms-4 me-4">

            <!-- div informasi -->
            <section>
                <!-- div judul Informasi -->
                <div class="d-flex w-100 justify-content-between mt-3">
                    <h2>Dasbor</h2>
                    <div class="d-flex">
                        <p>24 Oktober, 2024</p>
                        <img src="tgl.png" alt="P" class="square"
                            style="width: 20px; height: 20px; background-color: #ddd;">
                    </div>
                </div>
                <!-- div isi Informasi -->
                <div class="d-flex border">

                    <div class="d-flex justify-content-center border justify-content-center border w-25 m-2">
                        <img src="pengajuan.png" alt="P" class="rounded-circle"
                            style="width: 20px; height: 20px; background-color: #ddd;">
                        <div>
                            <p class="mb-0">Pengajuan</p>
                            <h6>75</h6>
                        </div>
                    </div>

                    <div class="d-flex justify-content-center border justify-content-center border w-25 m-2">
                        <img src="pengajuan.png" alt="P" class="rounded-circle"
                            style="width: 20px; height: 20px; background-color: #ddd;">
                        <div>
                            <p class="mb-0">Proses</p>
                            <h6>75</h6>
                        </div>
                    </div>

                    <div class="d-flex justify-content-center border justify-content-center border w-25 m-2">
                        <img src="pengajuan.png" alt="P" class="rounded-circle"
                            style="width: 20px; height: 20px; background-color: #ddd;">
                        <div>
                            <p class="mb-0">Selesai</p>
                            <h6>75</h6>
                        </div>
                    </div>

                    <div class="d-flex justify-content-center border justify-content-center border w-25 m-2">
                        <img src="pengajuan.png" alt="P" class="rounded-circle"
                            style="width: 20px; height: 20px; background-color: #ddd;">
                        <div>
                            <p class="mb-0">Dikembalikan</p>
                            <h6>75</h6>
                        </div>
                    </div>
                </div>
            </section>


            <!-- div Laporan -->
            <section>
                <div class="d-flex w-100 mt-4 mb-1">
                    <img src="tgl.png" alt="P" class="square"
                        style="width: 20px; height: 20px; background-color: #ddd;">
                    <h5>Laporan Cepat</h5>
                </div>

                <div class="d-flex border">

                    <div class="d-flex justify-content-center border justify-content-center border w-25 m-2">
                        <h6>Seluruh Pengajuan</h6>
                    </div>

                    <div class="d-flex justify-content-center border justify-content-center border w-25 m-2">

                        <h6>Dalam Proses</h6>
                    </div>

                    <div class="d-flex justify-content-center border justify-content-center border w-25 m-2">

                        <h6>Selesai</h6>
                    </div>

                    <div class="d-flex justify-content-center border justify-content-center border w-25 m-2">
                        <h6>Dikembalikan</h6>
                    </div>
                </div>

            </section>


            <!-- div bagian tabel -->
            <section class="mt-4">
                <!-- div judul tabel -->
                <div class="d-flex mt-2">
                    <div class="d-flex w-100 ">
                        <img src="tgl.png" alt="P" class="square"
                            style="width: 20px; height: 20px; background-color: #ddd;">
                        <h5>Aktivitas Terbaru</h5>
                    </div>
                    <div class="d-flex justify-content-end w-100 mb-2">
                        <!-- Sort -->
                        <div class="d-flex">
                            <img src="tgl.png" alt="P" class="square"
                                style="width: 20px; height: 20px; background-color: #ddd;">
                            <p>Sort</p>
                        </div>

                        <!-- Filter -->
                        <div class="d-flex ms-2">
                            <img src="tgl.png" alt="P" class="square"
                                style="width: 20px; height: 20px; background-color: #ddd;">
                            <p>Filter</p>
                        </div>

                        <!-- Search -->
                        <div class="d-flex ms-2">
                            <input type="text" placeholder="Search" class="d-flex align-items-start">
                            <button class="button ms-1" type="submit " style="width: 20px; height: 20px;">
                            </button>
                        </div>
                    </div>
                </div>

                <!-- div kotak tabel -->
                <div class="container w-100 p-0">
                    <table class="table">
                        <thead class="table-success">
                            <tr>
                                <th>Firstname</th>
                                <th>Lastname</th>
                                <th>Email</th>
                                <th>www</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>John</td>
                                <td>Doe</td>
                                <td>john@example.com</td>
                                <td>dheh</td>
                            </tr>
                            <tr>
                                <td>Mary</td>
                                <td>Moe</td>
                                <td>mary@example.com</td>
                                <td>jdae</td>
                            </tr>
                            <tr>
                                <td>July</td>
                                <td>Dooley</td>
                                <td>july@example.com</td>
                                <td>aiaiha</td>
                            </tr>
                            <tr>
                                <td>July</td>
                                <td>Dooley</td>
                                <td>july@example.com</td>
                                <td>fnehu</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>

        </div>
    </div>
</main>