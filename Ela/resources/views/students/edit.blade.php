@extends('layout/main')

@section('title', 'Ubah Data Mahasiswa')

@section('container')
<div class="row">
    <div class="col-5">
        <h1 class="mt-3 mx-5">UBAH DATA</h1>

        <br>
        <form method="POST" action="/students/{{ $student->id }}" class="mx-5">
            @method('patch')
            @csrf
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ $student->nama }}">
                @error('nama')<div class="invalid-feedback">{{ $message}}</div>@enderror
            </div>
            <div class="form-group">
                <label for="nim">Nim</label>
                <input type="text" class="form-control @error('nim') is-invalid @enderror" id="nim" name="nim" value="{{ $student->nim }}">
                @error('nim')<div class="invalid-feedback">{{ $message}}</div>@enderror
            </div>
            <div class="form-group">
                <label for="jurusan">Jurusan</label>
                <input type="text" class="form-control" id="jurusan" name="jurusan" value="{{ $student->jurusan }}">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" name="email" value="{{ $student->email }}">
            </div>
            <div class="form-group">
                <label for="no_hp">No Hp</label>
                <input type="text" class="form-control" id="no_hp" name="no_hp" value="{{ $student->no_hp }}">
            </div>

            <button type="submit" class="btn btn-primary">Ubah Data</button>

        </form>

    </div>
</div>
@endsection