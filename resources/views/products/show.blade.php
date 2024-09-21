@extends('layout.app')

@section('title', 'Detail Lagu')

@section('contents')
<h1 class="mb-0">Detail Lagu</h1>
<hr />
    <div class="row">
        <div class="col mb-3">
            <label class="labels">Judul</label>
            <input type="text" name="title" class="form-control" placeholder="Title" value="{{ $product->title }}" >
        </div>
        <div class="col mb-3">
            <label class="labels">Artis</label>
            <input type="text" name="artist" class="form-control" placeholder="Artist" value="{{ $product->artist }}" >
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="labels">Durasi</label>
            <input type="text" name="length" class="form-control" placeholder="Length" value="{{ $product->length }}" >
        </div>
        <div class="col mb-3">
            <label class="form-label">Deskripsi</label>
            <textarea class="form-control" name="description" placeholder="Description">{{ $product->description }}</textarea>
        </div>
    </div>
@endsection