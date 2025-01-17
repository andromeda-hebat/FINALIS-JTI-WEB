<div class="d-flex">
    <?php include __DIR__ . '/../../components/admin_jurusan/sidebar.php' ?>
    <div class="position-top w-100" style="margin-left: 35vh;">
        <?php include __DIR__ . '/../../components/general/topbar.php' ?>
        <main class="halaman mx-5 " style="min-height:100vh; margin-top:15vh;">

            <section>
                <div class="d-flex w-100 justify-content-between mt-3">
                    <h2 class="fw-bold">Dashboard</h2>
                    <div class="d-flex">
                        <?php
                        $formatter = new IntlDateFormatter('id_ID', IntlDateFormatter::LONG, IntlDateFormatter::NONE);
                        $formatter->setPattern('dd MMMM yyyy');
                        ?>
                        <p class="me-2""><?= $formatter->format(new DateTime()) ?></p>
                        <svg width=" 24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_530_8611)">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M21 0H3C2.20435 0 1.44129 0.316071 0.87868 0.87868C0.316071 1.44129 0 2.20435 0 3L0 21C0 21.7956 0.316071 22.5587 0.87868 23.1213C1.44129 23.6839 2.20435 24 3 24H21C21.7956 24 22.5587 23.6839 23.1213 23.1213C23.6839 22.5587 24 21.7956 24 21V3C24 2.20435 23.6839 1.44129 23.1213 0.87868C22.5587 0.316071 21.7956 0 21 0V0ZM1.5 5.7855C1.5 5.076 2.172 4.5 3 4.5H21C21.828 4.5 22.5 5.076 22.5 5.7855V21.2145C22.5 21.924 21.828 22.5 21 22.5H3C2.172 22.5 1.5 21.924 1.5 21.2145V5.7855Z"
                                    fill="black" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M9.75 10.5C10.1478 10.5 10.5294 10.342 10.8107 10.0607C11.092 9.77936 11.25 9.39782 11.25 9C11.25 8.60218 11.092 8.22064 10.8107 7.93934C10.5294 7.65804 10.1478 7.5 9.75 7.5C9.35218 7.5 8.97064 7.65804 8.68934 7.93934C8.40804 8.22064 8.25 8.60218 8.25 9C8.25 9.39782 8.40804 9.77936 8.68934 10.0607C8.97064 10.342 9.35218 10.5 9.75 10.5ZM14.25 10.5C14.6478 10.5 15.0294 10.342 15.3107 10.0607C15.592 9.77936 15.75 9.39782 15.75 9C15.75 8.60218 15.592 8.22064 15.3107 7.93934C15.0294 7.65804 14.6478 7.5 14.25 7.5C13.8522 7.5 13.4706 7.65804 13.1893 7.93934C12.908 8.22064 12.75 8.60218 12.75 9C12.75 9.39782 12.908 9.77936 13.1893 10.0607C13.4706 10.342 13.8522 10.5 14.25 10.5ZM18.75 10.5C19.1478 10.5 19.5294 10.342 19.8107 10.0607C20.092 9.77936 20.25 9.39782 20.25 9C20.25 8.60218 20.092 8.22064 19.8107 7.93934C19.5294 7.65804 19.1478 7.5 18.75 7.5C18.3522 7.5 17.9706 7.65804 17.6893 7.93934C17.408 8.22064 17.25 8.60218 17.25 9C17.25 9.39782 17.408 9.77936 17.6893 10.0607C17.9706 10.342 18.3522 10.5 18.75 10.5ZM5.25 15C5.64782 15 6.02936 14.842 6.31066 14.5607C6.59196 14.2794 6.75 13.8978 6.75 13.5C6.75 13.1022 6.59196 12.7206 6.31066 12.4393C6.02936 12.158 5.64782 12 5.25 12C4.85218 12 4.47064 12.158 4.18934 12.4393C3.90804 12.7206 3.75 13.1022 3.75 13.5C3.75 13.8978 3.90804 14.2794 4.18934 14.5607C4.47064 14.842 4.85218 15 5.25 15ZM9.75 15C10.1478 15 10.5294 14.842 10.8107 14.5607C11.092 14.2794 11.25 13.8978 11.25 13.5C11.25 13.1022 11.092 12.7206 10.8107 12.4393C10.5294 12.158 10.1478 12 9.75 12C9.35218 12 8.97064 12.158 8.68934 12.4393C8.40804 12.7206 8.25 13.1022 8.25 13.5C8.25 13.8978 8.40804 14.2794 8.68934 14.5607C8.97064 14.842 9.35218 15 9.75 15ZM14.25 15C14.6478 15 15.0294 14.842 15.3107 14.5607C15.592 14.2794 15.75 13.8978 15.75 13.5C15.75 13.1022 15.592 12.7206 15.3107 12.4393C15.0294 12.158 14.6478 12 14.25 12C13.8522 12 13.4706 12.158 13.1893 12.4393C12.908 12.7206 12.75 13.1022 12.75 13.5C12.75 13.8978 12.908 14.2794 13.1893 14.5607C13.4706 14.842 13.8522 15 14.25 15ZM18.75 15C19.1478 15 19.5294 14.842 19.8107 14.5607C20.092 14.2794 20.25 13.8978 20.25 13.5C20.25 13.1022 20.092 12.7206 19.8107 12.4393C19.5294 12.158 19.1478 12 18.75 12C18.3522 12 17.9706 12.158 17.6893 12.4393C17.408 12.7206 17.25 13.1022 17.25 13.5C17.25 13.8978 17.408 14.2794 17.6893 14.5607C17.9706 14.842 18.3522 15 18.75 15ZM5.25 19.5C5.64782 19.5 6.02936 19.342 6.31066 19.0607C6.59196 18.7794 6.75 18.3978 6.75 18C6.75 17.6022 6.59196 17.2206 6.31066 16.9393C6.02936 16.658 5.64782 16.5 5.25 16.5C4.85218 16.5 4.47064 16.658 4.18934 16.9393C3.90804 17.2206 3.75 17.6022 3.75 18C3.75 18.3978 3.90804 18.7794 4.18934 19.0607C4.47064 19.342 4.85218 19.5 5.25 19.5ZM9.75 19.5C10.1478 19.5 10.5294 19.342 10.8107 19.0607C11.092 18.7794 11.25 18.3978 11.25 18C11.25 17.6022 11.092 17.2206 10.8107 16.9393C10.5294 16.658 10.1478 16.5 9.75 16.5C9.35218 16.5 8.97064 16.658 8.68934 16.9393C8.40804 17.2206 8.25 17.6022 8.25 18C8.25 18.3978 8.40804 18.7794 8.68934 19.0607C8.97064 19.342 9.35218 19.5 9.75 19.5ZM14.25 19.5C14.6478 19.5 15.0294 19.342 15.3107 19.0607C15.592 18.7794 15.75 18.3978 15.75 18C15.75 17.6022 15.592 17.2206 15.3107 16.9393C15.0294 16.658 14.6478 16.5 14.25 16.5C13.8522 16.5 13.4706 16.658 13.1893 16.9393C12.908 17.2206 12.75 17.6022 12.75 18C12.75 18.3978 12.908 18.7794 13.1893 19.0607C13.4706 19.342 13.8522 19.5 14.25 19.5Z"
                                    fill="black" />
                            </g>
                            <defs>
                                <clipPath id="clip0_530_8611">
                                    <rect width="24" height="24" fill="white" />
                                </clipPath>
                            </defs>
                            </svg>
                    </div>
                </div>
                <div class="d-flex border w-100 justify-content-around rounded shadow"
                    style="background-color: #E4EEFF;">
                    <div class="w-15 m-2 d-flex align-items-center d-flex" style="color: #052C65;">
                        <div>
                            <p class="mb-0 text-center">Mahasiswa Tingkat Akhir</p>
                            <h6 class="fw-bold text-center"><?= $data['total_user']['mahasiswa'] ?></h6>
                        </div>
                    </div>

                    <div class="w-15 m-2 d-flex align-items-center d-flex" style="color: #052C65;">
                        <div class="ms-1">
                            <p class="mb-0 text-center">Admin Program Studi</p>
                            <h6 class="fw-bold text-center"><?= $data['total_user']['admin_prodi'] ?></h6>
                        </div>
                    </div>

                    <div class="w-15 m-2 d-flex align-items-center d-flex" style="color: #052C65;">
                        <div class="ms-1">
                            <p class="mb-0 text-center">Admin Tugas Akhir</p>
                            <h6 class="fw-bold text-center"><?= $data['total_user']['admin_ta'] ?></h6>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mt-5">
                <div class="">
                    <div class="d-flex w-100 ">
                        <svg class="me-1" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_530_8599)">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M21 1.5H3C2.60218 1.5 2.22064 1.65804 1.93934 1.93934C1.65804 2.22064 1.5 2.60218 1.5 3V21C1.5 21.3978 1.65804 21.7794 1.93934 22.0607C2.22064 22.342 2.60218 22.5 3 22.5H21C21.3978 22.5 21.7794 22.342 22.0607 22.0607C22.342 21.7794 22.5 21.3978 22.5 21V3C22.5 2.60218 22.342 2.22064 22.0607 1.93934C21.7794 1.65804 21.3978 1.5 21 1.5ZM3 0C2.20435 0 1.44129 0.316071 0.87868 0.87868C0.316071 1.44129 0 2.20435 0 3L0 21C0 21.7956 0.316071 22.5587 0.87868 23.1213C1.44129 23.6839 2.20435 24 3 24H21C21.7956 24 22.5587 23.6839 23.1213 23.1213C23.6839 22.5587 24 21.7956 24 21V3C24 2.20435 23.6839 1.44129 23.1213 0.87868C22.5587 0.316071 21.7956 0 21 0L3 0Z"
                                    fill="black" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M16.2419 7.75804C16.1012 7.61744 15.9105 7.53845 15.7116 7.53845C15.5127 7.53845 15.322 7.61744 15.1814 7.75804L9.03735 13.902V9.75004C9.03735 9.55113 8.95834 9.36036 8.81768 9.21971C8.67703 9.07906 8.48627 9.00004 8.28735 9.00004C8.08844 9.00004 7.89768 9.07906 7.75702 9.21971C7.61637 9.36036 7.53735 9.55113 7.53735 9.75004V15.7125C7.53735 15.9115 7.61637 16.1022 7.75702 16.2429C7.89768 16.3835 8.08844 16.4625 8.28735 16.4625H14.2499C14.4488 16.4625 14.6395 16.3835 14.7802 16.2429C14.9208 16.1022 14.9999 15.9115 14.9999 15.7125C14.9999 15.5136 14.9208 15.3229 14.7802 15.1822C14.6395 15.0416 14.4488 14.9625 14.2499 14.9625H10.0979L16.2419 8.81854C16.3825 8.6779 16.4614 8.48717 16.4614 8.28829C16.4614 8.08942 16.3825 7.89869 16.2419 7.75804Z"
                                    fill="black" />
                            </g>
                            <defs>
                                <clipPath id="clip0_530_8599">
                                    <rect width="24" height="24" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                        <h5 class="ms-1">Permintaan Terbaru</h5>
                    </div>

                    <div class="w-100 border rounded shadow">
                        <table class="table">
                            <thead class="table">
                                <th style="background-color:#E4EEFF ;">No</th>
                                <th style="background-color:#E4EEFF ;">NIM</th>
                                <th style="background-color:#E4EEFF ;">Mahasiswa</th>
                                <th style="background-color:#E4EEFF ;">Status</th>
                                <th style="background-color:#E4EEFF ;">Jenis Berkas</th>
                                <th style="background-color:#E4EEFF ;">Tanggal Pengajuan</th>
                                <th style="background-color:#E4EEFF ;">Keterangan</th>
                            </thead>
                            <tbody>
                                <?php $number = 0; ?>
                                <?php foreach ($data['all_req_verif'] as $key => $value): ?>
                                    <tr>
                                        <td><?= ++$number ?></td>
                                        <td><?= $value->getNim() ?></td>
                                        <td><?= $value->getNamaLengkap() ?></td>
                                        <td>
                                            <?php include __DIR__ . '/../../atoms/badge_' . strtolower($value->getStatusVerifikasi()) . '.php' ?>
                                        </td>
                                        <td><?= $value->getJenisBerkas() ?></td>
                                        <td><?= $value->getTanggalRequest() ?></td>
                                        <td><?= $value->getKeteranganVerifikasi() ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
            </section>

        </main>
    </div>
</div>