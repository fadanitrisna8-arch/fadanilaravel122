<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">SMKS PGRI WLINGI</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href=""></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="b">beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="s">profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">akademik</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">kesiswaan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">berita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Galeri</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Kontak</a>
                    </li>
                </ul>

                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <div id="carouselExampleDark" class="carousel carousel-dark slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
                <img src="pgri.jpg" class="d-block w-100"style height="200" alt="...">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="sekolah.png" class="d-block w-100"style height="200" alt="...">
            </div>
            <div class="carousel-item">
                <img src="rekayasa perangkat lunak.jpg" class="d-block w-100"style height="200" alt="...">
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="row mt-2">
            <div class="col-8">
                <div class="card mb-3"">
                    <div class="row g-0">
                        <div class="card-header">
                            <strong>
                                <h1>Sambutan Kepala Sekolah</h1>
                            </strong>
                        </div>
                        <div class="col-md-2">
                            <img src="bambang.jpg" class="img-fluid rounded-start float-start"
                                style="max-width: 150px" alt="...">
                        </div>
                        <div class="col-md-10">
                            <div class="card-body">
                                <h3 class="card-title">SMKS PGRI WLINGI</h3>
                                <p class="card-text">SMK PGRI Wlingi didirikan pada tanggal 30 April 1987 (atau 17 Juli
                                    1987) di Jalan Jenderal Sudirman nomor 86, Kelurahan Beru, Kecamatan Wlingi,
                                    Kabupaten Blitar, awalnya beroperasi secara resmi pada 21 April 1992 dengan membuka
                                    jurusan Mesin Tenaga/Mekanik Umum dan Listrik Instalasi. Seiring berjalannya waktu,
                                    sekolah yang sempat dijuluki "Pethil" karena keterampilan awal siswanya ini terus
                                    berkembang pesat melalui peningkatan status akreditasi menjadi peringkat "B" pada
                                    tahun 2005 hingga meraih akreditasi "A" dan sertifikasi ISO 9001:2015. Perkembangan
                                    tersebut dibuktikan dengan penambahan berbagai program keahlian modern seperti
                                    Teknik Komputer dan Jaringan, Rekayasa Perangkat Lunak, Teknik Alat Berat, hingga
                                    Desain Komunikasi Visual, serta dilengkapi lisensi Lembaga Sertifikasi Profesi
                                    tingkat 1 (LSP-P1) dan Bursa Kerja Khusus (BKK) guna mencetak lulusan vokasi yang
                                    kompeten dan siap kerja</p>

                            </div>
                        </div>
                    </div>
                </div>



                <div class="card mb-3"">
                    <div class="row g-0">
                        <div class="card-header">
                            <strong>
                                <h1>Kegiatan Terbaru</h1>
                            </strong>
                        </div>
                    </div>
                    <div class="row row-cols-1 row-cols-md-4 g-4">
                        <div class="col">
                            <div class="card h-100 w-70">
                                <img src="mpls.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Upacara Hari Pendidikan</h5>
                                    <p class="card-text">Upacara di SMK PGRI Wlingi rutin digelar setiap Senin dan pada
                                        hari besar nasional untuk melatih kedisiplinan siswa, serta mencakup apel khusus
                                        seperti penutupan MPLS dan seremonial kelulusan</p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-body-secondary">Last updated 3 mins ago</small>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100 w-70">
                                <img src="pramuka.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Kegiatan Ekstra Kulikuler Pramuka</h5>
                                    <p class="card-text">Ekstrakurikuler Pramuka di SMK PGRI Wlingi (Gudep
                                        14.041–14.042) aktif melatih kedisiplinan dan kepemimpinan siswa melalui
                                        kegiatan strategis seperti Penerimaan Tamu Ambalan (PTA), Diklat Bantara, dan
                                        pelantikan Dewan Ambalan</p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-body-secondary">Last updated 3 mins ago</small>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100 w-70">
                                <img src="olahraga.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Lomba Seni Dan Olahraga Antar Kelas</h5>
                                    <p class="card-text">Classmeet SMK PGRI Wlingi adalah lomba seni dan olahraga antar
                                        kelas pascaujian untuk menyalurkan bakat dan mempererat solidaritas siswa</p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-body-secondary">Last updated 3 mins ago</small>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100 w-70">
                                <img src="museum.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Kunjungan Edukasi Dan Museum</h5>
                                    <p class="card-text">Kunjungan edukasi museum adalah belajar luar kelas untuk
                                        memperluas wawasan sejarah, budaya, dan sains siswa secara langsung</p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-body-secondary">Last updated 3 mins ago</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-header">
                        📢Pengumuman Terbaru
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="list-group">
                                <ul class="list-group">
                                    <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="16" height="16" fill="currentColor"
                                            class="bi bi-file-earmark-bar-graph" viewBox="0 0 16 16">
                                            <path
                                                d="M10 13.5a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-6a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5zm-2.5.5a.5.5 0 0 1-.5-.5v-4a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5zm-3 0a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5z" />
                                            <path
                                                d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2M9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z" />
                                        </svg>An item</li>
                                    <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="16" height="16" fill="currentColor"
                                            class="bi bi-file-earmark-bar-graph" viewBox="0 0 16 16">
                                            <path
                                                d="M10 13.5a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-6a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5zm-2.5.5a.5.5 0 0 1-.5-.5v-4a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5zm-3 0a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5z" />
                                            <path
                                                d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2M9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z" />
                                        </svg>A second item</li>
                                    <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="16" height="16" fill="currentColor"
                                            class="bi bi-file-earmark-bar-graph" viewBox="0 0 16 16">
                                            <path
                                                d="M10 13.5a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-6a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5zm-2.5.5a.5.5 0 0 1-.5-.5v-4a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5zm-3 0a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5z" />
                                            <path
                                                d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2M9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z" />
                                        </svg>A third item</li>
                                    <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="16" height="16" fill="currentColor"
                                            class="bi bi-file-earmark-bar-graph" viewBox="0 0 16 16">
                                            <path
                                                d="M10 13.5a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-6a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5zm-2.5.5a.5.5 0 0 1-.5-.5v-4a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5zm-3 0a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5z" />
                                            <path
                                                d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2M9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z" />
                                        </svg>A fourth item</li>
                                    <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="16" height="16" fill="currentColor"
                                            class="bi bi-file-earmark-bar-graph" viewBox="0 0 16 16">
                                            <path
                                                d="M10 13.5a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-6a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5zm-2.5.5a.5.5 0 0 1-.5-.5v-4a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5zm-3 0a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5z" />
                                            <path
                                                d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2M9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z" />
                                        </svg>And a fifth one</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="bi bi-arrow-right text-center">
                        lihat semua pengumuman ༺𓆩⟪龍⟫༺𓆩
                    </div>
                </div>
            </div>


            <div class="card-footer text-center">
                <div class="container-fluid px-4">
                    <div class="row align-items-center min-vh-0" style="min-height: 70px;">
                        <!-- BAGIAN 1 : SEKOLAH -->
                        <div class="col-lg-3 col-md-4">
                            <div class="d-flex align-items-center">
                                <div class="logo me-3">
                                    ★
                                </div>
                                <div>
                                    <h3 class="judul-sekolah">
                                        Nama Sekolah
                                    </h3>
                                    <div class="subjudul">
                                        SMP / SMK / SMA
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                            <div class="garis"></div>
                        </div>
                        <div class="col-lg">
                            <div class="d-flex align-items-center">
                                <div class="kode me-3">
                                </div>
                                <div>
                                    <div class="teks-kecil">
                                        Website ini dikembangkan oleh
                                    </div>
                                    <div class="teks-developer">
                                        Klinik Komputer dan Audio Blitar
                                    </div>
                                    <div class="teks-kecil">
                                        Solusi Teknologi untuk Pendidikan
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                            <div class="garis"></div>
                        </div>
                        <div class="col-lg-3 col-md-4">
                            <div class="d-flex align-items-center">
                                <div class="icon-info me-2">
                                    i
                                </div>
                                <div class="copyright">
                                    © 2025 <strong>Nama Sekolah</strong>.
                                    All rights reserved.<br>
                                    Powered by Klinik Komputer
                                    dan Audio Blitar
                                </div>
                                <div class="col-auto d-none d-lg-block">
                                    <div class="garis"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
            </script>
</body>

</html>
