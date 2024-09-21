@extends('layout.app')

@section('title', 'Profile')
    
@section('contents')
    <h1 class="mb-0">Profile</h1>
    <hr />

    <form action="" enctype="multipart/form-data" id="profile_setup_frm" method="POST" >
        <div class="row">
            <div class="col-md-12 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-item-center mb-3">
                        <h4 class="text-right">Profile Setting</h4>
                    </div>
                    <div class="row" id="res"></div>
                    <div class="row mt-2">
                        <div class="col-md-6">
                            <label class="labels">Name</label>
                            <input type="text" name="name" class="form-control" placeholder="nama kamu" value="{{ auth()->user()->name }}">
                        </div>
                        <div class="col-md-6">
                            <label class="labels">Email</label>
                            <input type="text" name="email" class="form-control" placeholder="email kamu" value="{{ auth()->user()->email }}">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6">
                            <label class="labels">Phone</label>
                            <input type="text" name="phone" class="form-control" placeholder="nomor hp" value="{{ auth()->user()->phone }}">
                        </div>
                        <div class="col-md-6">
                            <label class="labels">Alamat</label>
                            <input type="text" name="address" class="form-control" placeholder="alamat kamu" value="{{ auth()->user()->address }}">
                        </div>
                    </div>
                    <div class="mt-5 text-center"><button id="btn" class="btn btn-primary profile-button" type="submit">Simpan Profile</button></div>
                </div>
            </div>
        </div>
    </form>

@endsection