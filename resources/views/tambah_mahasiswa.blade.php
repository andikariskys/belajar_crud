@extends('template')

@section('konten')
    <h3 class="text-center">Form Tambah Mahasiswa</h3>
    <form action="{{ route('mahasiswa.save') }}" method="post">
        @csrf
        <label for="nim">NIM</label>
        <input type="text" name="nim" class="form-control mb-2">
        <label for="nama">Nama</label>
        <input type="text" name="nama" class="form-control mb-2">
        <label for="alamat">Alamat</label>
        <textarea name="alamat" cols="30" rows="10" class="form-control mb-2"></textarea>
        <label for="hobi">Hobi</label>
        <input type="text" name="hobi" class="form-control mb-2">

        <button class="btn btn-primary">Simpan</button>
    </form>
@endsection