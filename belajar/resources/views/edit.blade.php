<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <form action="{{ route('update.update_sys', $data->id) }}" method="POST">
        @csrf
        {{-- @method('PUT') --}}
    <div class="card mb-4 shadow-sm">
        <div class="card-header bg-light">
            Form Input Data
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label">Nama</label>
                    <input name="nama" type="text" class="form-control" placeholder="Masukkan nama" value="{{ old('nama', $data->nama) }}" required>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">Kelas</label>
                    <input name="kelas" type="text" class="form-control" placeholder="Masukkan kelas" value="{{ old('kelas', $data->kelas) }}" required>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">Telepon</label>
                    <input name="telp" type="text" class="form-control" placeholder="Masukkan nomor telepon" value="{{ old('telp', $data->telp) }} " required>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">Alamat</label>
                    <input name="alamat" type="text" class="form-control" placeholder="Masukkan alamat" value="{{ old('alamat', $data->alamat) }} " required>
                </div>
            </div>

            <div class="mt-3">
                
                <button class="btn btn-success">Simpan</button>
            </div>
        </div>
    </div>
    </form>

</body>
</html>