USE [finalis_jti]
GO
INSERT [USERS].[Mahasiswa] ([nim], [nama_lengkap], [password], [email], [jurusan], [prodi], [tahun_masuk], [foto_profil]) VALUES (N'2341720001', N'Indira Nafa Aurah Huda', N'nafa', N'indiranafa@email.com', N'Teknologi Informasi', N'D4 Teknik Informatika', N'2023', N'C:\Users\khoir\Downloads\foto cowok.jpg')
INSERT [USERS].[Mahasiswa] ([nim], [nama_lengkap], [password], [email], [jurusan], [prodi], [tahun_masuk], [foto_profil]) VALUES (N'2341720008', N'Haikal Muhammad Rafli', N'haikal', N'haikal@email.com', N'Teknologi Informasi', N'D4 Teknik Informatika', N'2023', N'C:\Users\khoir\Downloads\foto cowok.jpg')
INSERT [USERS].[Mahasiswa] ([nim], [nama_lengkap], [password], [email], [jurusan], [prodi], [tahun_masuk], [foto_profil]) VALUES (N'2341720081', N'Farrel Augusta Dinata', N'farrel', N'farrelaugusta@email.com', N'Teknologi Informasi', N'D4 Teknik Informatika', N'2023', N'C:\Users\khoir\Downloads\foto cowok.jpg')
INSERT [USERS].[Mahasiswa] ([nim], [nama_lengkap], [password], [email], [jurusan], [prodi], [tahun_masuk], [foto_profil]) VALUES (N'2341720100', N'Dewita Anggraini', N'dewita', N'dewitanggraini@email.com', N'Teknologi Informasi', N'D4 Teknik Informatika', N'2023', N'C:\Users\khoir\Downloads\foto cowok.jpg')
INSERT [USERS].[Mahasiswa] ([nim], [nama_lengkap], [password], [email], [jurusan], [prodi], [tahun_masuk], [foto_profil]) VALUES (N'2341720101', N'Stevan Zaky Setyanto', N'stevan', N'stevanzaky@email.com', N'Teknologi Informasi', N'D4 Teknik Informatika', N'2023', N'C:\Users\khoir\Downloads\foto cowok.jpg')
INSERT [USERS].[Mahasiswa] ([nim], [nama_lengkap], [password], [email], [jurusan], [prodi], [tahun_masuk], [foto_profil]) VALUES (N'2341720156', N'Adani Salsabila', N'adani', N'adanisalsabila@email.com', N'Teknologi Informasi', N'D4 Teknik Informatika', N'2023', N'C:\Users\khoir\Downloads\foto cowok.jpg')
INSERT [USERS].[Mahasiswa] ([nim], [nama_lengkap], [password], [email], [jurusan], [prodi], [tahun_masuk], [foto_profil]) VALUES (N'2341720198', N'Fajar Aditya Nugraha', N'fajar', N'fajaraditya@email.com', N'Teknologi Informasi', N'D4 Teknik Informatika', N'2023', N'C:\Users\khoir\Downloads\foto cowok.jpg')
INSERT [USERS].[Mahasiswa] ([nim], [nama_lengkap], [password], [email], [jurusan], [prodi], [tahun_masuk], [foto_profil]) VALUES (N'2341720200', N'Fali Ilham Maulana', N'fali', N'faliilham@email.com', N'Teknologi Informasi', N'D4 Teknik Informatika', N'2023', N'C:\Users\khoir\Downloads\foto cowok.jpg')
INSERT [USERS].[Mahasiswa] ([nim], [nama_lengkap], [password], [email], [jurusan], [prodi], [tahun_masuk], [foto_profil]) VALUES (N'2341720250', N'Afifah Khoirunnisa', N'afifahnisa', N'khoirunnisaafifah40@email.com', N'Teknologi Informasi', N'D4 Teknik Informatika', N'2023', N'C:\Users\khoir\Downloads\foto cowok.jpg')
GO
INSERT [BERKAS].[TA] ([id_ta], [nim], [tanggal_request], [laporan_TA], [aplikasi], [bukti_publikasi]) VALUES (N'TA0001', N'2341720081', CAST(N'2024-12-11' AS Date), N'laporan_ta1.pdf', N'aplikasi1.zip', N'bukti_publikasi1.pdf')
INSERT [BERKAS].[TA] ([id_ta], [nim], [tanggal_request], [laporan_TA], [aplikasi], [bukti_publikasi]) VALUES (N'TA0002', N'2341720100', CAST(N'2024-12-11' AS Date), N'laporan_ta2.pdf', N'aplikasi2.zip', N'bukti_publikasi2.pdf')
INSERT [BERKAS].[TA] ([id_ta], [nim], [tanggal_request], [laporan_TA], [aplikasi], [bukti_publikasi]) VALUES (N'TA0003', N'2341720101', CAST(N'2024-12-11' AS Date), N'laporan_ta3.pdf', N'aplikasi3.zip', N'bukti_publikasi3.pdf')
INSERT [BERKAS].[TA] ([id_ta], [nim], [tanggal_request], [laporan_TA], [aplikasi], [bukti_publikasi]) VALUES (N'TA0004', N'2341720198', CAST(N'2024-12-11' AS Date), N'laporan_ta4.pdf', N'aplikasi4.zip', N'bukti_publikasi4.pdf')
INSERT [BERKAS].[TA] ([id_ta], [nim], [tanggal_request], [laporan_TA], [aplikasi], [bukti_publikasi]) VALUES (N'TA0005', N'2341720250', CAST(N'2024-12-11' AS Date), N'laporan_ta5.pdf', N'aplikasi5.zip', N'bukti_publikasi5.pdf')
GO
INSERT [BERKAS].[Prodi] ([id_berkas_prodi], [nim], [tanggal_request], [toeic], [distribusi_skripsi], [distribusi_magang], [surat_bebas_kompen]) VALUES (N'PR0001', N'2341720081', CAST(N'2024-12-11' AS Date), N'sertiftoeic1', N'file_skripsi2.pdf', N'file_magang2.pdf', N'surat_kompen2.pdf')
INSERT [BERKAS].[Prodi] ([id_berkas_prodi], [nim], [tanggal_request], [toeic], [distribusi_skripsi], [distribusi_magang], [surat_bebas_kompen]) VALUES (N'PR0002', N'2341720100', CAST(N'2024-12-11' AS Date), N'sertiftoeic1', N'file_skripsi3.pdf', N'file_magang3.pdf', N'surat_kompen3.pdf')
INSERT [BERKAS].[Prodi] ([id_berkas_prodi], [nim], [tanggal_request], [toeic], [distribusi_skripsi], [distribusi_magang], [surat_bebas_kompen]) VALUES (N'PR0003', N'2341720101', CAST(N'2024-12-11' AS Date), N'sertiftoeic1', N'file_skripsi1.pdf', N'file_magang1.pdf', N'surat_kompen1.pdf')
INSERT [BERKAS].[Prodi] ([id_berkas_prodi], [nim], [tanggal_request], [toeic], [distribusi_skripsi], [distribusi_magang], [surat_bebas_kompen]) VALUES (N'PR0004', N'2341720198', CAST(N'2024-12-11' AS Date), N'sertiftoeic1', N'file_skripsi2.pdf', N'file_magang2.pdf', N'surat_kompen2.pdf')
INSERT [BERKAS].[Prodi] ([id_berkas_prodi], [nim], [tanggal_request], [toeic], [distribusi_skripsi], [distribusi_magang], [surat_bebas_kompen]) VALUES (N'PR0005', N'2341720250', CAST(N'2024-12-11' AS Date), N'sertiftoeic1', N'file_skripsi2.pdf', N'file_magang2.pdf', N'surat_kompen2.pdf')
GO
SET IDENTITY_INSERT [BERKAS].[Tanggungan] ON 

INSERT [BERKAS].[Tanggungan] ([id_tanggungan], [nim], [jenis_tanggungan], [status_tanggungan]) VALUES (1, N'2341720081', N'Tanggungan Prodi', N'Berkas Ditolak')
INSERT [BERKAS].[Tanggungan] ([id_tanggungan], [nim], [jenis_tanggungan], [status_tanggungan]) VALUES (2, N'2341720100', N'Tanggungan Prodi', N'Belum Selesai')
INSERT [BERKAS].[Tanggungan] ([id_tanggungan], [nim], [jenis_tanggungan], [status_tanggungan]) VALUES (3, N'2341720101', N'Tanggungan Prodi', N'Belum Selesai')
INSERT [BERKAS].[Tanggungan] ([id_tanggungan], [nim], [jenis_tanggungan], [status_tanggungan]) VALUES (4, N'2341720198', N'Tanggungan Prodi', N'Belum Selesai')
INSERT [BERKAS].[Tanggungan] ([id_tanggungan], [nim], [jenis_tanggungan], [status_tanggungan]) VALUES (5, N'2341720250', N'Tanggungan Prodi', N'Belum Selesai')
INSERT [BERKAS].[Tanggungan] ([id_tanggungan], [nim], [jenis_tanggungan], [status_tanggungan]) VALUES (6, N'2341720081', N'Tanggungan TA', N'Selesai')
INSERT [BERKAS].[Tanggungan] ([id_tanggungan], [nim], [jenis_tanggungan], [status_tanggungan]) VALUES (7, N'2341720100', N'Tanggungan TA', N'Belum Selesai')
INSERT [BERKAS].[Tanggungan] ([id_tanggungan], [nim], [jenis_tanggungan], [status_tanggungan]) VALUES (8, N'2341720101', N'Tanggungan TA', N'Belum Selesai')
INSERT [BERKAS].[Tanggungan] ([id_tanggungan], [nim], [jenis_tanggungan], [status_tanggungan]) VALUES (9, N'2341720198', N'Tanggungan TA', N'Belum Selesai')
INSERT [BERKAS].[Tanggungan] ([id_tanggungan], [nim], [jenis_tanggungan], [status_tanggungan]) VALUES (10, N'2341720250', N'Tanggungan TA', N'Belum Selesai')
INSERT [BERKAS].[Tanggungan] ([id_tanggungan], [nim], [jenis_tanggungan], [status_tanggungan]) VALUES (11, N'2341720081', N'Tanggungan Prodi', N'Berkas Ditolak')
INSERT [BERKAS].[Tanggungan] ([id_tanggungan], [nim], [jenis_tanggungan], [status_tanggungan]) VALUES (12, N'2341720081', N'Tanggungan Prodi', N'Berkas Ditolak')
INSERT [BERKAS].[Tanggungan] ([id_tanggungan], [nim], [jenis_tanggungan], [status_tanggungan]) VALUES (13, N'2341720100', N'Tanggungan Prodi', N'Belum Selesai')
INSERT [BERKAS].[Tanggungan] ([id_tanggungan], [nim], [jenis_tanggungan], [status_tanggungan]) VALUES (14, N'2341720101', N'Tanggungan Prodi', N'Belum Selesai')
INSERT [BERKAS].[Tanggungan] ([id_tanggungan], [nim], [jenis_tanggungan], [status_tanggungan]) VALUES (15, N'2341720198', N'Tanggungan Prodi', N'Belum Selesai')
INSERT [BERKAS].[Tanggungan] ([id_tanggungan], [nim], [jenis_tanggungan], [status_tanggungan]) VALUES (16, N'2341720250', N'Tanggungan Prodi', N'Belum Selesai')
INSERT [BERKAS].[Tanggungan] ([id_tanggungan], [nim], [jenis_tanggungan], [status_tanggungan]) VALUES (17, N'2341720081', N'Tanggungan TA', N'Selesai')
INSERT [BERKAS].[Tanggungan] ([id_tanggungan], [nim], [jenis_tanggungan], [status_tanggungan]) VALUES (18, N'2341720100', N'Tanggungan TA', N'Belum Selesai')
INSERT [BERKAS].[Tanggungan] ([id_tanggungan], [nim], [jenis_tanggungan], [status_tanggungan]) VALUES (19, N'2341720101', N'Tanggungan TA', N'Belum Selesai')
INSERT [BERKAS].[Tanggungan] ([id_tanggungan], [nim], [jenis_tanggungan], [status_tanggungan]) VALUES (20, N'2341720198', N'Tanggungan TA', N'Belum Selesai')
INSERT [BERKAS].[Tanggungan] ([id_tanggungan], [nim], [jenis_tanggungan], [status_tanggungan]) VALUES (21, N'2341720250', N'Tanggungan TA', N'Belum Selesai')
INSERT [BERKAS].[Tanggungan] ([id_tanggungan], [nim], [jenis_tanggungan], [status_tanggungan]) VALUES (22, N'2341720081', N'Tanggungan Prodi', N'Berkas Ditolak')
INSERT [BERKAS].[Tanggungan] ([id_tanggungan], [nim], [jenis_tanggungan], [status_tanggungan]) VALUES (23, N'2341720081', N'Tanggungan Prodi', N'Berkas Ditolak')
INSERT [BERKAS].[Tanggungan] ([id_tanggungan], [nim], [jenis_tanggungan], [status_tanggungan]) VALUES (24, N'2341720100', N'Tanggungan Prodi', N'Belum Selesai')
INSERT [BERKAS].[Tanggungan] ([id_tanggungan], [nim], [jenis_tanggungan], [status_tanggungan]) VALUES (25, N'2341720101', N'Tanggungan Prodi', N'Belum Selesai')
INSERT [BERKAS].[Tanggungan] ([id_tanggungan], [nim], [jenis_tanggungan], [status_tanggungan]) VALUES (26, N'2341720081', N'Tanggungan Prodi', N'Berkas Ditolak')
INSERT [BERKAS].[Tanggungan] ([id_tanggungan], [nim], [jenis_tanggungan], [status_tanggungan]) VALUES (27, N'2341720100', N'Tanggungan Prodi', N'Belum Selesai')
INSERT [BERKAS].[Tanggungan] ([id_tanggungan], [nim], [jenis_tanggungan], [status_tanggungan]) VALUES (28, N'2341720101', N'Tanggungan Prodi', N'Belum Selesai')
INSERT [BERKAS].[Tanggungan] ([id_tanggungan], [nim], [jenis_tanggungan], [status_tanggungan]) VALUES (29, N'2341720198', N'Tanggungan Prodi', N'Belum Selesai')
INSERT [BERKAS].[Tanggungan] ([id_tanggungan], [nim], [jenis_tanggungan], [status_tanggungan]) VALUES (30, N'2341720250', N'Tanggungan Prodi', N'Belum Selesai')
INSERT [BERKAS].[Tanggungan] ([id_tanggungan], [nim], [jenis_tanggungan], [status_tanggungan]) VALUES (31, N'2341720081', N'Tanggungan TA', N'Selesai')
INSERT [BERKAS].[Tanggungan] ([id_tanggungan], [nim], [jenis_tanggungan], [status_tanggungan]) VALUES (32, N'2341720100', N'Tanggungan TA', N'Belum Selesai')
INSERT [BERKAS].[Tanggungan] ([id_tanggungan], [nim], [jenis_tanggungan], [status_tanggungan]) VALUES (33, N'2341720101', N'Tanggungan TA', N'Belum Selesai')
INSERT [BERKAS].[Tanggungan] ([id_tanggungan], [nim], [jenis_tanggungan], [status_tanggungan]) VALUES (34, N'2341720198', N'Tanggungan TA', N'Belum Selesai')
INSERT [BERKAS].[Tanggungan] ([id_tanggungan], [nim], [jenis_tanggungan], [status_tanggungan]) VALUES (35, N'2341720250', N'Tanggungan TA', N'Belum Selesai')
SET IDENTITY_INSERT [BERKAS].[Tanggungan] OFF
GO
INSERT [USERS].[Admin] ([id_admin], [nama_lengkap], [password], [email], [jabatan], [foto_profil]) VALUES (N'A12345', N'Bagas', N'bag', N'admin.ta@email.com', N'Admin TA', N'C:\Users\khoir\Downloads\foto cowok.jpg')
INSERT [USERS].[Admin] ([id_admin], [nama_lengkap], [password], [email], [jabatan], [foto_profil]) VALUES (N'A12346', N'Siti', N'siti', N'admin.prodi@email.com', N'Admin Prodi', N'C:\Users\khoir\Downloads\foto cowok.jpg')
INSERT [USERS].[Admin] ([id_admin], [nama_lengkap], [password], [email], [jabatan], [foto_profil]) VALUES (N'A12347', N'Danin', N'dan', N'admin.jurusan@email.com', N'Admin Jurusan', N'C:\Users\khoir\Downloads\foto cowok.jpg')
GO
SET IDENTITY_INSERT [VER].[Notifikasi] ON 

INSERT [VER].[Notifikasi] ([id_notifikasi], [pesan], [id_admin], [nim], [jenis_notifikasi], [status_notifikasi], [tujuan_notifikasi]) VALUES (1, N'Pengajuan Berkas Prodi dilakukan oleh nim 2341720081. Mohon segera verifikasi dalam waktu 2x24 jam.', N'A12346', N'2341720081', N'Tanggungan Prodi', N'Belum Dibaca', N'Admin')
INSERT [VER].[Notifikasi] ([id_notifikasi], [pesan], [id_admin], [nim], [jenis_notifikasi], [status_notifikasi], [tujuan_notifikasi]) VALUES (2, N'Pengajuan Berkas Prodi dilakukan oleh nim 2341720100. Mohon segera verifikasi dalam waktu 2x24 jam.', N'A12346', N'2341720100', N'Tanggungan Prodi', N'Belum Dibaca', N'Admin')
INSERT [VER].[Notifikasi] ([id_notifikasi], [pesan], [id_admin], [nim], [jenis_notifikasi], [status_notifikasi], [tujuan_notifikasi]) VALUES (3, N'Pengajuan Berkas Prodi dilakukan oleh nim 2341720101. Mohon segera verifikasi dalam waktu 2x24 jam.', N'A12346', N'2341720101', N'Tanggungan Prodi', N'Belum Dibaca', N'Admin')
INSERT [VER].[Notifikasi] ([id_notifikasi], [pesan], [id_admin], [nim], [jenis_notifikasi], [status_notifikasi], [tujuan_notifikasi]) VALUES (4, N'Pengajuan Berkas Prodi dilakukan oleh nim 2341720198. Mohon segera verifikasi dalam waktu 2x24 jam.', N'A12346', N'2341720198', N'Tanggungan Prodi', N'Belum Dibaca', N'Admin')
INSERT [VER].[Notifikasi] ([id_notifikasi], [pesan], [id_admin], [nim], [jenis_notifikasi], [status_notifikasi], [tujuan_notifikasi]) VALUES (5, N'Pengajuan Berkas Prodi dilakukan oleh nim 2341720250. Mohon segera verifikasi dalam waktu 2x24 jam.', N'A12346', N'2341720250', N'Tanggungan Prodi', N'Belum Dibaca', N'Admin')
INSERT [VER].[Notifikasi] ([id_notifikasi], [pesan], [id_admin], [nim], [jenis_notifikasi], [status_notifikasi], [tujuan_notifikasi]) VALUES (6, N'Pengajuan Berkas TA dilakukan oleh nim 2341720081. Mohon segera verifikasi dalam waktu 2x24 jam.', N'A12345', N'2341720081', N'Tanggungan TA', N'Belum Dibaca', N'Admin')
INSERT [VER].[Notifikasi] ([id_notifikasi], [pesan], [id_admin], [nim], [jenis_notifikasi], [status_notifikasi], [tujuan_notifikasi]) VALUES (7, N'Pengajuan Berkas TA dilakukan oleh nim 2341720100. Mohon segera verifikasi dalam waktu 2x24 jam.', N'A12345', N'2341720100', N'Tanggungan TA', N'Belum Dibaca', N'Admin')
INSERT [VER].[Notifikasi] ([id_notifikasi], [pesan], [id_admin], [nim], [jenis_notifikasi], [status_notifikasi], [tujuan_notifikasi]) VALUES (8, N'Pengajuan Berkas TA dilakukan oleh nim 2341720101. Mohon segera verifikasi dalam waktu 2x24 jam.', N'A12345', N'2341720101', N'Tanggungan TA', N'Belum Dibaca', N'Admin')
INSERT [VER].[Notifikasi] ([id_notifikasi], [pesan], [id_admin], [nim], [jenis_notifikasi], [status_notifikasi], [tujuan_notifikasi]) VALUES (9, N'Pengajuan Berkas TA dilakukan oleh nim 2341720198. Mohon segera verifikasi dalam waktu 2x24 jam.', N'A12345', N'2341720198', N'Tanggungan TA', N'Belum Dibaca', N'Admin')
INSERT [VER].[Notifikasi] ([id_notifikasi], [pesan], [id_admin], [nim], [jenis_notifikasi], [status_notifikasi], [tujuan_notifikasi]) VALUES (10, N'Pengajuan Berkas TA dilakukan oleh nim 2341720250. Mohon segera verifikasi dalam waktu 2x24 jam.', N'A12345', N'2341720250', N'Tanggungan TA', N'Belum Dibaca', N'Admin')
INSERT [VER].[Notifikasi] ([id_notifikasi], [pesan], [id_admin], [nim], [jenis_notifikasi], [status_notifikasi], [tujuan_notifikasi]) VALUES (11, N'Mohon maaf, berkas pengajuan prodi Anda ditolak oleh Admin Prodi. Mohon kirimkan ulang berkas sesuai dengan keterangan pengembalian berkas.', N'A12346', N'2341720081', N'Tanggungan Prodi', N'Belum Dibaca', N'Mahasiswa')
INSERT [VER].[Notifikasi] ([id_notifikasi], [pesan], [id_admin], [nim], [jenis_notifikasi], [status_notifikasi], [tujuan_notifikasi]) VALUES (12, N'Selamat, berkas pengajuan TA Anda telah disetujui oleh Admin TA!', N'A12346', N'2341720081', N'Tanggungan TA', N'Belum Dibaca', N'Mahasiswa')
SET IDENTITY_INSERT [VER].[Notifikasi] OFF
GO
SET IDENTITY_INSERT [VER].[VerifikasiBerkas] ON 

INSERT [VER].[VerifikasiBerkas] ([id_verifikasi], [id_berkas], [jenis_berkas], [id_admin], [status_verifikasi], [tanggal_verifikasi], [keterangan_verifikasi]) VALUES (1, N'PR0001', N'Prodi', N'A12346', N'Ditolak', CAST(N'2024-12-11' AS Date), N'-')
INSERT [VER].[VerifikasiBerkas] ([id_verifikasi], [id_berkas], [jenis_berkas], [id_admin], [status_verifikasi], [tanggal_verifikasi], [keterangan_verifikasi]) VALUES (2, N'PR0002', N'Prodi', N'A12346', N'Diajukan', NULL, N'Berkas Prodi telah diajukan untuk verifikasi.')
INSERT [VER].[VerifikasiBerkas] ([id_verifikasi], [id_berkas], [jenis_berkas], [id_admin], [status_verifikasi], [tanggal_verifikasi], [keterangan_verifikasi]) VALUES (3, N'PR0003', N'Prodi', N'A12346', N'Diajukan', NULL, N'Berkas Prodi telah diajukan untuk verifikasi.')
INSERT [VER].[VerifikasiBerkas] ([id_verifikasi], [id_berkas], [jenis_berkas], [id_admin], [status_verifikasi], [tanggal_verifikasi], [keterangan_verifikasi]) VALUES (4, N'PR0001', N'Prodi', N'A12346', N'Ditolak', CAST(N'2024-12-11' AS Date), N'-')
INSERT [VER].[VerifikasiBerkas] ([id_verifikasi], [id_berkas], [jenis_berkas], [id_admin], [status_verifikasi], [tanggal_verifikasi], [keterangan_verifikasi]) VALUES (5, N'PR0002', N'Prodi', N'A12346', N'Diajukan', NULL, N'Berkas Prodi telah diajukan untuk verifikasi.')
INSERT [VER].[VerifikasiBerkas] ([id_verifikasi], [id_berkas], [jenis_berkas], [id_admin], [status_verifikasi], [tanggal_verifikasi], [keterangan_verifikasi]) VALUES (6, N'PR0003', N'Prodi', N'A12346', N'Diajukan', NULL, N'Berkas Prodi telah diajukan untuk verifikasi.')
INSERT [VER].[VerifikasiBerkas] ([id_verifikasi], [id_berkas], [jenis_berkas], [id_admin], [status_verifikasi], [tanggal_verifikasi], [keterangan_verifikasi]) VALUES (7, N'PR0004', N'Prodi', N'A12346', N'Diajukan', NULL, N'Berkas Prodi telah diajukan untuk verifikasi.')
INSERT [VER].[VerifikasiBerkas] ([id_verifikasi], [id_berkas], [jenis_berkas], [id_admin], [status_verifikasi], [tanggal_verifikasi], [keterangan_verifikasi]) VALUES (8, N'PR0005', N'Prodi', N'A12346', N'Diajukan', NULL, N'Berkas Prodi telah diajukan untuk verifikasi.')
INSERT [VER].[VerifikasiBerkas] ([id_verifikasi], [id_berkas], [jenis_berkas], [id_admin], [status_verifikasi], [tanggal_verifikasi], [keterangan_verifikasi]) VALUES (9, N'TA0001', N'TA', N'A12345', N'Disetujui', CAST(N'2024-12-11' AS Date), N'-')
INSERT [VER].[VerifikasiBerkas] ([id_verifikasi], [id_berkas], [jenis_berkas], [id_admin], [status_verifikasi], [tanggal_verifikasi], [keterangan_verifikasi]) VALUES (10, N'TA0002', N'TA', N'A12345', N'Diajukan', NULL, N'Berkas TA telah diajukan untuk verifikasi.')
INSERT [VER].[VerifikasiBerkas] ([id_verifikasi], [id_berkas], [jenis_berkas], [id_admin], [status_verifikasi], [tanggal_verifikasi], [keterangan_verifikasi]) VALUES (11, N'TA0003', N'TA', N'A12345', N'Diajukan', NULL, N'Berkas TA telah diajukan untuk verifikasi.')
INSERT [VER].[VerifikasiBerkas] ([id_verifikasi], [id_berkas], [jenis_berkas], [id_admin], [status_verifikasi], [tanggal_verifikasi], [keterangan_verifikasi]) VALUES (12, N'TA0004', N'TA', N'A12345', N'Diajukan', NULL, N'Berkas TA telah diajukan untuk verifikasi.')
INSERT [VER].[VerifikasiBerkas] ([id_verifikasi], [id_berkas], [jenis_berkas], [id_admin], [status_verifikasi], [tanggal_verifikasi], [keterangan_verifikasi]) VALUES (13, N'TA0005', N'TA', N'A12345', N'Diajukan', NULL, N'Berkas TA telah diajukan untuk verifikasi.')
SET IDENTITY_INSERT [VER].[VerifikasiBerkas] OFF
GO
SET IDENTITY_INSERT [VER].[LogAktivitas] ON 

INSERT [VER].[LogAktivitas] ([id_log], [id_admin], [id_berkas], [status_sebelumnya], [status_sesudahnya], [waktu_aktivitas]) VALUES (1, N'A12346', N'PR0001', N'Diajukan', N'Ditolak', CAST(N'2024-12-11T22:48:53.380' AS DateTime))
INSERT [VER].[LogAktivitas] ([id_log], [id_admin], [id_berkas], [status_sebelumnya], [status_sesudahnya], [waktu_aktivitas]) VALUES (2, N'A12346', N'TA0001', N'Diajukan', N'Disetujui', CAST(N'2024-12-11T22:48:53.400' AS DateTime))
INSERT [VER].[LogAktivitas] ([id_log], [id_admin], [id_berkas], [status_sebelumnya], [status_sesudahnya], [waktu_aktivitas]) VALUES (3, N'A12346', N'PR0001', N'Diajukan', N'Ditolak', CAST(N'2024-12-11T22:50:57.410' AS DateTime))
INSERT [VER].[LogAktivitas] ([id_log], [id_admin], [id_berkas], [status_sebelumnya], [status_sesudahnya], [waktu_aktivitas]) VALUES (4, N'A12346', N'TA0001', N'Diajukan', N'Disetujui', CAST(N'2024-12-11T22:50:57.430' AS DateTime))
INSERT [VER].[LogAktivitas] ([id_log], [id_admin], [id_berkas], [status_sebelumnya], [status_sesudahnya], [waktu_aktivitas]) VALUES (5, N'A12346', N'PR0001', N'Diajukan', N'Ditolak', CAST(N'2024-12-11T23:08:15.190' AS DateTime))
INSERT [VER].[LogAktivitas] ([id_log], [id_admin], [id_berkas], [status_sebelumnya], [status_sesudahnya], [waktu_aktivitas]) VALUES (6, N'A12346', N'TA0001', N'Diajukan', N'Disetujui', CAST(N'2024-12-11T23:08:15.210' AS DateTime))
SET IDENTITY_INSERT [VER].[LogAktivitas] OFF
GO
