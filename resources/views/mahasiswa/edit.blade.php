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
    
    <div class="container mt-4">
        <h1 class="mb-4">Edit Data Mahasiswa</h1>
        @if (session('berhasil'))
            <div class="alert alert-success" role="alert">
            {{ session('berhasil') }}
            </div>
        @endif
        

        <div class="row">
            <div class="col-lg-12">

            
            <form action="/mahasiswa/{{ $mahasiswa->id }}/update" method="POST">
                    @csrf
                        <div class="mb-3">
                            
                            <input name="nama_depan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Depan" value="{{ $mahasiswa->nama_depan }}">
                        </div>

                        <div class="mb-3">
                            
                            <input name="nama_belakang" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Belakang" value="{{ $mahasiswa->nama_belakang }}">
                        </div>

                        <div class="mb-3">
                            
                            <input name="nim" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="NIM" value="{{ $mahasiswa->nim }}">
                        </div>

                        <div class="form-group mb-3">
                            <label for="exampleFormControlSelect">Jurusan</label>
                            <select name="jurusan" class="form-select" aria-label="Jurusan">
                            <option value="Teknik Industri" @if ($mahasiswa->jurusan == 'Teknik Industri')
                                selected
                            @endif>Teknik Industri</option>
                            <option value="Teknik Informatika" @if ($mahasiswa->jurusan == 'Teknik Informatika')
                                selected
                            @endif>Teknik Informatika</option>
                            <option value="Desain Komunikasi Visual" @if ($mahasiswa->jurusan == 'Desain Komunikasi Visual')
                                selected
                            @endif>Desain Komunikasi Visual</option>
                            <option value="Manajemen Retail" @if ($mahasiswa->jurusan == 'Manajemen Retail')
                                selected
                            @endif>Manajemen Retail</option>
                        </select>
                        </div>

                        <div class="form-group mb-3">
                            <label for="exampleFormControlSelect">Jenis Kelamin</label>
                            <select name="jenis_kelamin" class="form-select" aria-label="Jenis Kelamin">
                            <option value="Laki-laki" @if ($mahasiswa->jenis_kelamin == 'Laki-laki')
                                selected
                            @endif>Laki-laki</option>
                            <option value="Perempuan" @if ($mahasiswa->jenis_kelamin == 'Perempuan')
                                selected
                            @endif>Perempuan</option>
                        </select>
                        </div>

                        <div class="mb-3"> 
                            <input name="agama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Agama" value="{{ $mahasiswa->agama }}">
                        </div>
                        
                        <div class="mb-3">  
                        <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Alamat"> {{ $mahasiswa->alamat }} </textarea>
                        </div>

                        <button type="submit" class="btn btn-warning">Update</button>
                    </form>
                </div>    

        </div>
    </div>
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

