@extends('userLayout.app')

@section('title', 'Home | Lagu')
    
@section('contents')

<div class="d-flex align-item-center justify-content-between">
    <h1 class="mb-0">List Lagu</h1>
</div>
    <hr />
    @if (@Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
        
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>#</th>
                <th>Judul Lagu</th>
                <th>Artis</th>
                <th>Durasi Lagu</th>
                <th>Deskripsi Lagu</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>+
            @if ($product->count() > 0)
                @foreach ($product as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->title }}</td>
                        <td class="align-middle">{{ $rs->artist }}</td>
                        <td class="align-middle">{{ $rs->length }}</td>
                        <td class="align-middle">{{ $rs->description }}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic Example">
                                <a href="{{ route('viewShow', $rs->id) }}" type="button" class="btn btn-secondary">Detail</a>
                            </div>
                        </td>
                    </tr>
                @endforeach 
            @else
                <tr>
                    <td class="text-center" colspan="5"> Tidak Ada Lagu</td>
                </tr>
            @endif 
        </tbody>
    </table>

    

@endsection