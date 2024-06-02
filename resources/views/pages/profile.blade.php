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
        <div class="card">
            <div class="col">
                <div class="card-body text-center">
                    <h5 class="card-title">Nama</h5>
                    <p class="card-text">{{ $user->name }}</p>
                </div>
            </div>
            <hr>
            <div class="col">
                <div class="card-body text-center">
                    <h5 class="card-title">No Telepon</h5>
                    <p class="card-text">{{ $user->phone }}</p>
                </div>
            </div>
            <hr>
            <div class="col">
                <div class="card-body text-center">
                    <h5 class="card-title">Email</h5>
                    <p class="card-text">{{ $user->email }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
