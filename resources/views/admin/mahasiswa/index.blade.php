@extends('layouts.admin')

@section('content')

<div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Data Mahasiswa</h3> &nbsp;
        <br>
        <a href="{{ url('/downloadpdf') }}" target="_blank" class="btn btn-info btn-md">Unduh PDF</a>
      </br>
        <div class="card-tools">
            <form action="/mahasiswa/search" class="form-inline" method="GET">
            <input type="search" name="search" class="form-control float-right" placeholder="Isikan nama">
            <div class="input-group-append">
              <button type="submit" class="btn btn-default">
                <i class="fas fa-search"></i>
              </button>
            </div>
        </form>
          </div>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body table-responsive p-0" style="height: 300px;">
        <table class="table table-head-fixed text-nowrap">
          <thead>
            <tr>
              <th>Nama</th>
              <th>Jenkel</th>
              <th>Alamat</th>
              <th>No Hp</th>
              <th>Jurusan</th>
              <th>Email</th>
              <th>Opsi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($mahasiswa as $mahasiswa)
            <tr>
                <td>{{ $mahasiswa->nama }}</td>
                <td>{{ $mahasiswa->jenkel }}</td>
                <td>{{ $mahasiswa->alamat }}</td>
                <td>{{ $mahasiswa->hp }}</td>
                <td>{{ $mahasiswa->jurusan }}</td>
                <td>{{ $mahasiswa->email }}</td>

                <td> <a href="/mahasiswa/{{ $mahasiswa->id }}/delete" class="btn btn-danger" onclick="return confirm('APAKAH ANDA YAKIN? {{ $mahasiswa->nama }}');">HAPUS</a>
            </td>
            <td>
                <a  href="/mahasiswa/{{ $mahasiswa->id }}/edit" class="btn btn-warning">Edit</a>
            </td>
            @endforeach

          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
@endsection
