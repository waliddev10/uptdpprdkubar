<form action="{{ route('user.store') }}" accept-charset="UTF-8" class="form needs-validation" id="create"
    autocomplete="off">
    @csrf
    <div class="row">
        <div class="col">
            <div class="mt-2">
                <label class="form-label">ID Pegawai</label>
                <input type="text" name="kode" class="form-control input-air-primary" />
            </div>
            <div class="mt-2">
                <label class="form-label">Password</label>
                <input type="text" name="password" class="form-control input-air-primary" />
            </div>
            <div class="mt-2">
                <label class="form-label">Role</label>
                <select name="role" class="form-select input-air-primary">
                    <option disabled selected>Pilih Role</option>
                    <option value="admin">Admin</option>
                    <option value="user">User</option>
                </select>
            </div>
        </div>
        <div class="col">
            <div class="mt-2">
                <label class="form-label">Nama Pegawai</label>
                <input type="text" name="nama" class="form-control input-air-primary" />
            </div>
            <div class="mt-2">
                <label class="form-label">Jenis Kelamin</label>
                <select name="jenis_kelamin" class="form-select input-air-primary">
                    <option disabled selected>Pilih Jenis Kelamin</option>
                    <option value="0">Perempuan</option>
                    <option value="1">Laki-laki</option>
                </select>
            </div>
            <div class="mt-2">
                <label class="form-label">Tempat Lahir</label>
                <input type="text" name="tempat_lahir" class="form-control input-air-primary" />
            </div>
            <div class="mt-2">
                <label class="form-label">Tanggal Lahir</label>
                <input type="date" name="tgl_lahir" class="form-control input-air-primary" />
            </div>
            <div class="mt-2">
                <label class="form-label">NIP/NIK</label>
                <input type="text" name="nip_nik" class="form-control input-air-primary" />
            </div>
            <div class="mt-2">
                <label class="form-label">Jabatan</label>
                <input type="text" name="jabatan" class="form-control input-air-primary" />
            </div>
            <div class="mt-2">
                <label class="form-label">Pangkat</label>
                <input type="text" name="pangkat" class="form-control input-air-primary" />
            </div>
        </div>
    </div>

    <div class="text-right mt-5">
        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
    </div>

</form>

<script type="text/javascript">
    $("#create").on('submit', function(event) {
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
