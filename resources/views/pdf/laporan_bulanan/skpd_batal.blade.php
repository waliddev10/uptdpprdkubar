<style>
    @page {
        margin-top: 1cm;
        margin-right: 2cm;
        margin-bottom: 2cm;
        margin-left: 2cm;
    }

    body {
        font-size: 10pt;
    }

    table td,
    table td * {
        vertical-align: top;
    }

    .table tr,
    .table th,
    .table td {
        padding: 5pt;
    }
</style>

<body>

    <table style="width: 100%;">
        <thead style="border-bottom: 6px solid black; border-bottom-style: double; padding: 0 0 0.2cm 0;">
            <tr>
                <td style="text-align: center; padding: 0;"><img src="{{ asset('assets/img/logo-kaltim.png') }}"
                        height="100" />
                </td>
                <td style="text-align: center; padding: 0;">
                    <h2 style="margin: 0; font-size: 14pt;">PEMERINTAH PROVINSI KALIMANTAN TIMUR</h2>
                    <h1 style="margin: 0; font-size: 18pt;">BADAN PENDAPATAN DAERAH</h1>
                    <h3 style="margin: 0; font-size: 12pt;">UPTD. PELAYANAN PAJAK DAN RETRIBUSI DAERAH
                        WILAYAH PPU</h3>
                    <h4 style="margin: 0;">Jalan Provinsi KM. 4,5 Penajam Telp. (0542) 7588802 Fax. (0542) 7200812</h4>
                    <h4 style="margin: 0;">P E N A J A M</h4>
                </td>
            </tr>
        </thead>
    </table>

    <div style="margin-top: 1.25cm; margin-bottom: 1cm; text-align: center;">
        <h3 style="margin: 0 0 0.2cm 0;">BERITA ACARA SKKP BATAL</h3>
        <span>Nomor: 970/{{ $no_surat }}/PPRD.PPU.02/{{
            \Terbilang::roman(\Carbon\Carbon::parse($tgl_ttd)->format('m')) }}/2022</span>
    </div>

    <p style="text-indent: 1cm; text-align: justify; line-height: 14pt;">Pada hari ini {{
        \Carbon\Carbon::parse($tgl_ttd)->dayName }} tanggal
        {{
        ucwords(\Terbilang::make(\Carbon\Carbon::parse($tgl_ttd)->format('d'))) }} Bulan {{
        \Carbon\Carbon::parse($tgl_ttd)->monthName }} Tahun {{
        ucwords(\Terbilang::make(\Carbon\Carbon::parse($tgl_ttd)->format('Y'))) }}, kami masing-masing yang
        bertanda tangan dibawah ini :
    </p>

    <div style="margin-left: 2cm; line-height: 14pt;">
        <table style="width: 100%; margin-top: 0; margin-bottom: 0;">
            <tr>
                <td style="width: 0.5cm;">1.</td>
                <td style="width: 40%;">{{ $penandatangan3->nama }}</td>
                <td style="width: 0.3cm;">:</td>
                <td style="width: 50%; text-align: justify;">{{ $penandatangan3->jabatan }} PPRD Wil. Penajam Paser
                    Utara
                </td>
            </tr>
            <tr>
                <td style="width: 0.5cm;">2.</td>
                <td style="width: 40%;">{{ $penandatangan2->nama }}</td>
                <td style="width: 0.3cm;">:</td>
                <td style="width: 50%; text-align: justify;">{{ $penandatangan2->jabatan }}</td>
            </tr>
            <tr>
                <td style="width: 0.5cm;">3.</td>
                <td style="width: 40%;">{{ $penandatangan1->nama }}</td>
                <td style="width: 10%;">:</td>
                <td style="width: 50%; text-align: justify;">{{ $penandatangan1->jabatan }} Samsat {{
                    $payment_point->nama }}</td>
            </tr>
        </table>
    </div>

    <p style="text-align: justify; line-height: 14pt;">Menyatakan bahwa SKKP yang rusak/batal :</p>

    <table class="table" style="font-size: 9pt; width: 100%; border-collapse: collapse; margin: 0 0 10pt 0;">
        <tr style="border-bottom: 4px solid black; border-bottom-style: double;">
            <th style="border: 0.5pt solid black; width: 5%;">NO.</th>
            <th style="border: 0.5pt solid black; width: 25%;">TANGGAL</th>
            <th style="border: 0.5pt solid black; width: 25%;">NO. SKKP</th>
            <th style="border: 0.5pt solid black; width: 50%;">KETERANGAN</th>
        </tr>
        @foreach ($data as $d)
        <tr>
            <td style="border: 0.5pt solid black; text-align: center;">{{ $loop->iteration }}</td>
            <td style="border: 0.5pt solid black; text-align: center;">{{
                \Carbon\Carbon::parse($d->tgl_cetak)->isoFormat('D MMMM Y') }}</td>
            <td style="border: 0.5pt solid black; text-align: center;">{{ $d->no_skpd }}</td>
            <td style="border: 0.5pt solid black; text-align: center;">{{ $d->keterangan }}</td>
        </tr>
        @endforeach
    </table>

    <p style="text-indent: 1cm; text-align: justify; line-height: 14pt;">Demikian Berita Acara ini dibuat dan
        ditandatangani bersama untuk dipergunakan sebagaimana mestinya.</p>

    <table style="width: 100%; border-collapse: collapse;">
        <tr>
            <td style="width: 35%;">
                <div style="text-align: center;">
                    <div style="margin: 10pt 0 40pt;">{{ $penandatangan1->jabatan }}</div>

                    <h4 style="margin: 0 0 3pt 0; text-decoration: underline;">{{ $penandatangan1->nama }}</h4>
                    <h5 style="font-weight: normal; margin: 0;">NIP. {{ $penandatangan1->nip }}
                    </h5>
                </div>
            </td>
            <td style="width: 30%;">
            </td>
            <td style="width: 35%;">
                <div style="text-align: center;">
                    <div style="margin: 10pt 0 40pt;">{{ $penandatangan2->jabatan }}</div>

                    <h4 style="margin: 0 0 3pt 0; text-decoration: underline;">{{ $penandatangan2->nama }}</h4>
                    <h5 style="font-weight: normal; margin: 0;">NIP. {{ $penandatangan2->nip }}</h5>
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="3">
                <div style="text-align: center;">
                    <span>Mengetahui,</span>
                    <div style="margin: 5pt 0 40pt;">{{ $penandatangan3->jabatan }}</div>

                    <h4 style="margin: 0 0 3pt 0; text-decoration: underline;">{{ $penandatangan3->nama }}</h4>
                    <h5 style="font-weight: normal; margin: 0;">NIP. {{ $penandatangan3->nip }}</h5>
                </div>
            </td>
        </tr>
    </table>

</body>