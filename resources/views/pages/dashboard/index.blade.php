@extends('layouts.app')

@section('title', 'Beranda')
@section('title.category', 'General')

@section('content')
<div class="row second-chart-list third-news-update">
    <div class="col-xl-4 col-lg-12 xl-50 morning-sec box-col-12">
        <div class="card profile-greeting">
            <div class="card-body">
                <div class="media">
                    <div class="media-body">
                        <div class="greeting-user">
                            <h4 class="f-w-600 font-primary"><i class="me-1" data-feather="clock"></i><span
                                    id="clock_txt"></span></h4>
                            <p>Cek Absensi Anda hari ini.</p>
                            <div class="whatsnew-btn"><a class="btn btn-primary">Cek Absensi</a>
                            </div>
                        </div>
                    </div>
                    @push('scripts')
                    <script>
                        $(document).ready(function() {
                            startTime();
                        });
                        function startTime() {
                          const today = new Date();
                          let h = today.getHours();
                          let m = today.getMinutes();
                          let s = today.getSeconds();
                          m = checkTime(m);
                          s = checkTime(s);
                          document.getElementById('clock_txt').innerHTML =  h + ":" + m + ':' + s + ' WITA';
                          setTimeout(startTime, 1000);
                        }

                        function checkTime(i) {
                          if (i < 10) {i = "0" + i};
                          return i;
                        }
                    </script>
                    @endpush
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
