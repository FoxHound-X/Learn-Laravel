<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Desain CRUD Sederhana</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <h2 class="mb-4">Data Siswa</h2>

    <!-- Tombol Tambah -->
    <div class="mb-3">
        <button class="btn btn-primary">
            + Tambah Data
        </button>
    </div>

    <!-- Form (Desain Saja) -->
    <div class="card mb-4 shadow-sm">
        <div class="card-header bg-light">
            Form Input Data
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text" class="form-control" placeholder="Masukkan nama">
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">Kelas</label>
                    <input type="text" class="form-control" placeholder="Masukkan kelas">
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">Telepon</label>
                    <input type="text" class="form-control" placeholder="Masukkan nomor telepon">
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">Alamat</label>
                    <input type="text" class="form-control" placeholder="Masukkan alamat">
                </div>
            </div>

            <div class="mt-3">
                <button class="btn btn-success">Simpan</button>
                <button class="btn btn-secondary">Batal</button>
            </div>
        </div>
    </div>

    <!-- Tabel -->
    <div class="card shadow-sm">
        <div class="card-header bg-dark text-white">
            Tabel Data Siswa
        </div>
        <div class="card-body p-0">
            <table class="table table-bordered table-striped mb-0">
                <thead class="table-dark text-center">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Telepon</th>
                        <th>Alamat</th>
                        <th width="150">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Contoh Tampilan Baris (Boleh Hapus) -->
                    @foreach ($dataku as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->nama}}</td>
                        <td>{{ $item->kelas }}</td>
                        <td>{{ $item->telp }}</td>
                        <td>{{ $item->alamat }}</td>
                        <td class="text-center">
                            <button class="btn btn-warning btn-sm">Ubah</button>
                            <button class="btn btn-danger btn-sm">Hapus</button>
                        </td>
                    </tr>
                        
                    @endforeach

                    <!-- Nanti data akan kamu generate di sini -->
                </tbody>
            </table>
        </div>
    </div>

</div>

</body>
</html>