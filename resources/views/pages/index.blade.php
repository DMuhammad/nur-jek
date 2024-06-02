@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mt-2">
                <div class="jumbotron jumbotron-fluid">
                    <div class="container text-center">
                        <h1 class="display-6"><b>Selamat Datang di <span class="heading-home">NUR-JEK</span></b></h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="col">
                <div class="card-body text-center">
                    <h5 class="card-title">ORDER</h5>
                    <p class="card-text">Klik di sini!</p>
                    <a href="{{ route('order') }}" class="btn btn-secondary">
                        <i class="bi bi-car-front-fill me-2"></i>
                        ORDER
                    </a>
                </div>
            </div>
            <hr>
            <div class="col">
                <div class="card-body text-center">
                    <h5 class="card-title">HISTORY</h5>
                    <p class="card-text">Klik di sini!</p>
                    <a href="{{ route('history', auth()->user()->id) }}" class="btn btn-secondary">
                        <i class="bi bi-file-text-fill me-2"></i>
                        HISTORY
                    </a>
                </div>
            </div>
            <hr>
            <div class="col">
                <div class="card-body text-center">
                    <h5 class="card-title">MY PROFILE</h5>
                    <p class="card-text">Klik di sini!</p>
                    <a href="{{ route('profile', auth()->user()->id) }}" class="btn btn-secondary">
                        <i class="bi bi-person-fill me-2"></i>
                        MY PROFILE
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
