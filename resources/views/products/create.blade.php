@extends('layout.app')

@section('title', 'Tambah Lagu')

@section('contents')
    <h1 class="mb-0">Tambah Lagu</h1>
    <hr />
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row mb-3">
        <div class="col">
            <input type="text" name="title" class="form-control" placeholder="Judulnya">
        </div>
        <div class="col">
            <input type="text" name="artist" class="form-control" placeholder="Artis">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <input type="text" name="length" class="form-control" placeholder="Durasinya">
        </div>
        <div class="col">
            <input type="text" name="description" class="form-control" placeholder="Deskripsi ">
        </div>
    </div>
    <div class="row">
        <div class="d-grid">
            <button id="btn" class="btn btn-primary profile-button" type="submit">
                Simpan Data Lagu
            </button>
        </div>
    </div>
    

    </form>    
@endsection