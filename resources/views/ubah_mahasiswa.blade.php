@extends('template')

@section('konten')
    <h3 class="text-center">Form Ubah Mahasiswa</h3>
    <form action="" method="post">
        @csrf
        @method('PUT')
        <label for="nim">NIM</label>
        <input type="text" name="nim" class="form-control mb-2" value="{{ $mahasiswa->nim }}">
        <label for="nama">Nama</label>
        <input type="text" name="nama" class="form-control mb-2" value="{{ $mahasiswa->nama }}">
        <label for="alamat">Alamat</label>
        <textarea name="alamat" cols="30" rows="10" class="form-control mb-2">{{ $mahasiswa->alamat }}</textarea>
        <label for="hobi">Hobi</label>
        <input type="text" name="hobi" class="form-control mb-2" value="{{ $mahasiswa->hobi }}">

        <button class="btn btn-primary">Simpan</button>
    </form>
@endsection