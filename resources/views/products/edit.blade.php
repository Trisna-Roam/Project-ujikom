@extends('layout.app')

@section('title', 'Edit Lagu')

@section('contents')
<h1 class="mb-0">Edit Lagu</h1>
<hr />
<form action="{{ route('products.update', $product->id ) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col mb-3">
            <label class="labels">Judul</label>
            <input type="text" name="title" class="form-control" placeholder="Title" value="{{ $product->title }}">
        </div>
        <div class="col mb-3">
            <label class="labels">Artis</label>
            <input type="text" name="artist" class="form-control" placeholder="Artist" value="{{ $product->artist }}">
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="labels">Durasi</label>
            <input type="text" name="length" class="form-control" placeholder="Length" value="{{ $product->length }}">
        </div>
        <div class="col mb-3">
            <label class="labels">Deskripsi</label>
            <textarea name="description" class="form-control" placeholder="Description">{{ $product->description }}</textarea>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="labels">Di tambahkan pada</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $product->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="labels">Di update pada</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $product->updated_at }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="d-grid">
            <button class="btn btn-warning">Update</button>
        </div>
    </div>
    
</form>
    
@endsection