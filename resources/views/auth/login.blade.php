@extends('layouts.guest')

@section('content')
<div>
    <div class="login-main">
        <form method="POST" action="{{ route('login') }}" class="theme-form">
            @csrf
            <div>
                <img class="img" height="64" src="{{ asset('assets/images/logo-bapenda.png') }}" alt="looginpage">
            </div>
            <div class="form-group">
                <label class="col-form-label">ID Pegawai</label>
                <input autofocus required type="text" name="kode" class="form-control" placeholder="ID Pegawai"
                    value="{{ old('kode') }}" />
                @error('kode')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label class="col-form-label">Password</label>
                <input required type="password" name="password" class="form-control" placeholder="Password" />
                @error('password')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <input type="hidden" value="true" name="remember">
                <div class="text-end mt-3">
                    <button class="btn btn-primary-gradien btn-block w-100" type="submit"><i data-feather="cpu"></i>
                        Proses Akses</button>
                </div>
            </div>
        </form>
    </div>
    <div class="text-center mt-3">
        <object style="width:150px;" type="image/svg+xml" data="{{ asset('assets/images/digicert.svg') }}"></object>
    </div>
</div>
@endsection
