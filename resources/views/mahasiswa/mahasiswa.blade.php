<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Mahasiswa</title>
    
    @vite(['resources/js/app.js'])
</head>
<body>
    
    <div class="container mt-5">
        @if (session('berhasil'))
            <div class="alert alert-success" role="alert">
            {{ session('berhasil') }}
            </div>
        @endif
        

        <div class="row">
            <div class="col-6">
                <h2>Data Mahasiswa</h2>
            </div>
            <div class="col-6">
            
            <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Tambah Data
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    
                <form action="/mahasiswa" method="POST">
                    @csrf
                        <div class="mb-3">
                            
                            <input name="nama_depan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Depan">
                        </div>

                        <div class="mb-3">
                            
                            <input name="nama_belakang" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Belakang">
                        </div>

                        <div class="mb-3">
                            
                            <input name="nim" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="NIM">
                        </div>

                        <div class="form-group mb-3">
                            <label for="exampleFormControlSelect">Jurusan</label>
                            <select name="jurusan" class="form-select" aria-label="Jurusan">
                            <option value="Teknik Industri">Teknik Industri</option>
                            <option value="Teknik Informatika">Teknik Informatika</option>
                            <option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
                            <option value="Manajemen Retail">Manajemen Retail</option>
                        </select>
                        </div>

                        <div class="form-group mb-3">
                            <label for="exampleFormControlSelect">Jenis Kelamin</label>
                            <select name="jenis_kelamin" class="form-select" aria-label="Jenis Kelamin">
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                        </div>

                        <div class="mb-3"> 
                            <input name="agama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Agama">
                        </div>
                        
                        <div class="mb-3">  
                        <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Alamat"></textarea>
                        </div>
                        
                    
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                </div>
            </div>
            </div>
            </div>
            

    <table class="table table-hover">
        <tr>
            <th>Nama Depan</th>
            <th>Nama Belakang</th>
            <th>NIM</th>
            <th>Jurusan</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>

    @foreach ($data_mahasiswa as $mahasiswa )
    <tr>
        <td>{{ $mahasiswa->nama_depan }}</td>
        <td>{{ $mahasiswa->nama_belakang }}</td>
        <td>{{ $mahasiswa->nim }}</td>
        <td>{{ $mahasiswa->jurusan }}</td>
        <td>{{ $mahasiswa->jenis_kelamin }}</td>
        <td>{{ $mahasiswa->agama }}</td>
        <td>{{ $mahasiswa->alamat }}</td>
        <td>
            <a href="/mahasiswa/{{ $mahasiswa->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
            <a href="/mahasiswa/{{ $mahasiswa->id }}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau dihapus?')">Hapus</a>
        </td>
    </tr>
    @endforeach
    
</table>

        </div>
    </div>
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

