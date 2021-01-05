@extends('layout/main')

@section('title', 'Detail Mahasiswa')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="mt-2">Detail Mahasiswa</h1>

            <div class="card" style="width: 50rem;">
                <div class="card-body">
                    <h5 class="card-title">{{ $student->nama }}</h5>

                    <h6 class="card-subtitle mb-2">{{ $student->nim }}</h6>

                    <p class="card-text">{{ $student->jurusan }}</p>
                    <p class="card-text">{{ $student->email }}</p>
                    <p class="card-text">{{ $student->no_hp }}</p>

                    <a href="{{ $student->id }}/edit" class="btn btn-primary">Edit</a>

                    <br><br>
                    <a href="/students" class="card-link">Kembali ke daftar mahasiswa</a>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection