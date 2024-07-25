@extends('template')

@section('konten')
    <div class="d-flex">
        <h3>Daftar Mahasiswa</h3>
        <a href="{{ route('mahasiswa.add') }}" class="btn btn-success ms-auto">Tambah Mahasiswa</a>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Hobi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mahasiswa as $no => $data)
                <tr>
                    <td>{{ $no +1 }}</td>
                    <td>{{ $data->nim }}</td>
                    <td>{{ $data->nama }}</td>
                    <td>{{ $data->alamat }}</td>
                    <td>{{ $data->hobi }}</td>
                    <td>
                        <div class="d-flex">
                            <a href="{{ route('mahasiswa.edit', $data->id) }}" class="btn btn-warning">Ubah</a>
                            <form action="{{ route('mahasiswa.delete', $data->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger ms-1">Hapus</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
