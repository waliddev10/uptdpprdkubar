<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>{{ config('app.name') }}</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="{{ asset('startbootstrap/favicon.ico') }}" />
    <!-- Bootstrap Icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic"
        rel="stylesheet" type="text/css" />
    <!-- SimpleLightbox plugin CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('startbootstrap/css/styles.css') }}" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="#page-top">{{ config('app.name') }}</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto my-2 my-lg-0">
                    {{-- <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li> --}}
                    <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container px-4 px-lg-5 h-100">
            <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-8 align-self-end">
                    <h1 class="text-white font-weight-bold">{{ config('app.name') }}</h1>
                    <hr class="divider" />
                </div>
                <div class="col-lg-8 align-self-baseline">
                    <p class="text-white-75 mb-5">Unit Pelaksana Teknis Daerah Pelayanan Pajak dan Reyribusi Daerah
                        (UPTD PPRD) Kutai Barat memiliki Sistem Administrasi Manunggal Satu Atap (Samsat)induk bersama
                        Polisi Repubik Indonesia (Polri) dan PT. Jasa Raharja, beralamat di Jl. Paus Doy Rambeng,
                        Kecamatan Barong Tongkok, Kabupaten Kutai Barat.</p>
                    <a class="btn btn-primary btn-xl" href="#about">Selengkapnya</a>
                </div>
            </div>
        </div>
    </header>
    <section class="page-section" id="about">
        <div class="container px-4 px-lg-5">
            <h2 class="text-center mt-0">Tentang Kami</h2>
            <hr class="divider" />
            <div class="col-lg-12 align-self-baseline">
                <p>Unit Pelaksana Teknis Daerah Pelayanan Pajak dan Reyribusi Daerah (UPTD PPRD) Kutai Barat memiliki
                    Sistem Administrasi Manunggal Satu Atap (Samsat)induk bersama Polisi Repubik Indonesia (Polri) dan
                    PT. Jasa Raharja, beralamat di Jl. Paus Doy Rambeng, Kecamatan Barong Tongkok, Kabupaten Kutai
                    Barat, memiliki wilayah kerja di dua kabupaten, yaitu Kabupaten Kutai Barat dan Kabupaten Mahakam
                    Ulu. UPTD PPRD Kutai Barat dipimpin oleh seorang Kepala UPTD, yaitu Bapak Akhmad Sarkawi, S.Sos,
                    terdiri dari satu bagian tata usaha dan dua seksi, yaitu Seksi Pendataan dan Penetapan, serta Seksi
                    Pembukuan dan Penagihan. Untuk mempermudah wajib pajak dalam membayar pajak, UPTD PPRD Kutai Barat
                    juga memiliki sepuluh kantor pelayanan, yaitu tiga samsat pembantu, dan tujuh payment point. Samsat
                    cabang pembantu terdiri dari Samsat Pembantu Melak, Samsat Pembantu Muara Tae dan Samsat Pembantu
                    Mahakam Ulu. Sedangkan payment point terdapat di Bankaltimtara Tering, Bankaltimtara Simpang Raya,
                    Bankaltimtara Muaralawa, Kantor Kecamatan Resak, Kantor Kecamatan Linggang Bigung, Kantor Desa
                    Srimulyo, dan satu mobil Samsat Jelajah. Pembayaran Pajak juga dapat dilakukan melalui e-samsat
                    seperti, Tokopedia, ATM Bankaltimtara, ATM BNI, Mobile Banking, PT. Pegadaian, PT Pos Indonesia, dan
                    Indomaret.
                </p>
            </div>
            <h4>
                Pelayanan 24 Jam:
            </h4>
            <div class="row gx-4 gx-lg-5">
                <div class="col-lg-2 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2">
                            <img src="https://assets.tokopedia.net/assets-tokopedia-lite/v2/arael/kratos/36c1015e.png"
                                height="100" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/c/cc/Logo_Bankaltimtara.png"
                                height="100" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2">
                            <img src="https://blogger.googleusercontent.com/img/a/AVvXsEh80LH3T3peVBULYHQuUrBV-Jw5PhVSd76meIkiWPZLOYld5pS0L1qIytIKG0dYx5T6Uai4gPxCsJk8g-74s2VRKLjAd4ZcqdUI_cuNGrsccRktlzpDAFLHm5iFfBdFAD0FPS1r32ddoXLe4tFZqp-cwKqlMSj5TzHM2Wrja9r4bhb39Hz7ntoXMaDM-w=s320"
                                height="100" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2">
                            <img src="https://1.bp.blogspot.com/-3EfqUXKoHOg/YVQAljAqQrI/AAAAAAAAZ14/E7Otm_sj7HwZsr84K8r0EEvWZzm424vfwCLcBGAsYHQ/s453/cara-registrasi-mandiri-mobile-di-iphone.png"
                                height="100" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2">
                            <img src="https://ib.bankaltimtara.co.id/retail3/image/kaltim-logo.png" height="100" />
                        </div>
                    </div>
                </div>
            </div>
            <h4 class="mt-3">
                Pelayanan sesuai jam kantor/perusahaan:
            </h4>
            <div class="row gx-4 gx-lg-5">
                <div class="col-lg-2 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2">
                            <img src="https://upload.wikimedia.org/wikipedia/id/thumb/0/00/Pos-Indonesia.svg/1200px-Pos-Indonesia.svg.png"
                                height="100" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/dc/Pegadaian_logo_%282013%29.svg/1200px-Pegadaian_logo_%282013%29.svg.png"
                                height="100" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2">
                            <img src="https://indomaret.co.id/Assets/image/logo_indomaret.png" height="100" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="page-section" id="about">
        <div class="container px-4 px-lg-5">
            <h2 class="text-center mt-0">Profil UPTD PPRD Kutai Barat</h2>
            <hr class="divider" />
            <div class="col-lg-12 align-self-baseline">
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <td>
                                <span>SAMSAT Induk Kutai
                                    Barat</span>
                            </td>
                            <td>
                                <span>:</span>
                            </td>
                            <td colspan="2">
                                <p>Jl. Paus Doy Rambeng, Sendawar, Kutai Barat</p>
                                <p><a
                                        href="https://maps.app.goo.gl/5cF9Z1jSaLiT5RuR6">https://maps.app.goo.gl/5cF9Z1jSaLiT5RuR6</a>
                                </p>
                                <p><br data-cke-filler="true"></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span>SAMSAT Cabang Pembantu
                                    Melak</span>
                            </td>
                            <td>
                                <span>:</span>
                            </td>
                            <td colspan="2">
                                <p>Jl. Sendawar Raya, Melak, Kutai Barat</p>
                                <p><a
                                        href="https://maps.app.goo.gl/23Mqeomn8AJQDLL19">https://maps.app.goo.gl/23Mqeomn8AJQDLL19</a>
                                </p>
                                <p><br data-cke-filler="true"></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span>SAMSAT Cabang Pembantu
                                    Muara Tae</span>
                            </td>
                            <td>
                                <span>:</span>
                            </td>
                            <td colspan="2">
                                <p>Muara Tae, Kecamatan Jempang, Kutai Barat</p>
                                <p><a
                                        href="https://maps.app.goo.gl/6s5CdDyFkyHaFpzb9">https://maps.app.goo.gl/6s5CdDyFkyHaFpzb9</a>
                                </p>
                                <p><br data-cke-filler="true"></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span>SAMSAT Pembantu Pesat
                                    Bongan (Resak)</span>
                            </td>
                            <td>
                                <span>:</span>
                            </td>
                            <td colspan="2">
                                <p>Kantor Camat, Kecamatan Bongan, Kutai Barat&nbsp;</p>
                                <p><a
                                        href="https://goo.gl/maps/YMAq4mZ24LQSohyf7">https://goo.gl/maps/YMAq4mZ24LQSohyf7</a>
                                </p>
                                <p><br data-cke-filler="true"></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span>SAMSAT Cabang Pembantu
                                    Mahulu</span>
                            </td>
                            <td>
                                <span>:</span>
                            </td>
                            <td colspan="2">
                                <p>Kecamatan Long Bagun, Mahakam Ulu</p>
                                <p><a
                                        href="https://maps.app.goo.gl/WhNdg3VNUMmQnjwf8">https://maps.app.goo.gl/WhNdg3VNUMmQnjwf8</a>
                                </p>
                                <p><br data-cke-filler="true"></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span>SAMSAT Payment Point
                                    Bankaltimtara Tering (jumat masuk)&nbsp;</span>
                            </td>
                            <td>
                                <span>:</span>
                            </td>
                            <td colspan="2">
                                <p>Jl. Kapten Tausin, Kecamatan Tering, Kutai Barat</p>
                                <p><a
                                        href="https://maps.app.goo.gl/sN6YYpzF1GbMr6Cd6">https://maps.app.goo.gl/sN6YYpzF1GbMr6Cd6</a>
                                </p>
                                <p><br data-cke-filler="true"></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span>SAMSAT Payment Point Muara
                                    Lawa</span>
                            </td>
                            <td>
                                <span>:</span>
                            </td>
                            <td colspan="2">
                                <p>BPD Kaltim Kantor Kas Muara Lawa,Lambing, Kecamatan Muara Lawa</p>
                                <p><a
                                        href="https://maps.app.goo.gl/QK5Pz7KHrk5aZEDD8">https://maps.app.goo.gl/QK5Pz7KHrk5aZEDD8</a>
                                </p>
                                <p><br data-cke-filler="true"></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span>SAMSAT Payment Point
                                    Bankaltimtara Simpang Raya</span>
                            </td>
                            <td>
                                <span>:</span>
                            </td>
                            <td colspan="2">
                                <p>Kecamatan Barong Tongkok, Kutai Barat</p>
                                <p><a
                                        href="https://goo.gl/maps/aAJ4rmoUfTArzbnQA">https://goo.gl/maps/aAJ4rmoUfTArzbnQA</a>
                                </p>
                                <p><br data-cke-filler="true"></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span>SAMSAT Desa Sri
                                    Mulyo</span>
                            </td>
                            <td>
                                <span>:</span>
                            </td>
                            <td colspan="2">
                                <p>Jalan Agatis No.RT. 02, Srimulyo, Kecamatan&nbsp;Sekolaq Darat</p>
                                <p><a
                                        href="https://maps.app.goo.gl/tAQr2wPGJPMf9CPB6">https://maps.app.goo.gl/tAQr2wPGJPMf9CPB6</a>
                                </p>
                                <p><br data-cke-filler="true"></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span>SAMSAT Paten Linggang
                                    Bigung</span>
                            </td>
                            <td>
                                <span>:</span>
                            </td>
                            <td colspan="2">
                                <p>Jl.A.Yani No.RT. 07, Linggang Bigung, Kec. Linggang Bigung</p>
                                <p><a
                                        href="https://goo.gl/maps/11L5zZQQo6uiafBM9">https://goo.gl/maps/11L5zZQQo6uiafBM9</a>
                                </p>
                                <p><br data-cke-filler="true"></p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" rowspan="4">
                                <p>SAMSAT Jelajah (08.30 – 12.00)</p>
                                <p>Senin-kamis saja</p>
                            </td>
                            <td><span>Senin</span></td>
                            <td>
                                <span>Simpang 4 Pelabuhan Melak,
                                    Kecamatan Melak</span>
                            </td>
                        </tr>
                        <tr>
                            <td><span>Selasa</span></td>
                            <td>
                                <span>Balai Desa Bangun Sari,
                                    Kecamatan Long Bigung</span>
                            </td>
                        </tr>
                        <tr>
                            <td><span>Rabu</span></td>
                            <td>
                                <span>Damai, Kecamatan
                                    Damai</span>
                            </td>
                        </tr>
                        <tr>
                            <td><span>Kamis</span></td>
                            <td>
                                <span>Pelabuhan Tering,
                                    Kecamatan Long Iram</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-lg-12 align-self-baseline">
                Jam Pelayanan Samsat Induk Kutai Barat:
                <table style=";">
                    <tbody>
                        <tr>
                            <td class="ck-editor__editable ck-editor__nested-editable"
                                style="border:1.0pt solid windowtext;padding:0cm 5.4pt;vertical-align:top;width:91.35pt;"
                                contenteditable="true"><span class="ck-table-bogus-paragraph">Senin – Kamis</span></td>
                            <td class="ck-editor__editable ck-editor__nested-editable"
                                style="border-bottom-style:solid;border-color:windowtext;border-left-style:none;border-right-style:solid;border-top-style:solid;border-width:1.0pt;padding:0cm 5.4pt;vertical-align:top;width:14.15pt;"
                                contenteditable="true"><span class="ck-table-bogus-paragraph">:</span></td>
                            <td class="ck-editor__editable ck-editor__nested-editable"
                                style="border-bottom-style:solid;border-color:windowtext;border-left-style:none;border-right-style:solid;border-top-style:solid;border-width:1.0pt;padding:0cm 5.4pt;vertical-align:top;width:309.3pt;"
                                contenteditable="true"><span class="ck-table-bogus-paragraph">08.00 WITA – 14.00
                                    WITA</span></td>
                        </tr>
                        <tr>
                            <td class="ck-editor__editable ck-editor__nested-editable"
                                style="border-bottom-style:solid;border-color:windowtext;border-left-style:solid;border-right-style:solid;border-top-style:none;border-width:1.0pt;padding:0cm 5.4pt;vertical-align:top;width:91.35pt;"
                                contenteditable="true"><span class="ck-table-bogus-paragraph">Jumat – Sabtu</span></td>
                            <td class="ck-editor__editable ck-editor__nested-editable"
                                style="border-bottom:1.0pt solid windowtext;border-left-style:none;border-right:1.0pt solid windowtext;border-top-style:none;padding:0cm 5.4pt;vertical-align:top;width:14.15pt;"
                                contenteditable="true"><span class="ck-table-bogus-paragraph">:</span></td>
                            <td class="ck-editor__editable ck-editor__nested-editable"
                                style="border-bottom:1.0pt solid windowtext;border-left-style:none;border-right:1.0pt solid windowtext;border-top-style:none;padding:0cm 5.4pt;vertical-align:top;width:309.3pt;"
                                contenteditable="true"><span class="ck-table-bogus-paragraph">08.00 WITA – 11.30
                                    WITA</span></td>
                        </tr>
                        <tr>
                            <td class="ck-editor__editable ck-editor__nested-editable"
                                style="border-bottom-style:solid;border-color:windowtext;border-left-style:solid;border-right-style:solid;border-top-style:none;border-width:1.0pt;padding:0cm 5.4pt;vertical-align:top;width:91.35pt;"
                                contenteditable="true"><span class="ck-table-bogus-paragraph">Minggu</span></td>
                            <td class="ck-editor__editable ck-editor__nested-editable"
                                style="border-bottom:1.0pt solid windowtext;border-left-style:none;border-right:1.0pt solid windowtext;border-top-style:none;padding:0cm 5.4pt;vertical-align:top;width:14.15pt;"
                                contenteditable="true"><span class="ck-table-bogus-paragraph">:</span></td>
                            <td class="ck-editor__editable ck-editor__nested-editable"
                                style="border-bottom:1.0pt solid windowtext;border-left-style:none;border-right:1.0pt solid windowtext;border-top-style:none;padding:0cm 5.4pt;vertical-align:top;width:309.3pt;"
                                contenteditable="true"><span class="ck-table-bogus-paragraph">TUTUP</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <!-- About-->
    <section class="page-section bg-success" id="struktur">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-12 text-center">
                    <h2 class="text-white mt-0">Struktur Organisasi</h2>
                    <hr class="divider divider-light" />
                    <img class="img img-responsive" width="100%"
                        src="{{ asset('startbootstrap/assets/img/struktur-organisasi.png') }}" />
                </div>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="bg-light py-5">
        <div class="container px-4 px-lg-5">
            <div class="small text-center text-muted">Copyright &copy; 2022 - {{ config('app.name') }}</div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- SimpleLightbox plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>
