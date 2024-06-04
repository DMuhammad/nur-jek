@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 my-2">
                <div class="jumbotron jumbotron-fluid">
                    <div class="container text-center">
                        <h1>HISTORY</h1>
                    </div>
                </div>
            </div>
        </div>
        @if (count($orders) == 0)
            <div class="card">
                <div class="col">
                    <div class="card-body text-center">
                        <h5 class="card-title">TIDAK DITEMUKAN RIWAYAT PEMESANAN</h5>
                        <p class="card-text">Silahkan melakukan pemesanan terlebih dahulu!</p>
                        <a href="{{ route('order') }}" class="btn btn-secondary">
                            <i class="bi bi-car-front-fill me-2"></i>
                            ORDER
                        </a>
                    </div>
                </div>
            </div>
        @else
            @foreach ($orders as $order)
                <div class="card border-light mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ asset('assets/img/' . $order->driver->image . '.jpg') }}"
                                class="img-fluid rounded">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h4 class="card-title">{{ $order->driver->name }}</h4>
                                <p class="card-text">{{ $order->pickup_address }} -> {{ $order->destination_address }}</p>
                                <div class="row">
                                    <div class="col">
                                        You Rated
                                        <div class="rated">
                                            @for ($i = 1; $i <= $order->rated; $i++)
                                                <label class="star-rating-complete" title="text">
                                                    {{ $i }} stars
                                                </label>
                                            @endfor
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
@endsection
