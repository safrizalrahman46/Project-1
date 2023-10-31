@extends('layouts.admin')

@section('content')

<div class="content">
    <div class="card card-secondary">
    <div class="card-header">
      <h3 class="card-title">Tambah Data Mahasiswa</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="/mahasiswa/{{ $mahasiswa->id }}/update" method="POST">
      @csrf
      <div class="card-body">
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" name="nama" id="exampleInputEmail1"
             placeholder="Nama Lengkap" value="{{ $mahasiswa->nama }}">
        </div>

        <div class="form-group">
            <label for="jenkel">Pilih Jenis Kelamin</label>
            <select name="jenkel" id="" class="custom-select rounded-0">
                <option selected="">Pilih Jenis Kelamin</option>
                <option value="Pria" @if($mahasiswa->jenkel=='Pria') selected @endif>Pria</option>
                <option value="Wanita" @if($mahasiswa->jenkel=='Wanita') selected @endif>Wanita</option>
            </select>
        </div>

        <label for="alamat" class="form-label">Alamat</label>
        <div class="form-floating">
          <textarea name="alamat" id="floatingTextArea" class="form-control" >{{ $mahasiswa->alamat }}</textarea>
        </div>

        <div class="form-group">
            <label for="hp">No HP Mahasiswa</label>
            <input type="number" name="hp" class="form-control" placeholder="+62" value={{ $mahasiswa->hp }}>
        </div>

        <div class="form-group">
            <label for="jurusan">Pilih Jurusan</label>
            <select name="jurusan" id="" class="custom-select rounded-0">
                <option selected="">Pilih Jurusan</option>
                <option value="Sistem Informasi" @if($mahasiswa->jurusan=='Sistem Informasi') selected @endif>Sistem Informasi</option>
                <option value="Informatika" @if($mahasiswa->jurusan=='Informatika') selected @endif>informatika</option>
            </select>
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input name="email" type="email" class="form-control" id="exampleInputEmail1" placeholder="Alamat Email" value="{{ $mahasiswa->email }}">
          </div>

        </div>
              <!-- /.card-body -->

        <div class="card-footer">
          <button type="submit" class="btn btn-warning">Update</button>
        </div>

        </div>

      </div>

      </form>

    </div>
  </div>
    @endsection
