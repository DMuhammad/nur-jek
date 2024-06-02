@extends('layouts.app')

@section('content')
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-12 mt-2">
                <div class="jumbotron jumbotron-fluid">
                    <div class="container text-center">
                        <h1>ORDER</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 col-md-offset-1 mx-auto">
                <form action="{{ route('order.store') }}" method="POST" class="f1">
                    @csrf
                    <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                    <div class="f1-steps">
                        <div class="f1-progress">
                            <div class="f1-progress-line" data-now-value="33.33" data-number-of-steps="3"
                                style="width: 33.33%;">
                            </div>
                        </div>
                        <div class="f1-step active">
                            <div class="f1-step-icon"><i class="bi bi-geo-alt-fill"></i></div>
                            <p>Select Destination</p>
                        </div>
                        <div class="f1-step">
                            <div class="f1-step-icon"><i class="bi bi-person-fill"></i></div>
                            <p>Select a Driver</p>
                        </div>
                        <div class="f1-step">
                            <div class="f1-step-icon"><i class="bi bi-check-square-fill"></i></div>
                            <p>Complete your Order</p>
                        </div>
                    </div>
                    <!-- step 1 -->
                    <fieldset>
                        <div class="row mb-3">
                            <label for="picking-point" class="col-sm-2 col-form-label">Picking Point</label>
                            <div class="col-sm-10">
                                <select class="form-select" name="pickup_address" id="picking-point" required>
                                    <option value="" selected disabled>--Pilih Titik Jemput--</option>
                                    <option value="Arjosari">Arjosari</option>
                                    <option value="Blimbing">Blimbing</option>
                                    <option value="Gadingkasri">Gadingkasri</option>
                                    <option value="Kauman">Kauman</option>
                                    <option value="Bumiayu">Bumiayu</option>
                                    <option value="Cemorokandang">Cemorokandang</option>
                                    <option value="Dinoyo">Dinoyo</option>
                                    <option value="Jatimulyo">Jatimulyo</option>
                                    <option value="Bandulan">Bandulan</option>
                                    <option value="Bandungrejosari">Bandungrejosari</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="destination" class="col-sm-2 col-form-label">Destination</label>
                            <div class="col-sm-10">
                                <select class="form-select" name="destination_address" id="destination" required>
                                    <option value="" selected disabled>--Pilih Destinasi--</option>
                                    <option value="Arjosari">Arjosari</option>
                                    <option value="Blimbing">Blimbing</option>
                                    <option value="Gadingkasri">Gadingkasri</option>
                                    <option value="Kauman">Kauman</option>
                                    <option value="Bumiayu">Bumiayu</option>
                                    <option value="Cemorokandang">Cemorokandang</option>
                                    <option value="Dinoyo">Dinoyo</option>
                                    <option value="Jatimulyo">Jatimulyo</option>
                                    <option value="Bandulan">Bandulan</option>
                                    <option value="Bandungrejosari">Bandungrejosari</option>
                                </select>
                            </div>
                        </div>
                        <div class="f1-buttons">
                            <button type="button" class="btn btn-primary btn-next">Selanjutnya <i
                                    class="fa fa-arrow-right"></i></button>
                        </div>
                    </fieldset>
                    <!-- step 2 -->
                    <fieldset class="mb-5">
                        <div class="row">
                            @foreach ($drivers as $driver)
                                <div class="col-4 mb-3">
                                    <div class="card">
                                        <img src="{{ asset('assets/img/kucing.jpg') }}" class="card-img-top" alt="kucing">
                                        <div class="card-body">
                                            <h5 class="card-title"> {{ $driver->name }} </h5>
                                            <a class="btn btn-secondary btn-next"
                                                onclick="return selectDriver('{{ $driver->name }}', {{ $driver->id }})">
                                                I CHOOSE YOU
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="f1-buttons text-start">
                            <button type="button" class="btn btn-warning btn-previous">
                                <i class="fa fa-arrow-left"></i>
                                Sebelumnya
                            </button>
                        </div>
                    </fieldset>
                    <!-- step 3 -->
                    <fieldset class="mb-5">
                        <input type="hidden" name="driver_id" id="driver_id">
                        <div style="width: 18rem;" class="mx-auto mb-3">
                            <img src="{{ asset('assets/img/kucing.jpg') }}" class="card-img-top" alt="kucing">
                            <div class="text-center">
                                <h3 id="driver_name">RONI</h3>
                                <div class="form-group row">
                                    <div class="col">
                                        <div class="rate d-flex flex-row-reverse justify-center">
                                            <input type="radio" id="star5" class="rate" name="rated"
                                                value="5" />
                                            <label for="star5" title="text">5 stars</label>
                                            <input type="radio" checked id="star4" class="rate" name="rated"
                                                value="4" />
                                            <label for="star4" title="text">4 stars</label>
                                            <input type="radio" id="star3" class="rate" name="rated"
                                                value="3" />
                                            <label for="star3" title="text">3 stars</label>
                                            <input type="radio" id="star2" class="rate" name="rated"
                                                value="2">
                                            <label for="star2" title="text">2 stars</label>
                                            <input type="radio" id="star1" class="rate" name="rated"
                                                value="1" />
                                            <label for="star1" title="text">1 star</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="f1-buttons text-center">
                            <button type="submit" class="btn btn-secondary">
                                COMPLETE ORDER
                            </button>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
@endsection
