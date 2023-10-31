@extends('layouts.admin')

@section('content')

<div class="content">
    <div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Tambah Data Mahasiswa</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{ url('/mahasiswa/store') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="card-body">
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" name="nama" id="exampleInputEmail1" placeholder="Nama Lengkap">
        </div>

        <div class="form-group">
            <label for="jenkel">Pilih Jenis Kelamin</label>
            <select name="jenkel" id="" class="custom-select rounded-0">
                <option selected="">Pilih Jenis Kelamin</option>
                <option value="Pria">Pria</option>
                <option value="Wanita">Wanita</option>
            </select>
        </div>

        <label for="alamat" class="form-label">Alamat</label>
        <div class="form-floating">
          <textarea name="alamat" id="floatingTextArea" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <label for="hp">No HP Mahasiswa</label>
            <input type="number" name="hp" class="form-control" placeholder="+62">
        </div>

        <div class="form-group">
            <label for="jurusan">Pilih Jurusan</label>
            <select name="jurusan" id="" class="custom-select rounded-0">
                <option selected="">Pilih Jurusan</option>
                <option value="Sistem Informasi">Sistem Informasi</option>
                <option value="Informatika">Informatika</option>
            </select>
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input name="email" type="email" class="form-control" id="exampleInputEmail1" placeholder="Alamat Email">
          </div>

          <div class="card card-danger">
            <div class="card-header">
                <div class="card-title">Unggah Dokumen</div>
            </div>
          </div>

          <label for="foto" class="form-label">foto</label>
          <div class="input-group mb-3">
            <input type="file" name="foto" class="form-control" id="inputGroupfile">
          <label for="inputGroupfile" class="input-group-text">Unggah</label>
        </div>

        <label for="no_ktp" class="form-label">KTP</label>
        <div class="input-group mb-3">
          <input type="file" name="no_ktp" class="form-control" id="inputGroupfile2">
        <label for="inputGroupfile2" class="input-group-text">Unggah</label>
      </div>

      </div>

        </div>
              <!-- /.card-body -->

        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>

        </div>

      </div>

      </form>

    </div>
  </div>
    @endsection
