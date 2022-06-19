<form action="{{ route('user.update', $item->id) }}" accept-charset="UTF-8" class="form needs-validation" id="editForm"
    autocomplete="off">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col">
            <div class="mt-2">
                <label class="form-label">ID Pegawai</label>
                <input type="text" name="kode" class="form-control input-air-primary" value="{{ $item->id }}" />
            </div>
            <div class="mt-2">
                <label class="form-label">Password</label>
                <div class="alert alert-warning" role="alert">
                    Silakan isi password jika ingin merubah password lama, dan kosongi jika tidak ingin merubah
                    password.
                </div>
                <input type="text" name="password" class="form-control input-air-primary">
            </div>
            <div class="mt-2">
                <label class="form-label">Role</label>
                <select name="role" class="form-select input-air-primary">
                    <option selected disabled>Pilih Role...</option>
                    <option value="admin" @if($item->role == 'admin') selected @endif>Admin</option>
                    <option value="user" @if($item->role == 'user') selected @endif>User</option>
                </select>
            </div>
        </div>
        <div class="col">
            <div class="mt-2">
                <label class="form-label">Nama Pegawai</label>
                <input type="text" name="nama" class="form-control input-air-primary" value="{{ $item->nama }}" />
            </div>
            <div class="mt-2">
                <label class="form-label">Jenis Kelamin</label>
                <select name="jenis_kelamin" class="form-select input-air-primary">
                    <option disabled selected>Pilih Jenis Kelamin</option>
                    <option value="0" @if($item->jenis_kelamin == '0') selected @endif>Perempuan</option>
                    <option value="1" @if($item->jenis_kelamin == '1') selected @endif>Laki-laki</option>
                </select>
            </div>
            <div class="mt-2">
                <label class="form-label">Tempat Lahir</label>
                <input type="text" name="tempat_lahir" class="form-control input-air-primary"
                    value="{{ $item->tempat_lahir }}" />
            </div>
            <div class="mt-2">
                <label class="form-label">Tanggal Lahir</label>
                <input type="text" name="tgl_lahir" class="form-control input-air-primary"
                    value="{{ $item->tgl_lahir }}" />
            </div>
            <div class="mt-2">
                <label class="form-label">NIP/NIK</label>
                <input type="text" name="nip_nik" class="form-control input-air-primary" value="{{ $item->nip_nik }}" />
            </div>
            <div class="mt-2">
                <label class="form-label">Jabatan</label>
                <input type="text" name="jabatan" class="form-control input-air-primary" value="{{ $item->jabatan }}" />
            </div>
            <div class="mt-2">
                <label class="form-label">Pangkat</label>
                <input type="text" name="pangkat" class="form-control input-air-primary" value="{{ $item->pangkat }}" />
            </div>
        </div>
    </div>

    <div class="mt-5 text-right">
        <div class="col-12">
            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Ubah Data</button>
        </div>
    </div>

</form>

<script type="text/javascript">
    $("#editForm").on('submit', function(event) {
        event.preventDefault();
        var form = $(this);
        var formData = new FormData($(this)[0]);

        $.ajax({
            url: form.attr('action'),
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                $("#modalContainer").modal('hide');
                tableDokumen.ajax.reload(null, false);
                showAlert(response.message, response.status || 'success');
            },
            error: function(xhr) {
                var err = eval("(" + xhr.responseText + ")");
                showAlert(err.message, err.status || 'error');
            }
        });
        return false;
    });
</script>
