@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mt-2">
                <div class="jumbotron jumbotron-fluid">
                    <div class="container text-center">
                        <h1>MY PROFILE</h1>
                    </div>
                </div>
            </div>
        </div>
        <form action="{{ route('profile.update', $user->id) }}" method="post" id="update-user">
            @method('put')
            @csrf
            <div class="card">
                <div class="col">
                    <div class="card-body text-center">
                        <h5 class="card-title">Nama</h5>
                        <input type="text" value="{{ $user->name }}" name="name"
                            class="card-text text-center form-control-plaintext">
                    </div>
                </div>
                <hr>
                <div class="col">
                    <div class="card-body text-center">
                        <h5 class="card-title">No Telepon</h5>
                        <input type="text" value="{{ $user->phone }}" name="phone"
                            class="card-text text-center form-control-plaintext">
                    </div>
                </div>
                <hr>
                <div class="col">
                    <div class="card-body text-center">
                        <h5 class="card-title">Email</h5>
                        <input type="email" name="email" value="{{ $user->email }}"
                            class="card-text text-center form-control-plaintext">
                    </div>
                </div>
            </div>
        </form>
        <div class="text-center mt-2">
            <button class="btn btn-success onupdate" type="button">Update Profil</button>
            <form action="{{ route('profile.delete', $user->id) }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger ondelete" type="submit">Hapus Akun</button>
            </form>
        </div>
    </div>
@endsection
