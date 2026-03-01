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
    <a href="{{ route('tambah.tambah_tampil') }}" 
       class="btn btn-primary">
        Tambah Data
    </a>
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
                        <form action="{{ route('tambah.delete_data', $item->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger btn-sm">Hapus</button>
                        </form>
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