@extends('layouts.admin')

@section('content')

<div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Data Dosen</h3>

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
              <th>NIDN</th>
              <th>Nama Dosen</th>
              <th>Nama Mahasiswa</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($dosen as $dosen)
            <tr>
                <td>{{ $dosen->nidn }}</td>
                <td>{{ $dosen->nama_dosen }}</td>
                <td>
                    @foreach ($dosen->mahasiswa as $mhs )
                        {{ $mhs->nama }},
                    @endforeach
                </td>


            </tr>
            @endforeach

          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
@endsection
