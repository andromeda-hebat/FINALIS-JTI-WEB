USE [finalis_jti]

INSERT [USERS].[Mahasiswa] ([nim], [nama_lengkap], [password], [email], [jurusan], [prodi], [tahun_masuk], [foto_profil]) VALUES (N'2341720081', N'Farrel Augusta Dinata', N'farrel', N'farrelaugusta@email.com', N'Teknologi Informasi', N'D4 Teknik Informatika', N'2023', N'C:\Users\khoir\Downloads\foto cowok.jpg')
INSERT [USERS].[Mahasiswa] ([nim], [nama_lengkap], [password], [email], [jurusan], [prodi], [tahun_masuk], [foto_profil]) VALUES (N'2341720100', N'Dewita Anggraini', N'dewita', N'dewitanggraini@email.com', N'Teknologi Informasi', N'D4 Teknik Informatika', N'2023', N'C:\Users\khoir\Downloads\foto cowok.jpg')
INSERT [USERS].[Mahasiswa] ([nim], [nama_lengkap], [password], [email], [jurusan], [prodi], [tahun_masuk], [foto_profil]) VALUES (N'2341720101', N'Stevan Zaky Setyanto', N'stevan', N'stevanzaky@email.com', N'Teknologi Informasi', N'D4 Teknik Informatika', N'2023', N'C:\Users\khoir\Downloads\foto cowok.jpg')
INSERT [USERS].[Mahasiswa] ([nim], [nama_lengkap], [password], [email], [jurusan], [prodi], [tahun_masuk], [foto_profil]) VALUES (N'2341720198', N'Fajar Aditya Nugraha', N'fajar', N'fajaraditya@email.com', N'Teknologi Informasi', N'D4 Teknik Informatika', N'2023', N'C:\Users\khoir\Downloads\foto cowok.jpg')
INSERT [USERS].[Mahasiswa] ([nim], [nama_lengkap], [password], [email], [jurusan], [prodi], [tahun_masuk], [foto_profil]) VALUES (N'2341720250', N'Afifah Khoirunnisa', N'afifahnisa', N'khoirunnisaafifah40@email.com', N'Teknologi Informasi', N'D4 Teknik Informatika', N'2023', N'C:\Users\khoir\Downloads\foto cowok.jpg')

INSERT [USERS].[Admin] ([id_admin], [nama_lengkap], [password], [email], [telepon], [jabatan], [tanggal_bergabung], [foto_profil]) VALUES (N'A12345', N'Bagas', N'bag', N'admin.ta@email.com', N'085609998765', N'Admin TA', CAST(N'2016-11-24' AS Date), N'C:\Users\khoir\Downloads\foto cowok.jpg')
INSERT [USERS].[Admin] ([id_admin], [nama_lengkap], [password], [email], [telepon], [jabatan], [tanggal_bergabung], [foto_profil]) VALUES (N'A12346', N'Siti', N'siti', N'admin.prodi@email.com', N'086756789876', N'Admin Prodi', CAST(N'2017-03-22' AS Date), N'C:\Users\khoir\Downloads\foto cowok.jpg')
INSERT [USERS].[Admin] ([id_admin], [nama_lengkap], [password], [email], [telepon], [jabatan], [tanggal_bergabung], [foto_profil]) VALUES (N'A12347', N'Danin', N'dan', N'admin.jurusan@email.com', N'087656789876', N'Admin Jurusan', CAST(N'2015-07-23' AS Date), N'C:\Users\khoir\Downloads\foto cowok.jpg')

INSERT [BERKAS].[TA] ([id_ta], [nim], [tanggal_request], [laporan_TA], [aplikasi], [bukti_publikasi]) VALUES (N'TA0001', N'2341720081', CAST(N'2024-12-04' AS Date), N'laporan_ta1.pdf', N'aplikasi1.zip', N'bukti_publikasi1.pdf')
INSERT [BERKAS].[TA] ([id_ta], [nim], [tanggal_request], [laporan_TA], [aplikasi], [bukti_publikasi]) VALUES (N'TA0002', N'2341720100', CAST(N'2024-12-04' AS Date), N'laporan_ta2.pdf', N'aplikasi2.zip', N'bukti_publikasi2.pdf')
INSERT [BERKAS].[TA] ([id_ta], [nim], [tanggal_request], [laporan_TA], [aplikasi], [bukti_publikasi]) VALUES (N'TA0003', N'2341720101', CAST(N'2024-12-04' AS Date), N'laporan_ta3.pdf', N'aplikasi3.zip', N'bukti_publikasi3.pdf')
INSERT [BERKAS].[TA] ([id_ta], [nim], [tanggal_request], [laporan_TA], [aplikasi], [bukti_publikasi]) VALUES (N'TA0004', N'2341720198', CAST(N'2024-12-04' AS Date), N'laporan_ta4.pdf', N'aplikasi4.zip', N'bukti_publikasi4.pdf')
INSERT [BERKAS].[TA] ([id_ta], [nim], [tanggal_request], [laporan_TA], [aplikasi], [bukti_publikasi]) VALUES (N'TA0005', N'2341720250', CAST(N'2024-12-04' AS Date), N'laporan_ta5.pdf', N'aplikasi5.zip', N'bukti_publikasi5.pdf')

INSERT [BERKAS].[Prodi] ([id_berkas_prodi], [nim], [tanggal_request], [toeic], [distribusi_skripsi], [distribusi_magang], [surat_bebas_kompen]) VALUES (N'PR0001', N'2341720081', CAST(N'2024-12-04' AS Date), N'800', N'file_skripsi2.pdf', N'file_magang2.pdf', N'surat_kompen2.pdf')
INSERT [BERKAS].[Prodi] ([id_berkas_prodi], [nim], [tanggal_request], [toeic], [distribusi_skripsi], [distribusi_magang], [surat_bebas_kompen]) VALUES (N'PR0002', N'2341720100', CAST(N'2024-12-04' AS Date), N'850', N'file_skripsi3.pdf', N'file_magang3.pdf', N'surat_kompen3.pdf')
INSERT [BERKAS].[Prodi] ([id_berkas_prodi], [nim], [tanggal_request], [toeic], [distribusi_skripsi], [distribusi_magang], [surat_bebas_kompen]) VALUES (N'PR0003', N'2341720101', CAST(N'2024-12-04' AS Date), N'750', N'file_skripsi1.pdf', N'file_magang1.pdf', N'surat_kompen1.pdf')
INSERT [BERKAS].[Prodi] ([id_berkas_prodi], [nim], [tanggal_request], [toeic], [distribusi_skripsi], [distribusi_magang], [surat_bebas_kompen]) VALUES (N'PR0004', N'2341720198', CAST(N'2024-12-04' AS Date), N'800', N'file_skripsi2.pdf', N'file_magang2.pdf', N'surat_kompen2.pdf')
INSERT [BERKAS].[Prodi] ([id_berkas_prodi], [nim], [tanggal_request], [toeic], [distribusi_skripsi], [distribusi_magang], [surat_bebas_kompen]) VALUES (N'PR0005', N'2341720250', CAST(N'2024-12-04' AS Date), N'800', N'file_skripsi2.pdf', N'file_magang2.pdf', N'surat_kompen2.pdf')

SET IDENTITY_INSERT [BERKAS].[Tanggungan] ON 

INSERT [BERKAS].[Tanggungan] ([id_tanggungan], [nim], [jenis_tanggungan], [status_tanggungan]) VALUES (1, N'2341720081', N'Tanggungan Prodi', N'Belum Selesai')
INSERT [BERKAS].[Tanggungan] ([id_tanggungan], [nim], [jenis_tanggungan], [status_tanggungan]) VALUES (2, N'2341720100', N'Tanggungan Prodi', N'Belum Selesai')
INSERT [BERKAS].[Tanggungan] ([id_tanggungan], [nim], [jenis_tanggungan], [status_tanggungan]) VALUES (3, N'2341720101', N'Tanggungan Prodi', N'Belum Selesai')
INSERT [BERKAS].[Tanggungan] ([id_tanggungan], [nim], [jenis_tanggungan], [status_tanggungan]) VALUES (4, N'2341720198', N'Tanggungan Prodi', N'Belum Selesai')
INSERT [BERKAS].[Tanggungan] ([id_tanggungan], [nim], [jenis_tanggungan], [status_tanggungan]) VALUES (5, N'2341720250', N'Tanggungan Prodi', N'Belum Selesai')
INSERT [BERKAS].[Tanggungan] ([id_tanggungan], [nim], [jenis_tanggungan], [status_tanggungan]) VALUES (6, N'2341720081', N'Tanggungan TA', N'Belum Selesai')
INSERT [BERKAS].[Tanggungan] ([id_tanggungan], [nim], [jenis_tanggungan], [status_tanggungan]) VALUES (7, N'2341720100', N'Tanggungan TA', N'Belum Selesai')
INSERT [BERKAS].[Tanggungan] ([id_tanggungan], [nim], [jenis_tanggungan], [status_tanggungan]) VALUES (8, N'2341720101', N'Tanggungan TA', N'Belum Selesai')
INSERT [BERKAS].[Tanggungan] ([id_tanggungan], [nim], [jenis_tanggungan], [status_tanggungan]) VALUES (9, N'2341720198', N'Tanggungan TA', N'Belum Selesai')
INSERT [BERKAS].[Tanggungan] ([id_tanggungan], [nim], [jenis_tanggungan], [status_tanggungan]) VALUES (10, N'2341720250', N'Tanggungan TA', N'Belum Selesai')
SET IDENTITY_INSERT [BERKAS].[Tanggungan] OFF

SET IDENTITY_INSERT [VER].[VerifikasiBerkas] ON 

INSERT [VER].[VerifikasiBerkas] ([id_verifikasi], [id_berkas], [jenis_berkas], [id_admin], [status_verifikasi], [tanggal_verifikasi], [keterangan_verifikasi]) VALUES (1, N'PR0001', N'Prodi', N'A12346', N'Diajukan', NULL, N'Berkas Prodi telah diajukan untuk verifikasi.')
INSERT [VER].[VerifikasiBerkas] ([id_verifikasi], [id_berkas], [jenis_berkas], [id_admin], [status_verifikasi], [tanggal_verifikasi], [keterangan_verifikasi]) VALUES (2, N'PR0002', N'Prodi', N'A12346', N'Diajukan', NULL, N'Berkas Prodi telah diajukan untuk verifikasi.')
INSERT [VER].[VerifikasiBerkas] ([id_verifikasi], [id_berkas], [jenis_berkas], [id_admin], [status_verifikasi], [tanggal_verifikasi], [keterangan_verifikasi]) VALUES (3, N'PR0003', N'Prodi', N'A12346', N'Diajukan', NULL, N'Berkas Prodi telah diajukan untuk verifikasi.')
INSERT [VER].[VerifikasiBerkas] ([id_verifikasi], [id_berkas], [jenis_berkas], [id_admin], [status_verifikasi], [tanggal_verifikasi], [keterangan_verifikasi]) VALUES (4, N'PR0004', N'Prodi', N'A12346', N'Diajukan', NULL, N'Berkas Prodi telah diajukan untuk verifikasi.')
INSERT [VER].[VerifikasiBerkas] ([id_verifikasi], [id_berkas], [jenis_berkas], [id_admin], [status_verifikasi], [tanggal_verifikasi], [keterangan_verifikasi]) VALUES (5, N'PR0005', N'Prodi', N'A12346', N'Disetujui', NULL, N'Berkas Prodi telah diajukan untuk verifikasi.')
INSERT [VER].[VerifikasiBerkas] ([id_verifikasi], [id_berkas], [jenis_berkas], [id_admin], [status_verifikasi], [tanggal_verifikasi], [keterangan_verifikasi]) VALUES (6, N'TA0001', N'Prodi', N'A12345', N'Diajukan', NULL, N'Berkas TA telah diajukan untuk verifikasi.')
INSERT [VER].[VerifikasiBerkas] ([id_verifikasi], [id_berkas], [jenis_berkas], [id_admin], [status_verifikasi], [tanggal_verifikasi], [keterangan_verifikasi]) VALUES (7, N'TA0002', N'Prodi', N'A12345', N'Diajukan', NULL, N'Berkas TA telah diajukan untuk verifikasi.')
INSERT [VER].[VerifikasiBerkas] ([id_verifikasi], [id_berkas], [jenis_berkas], [id_admin], [status_verifikasi], [tanggal_verifikasi], [keterangan_verifikasi]) VALUES (8, N'TA0003', N'Prodi', N'A12345', N'Diajukan', NULL, N'Berkas TA telah diajukan untuk verifikasi.')
INSERT [VER].[VerifikasiBerkas] ([id_verifikasi], [id_berkas], [jenis_berkas], [id_admin], [status_verifikasi], [tanggal_verifikasi], [keterangan_verifikasi]) VALUES (9, N'TA0004', N'Prodi', N'A12345', N'Diajukan', NULL, N'Berkas TA telah diajukan untuk verifikasi.')
INSERT [VER].[VerifikasiBerkas] ([id_verifikasi], [id_berkas], [jenis_berkas], [id_admin], [status_verifikasi], [tanggal_verifikasi], [keterangan_verifikasi]) VALUES (10, N'TA0005', N'Prodi', N'A12345', N'Diajukan', NULL, N'Berkas TA telah diajukan untuk verifikasi.')
SET IDENTITY_INSERT [VER].[VerifikasiBerkas] OFF

