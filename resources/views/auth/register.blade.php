@extends('layouts.guest')

@section('content')
    <div class="container pt-3 pt-md-5">
        <div class="row justify-content-sm-center ">
            <div class="col-12 col-xl-6 col-md-8 d-flex align-items-center justify-content-center">
                <div class="bg-white shadow-sm border border-light rounded p-4 w-100">
                    <div class="text-center text-md-center mb-4 mt-md-0">
                        <h1 class="heading-auth">NUR-JEK</h1>
                    </div>
                    <form action="{{ route('auth.register') }}" class="mt-4" method="POST">
                        @csrf

                        <!-- Form Name-->
                        <div class="form-group mt-4 mb-4">
                            <label for="name">Nama Lengkap</label>
                            <div class="input-group">
                                <span class="input-group-text text-secondary" id="basic-addon3">
                                    <i class="bi bi-person align-middle"></i>
                                </span>
                                <input id="name" type="text" name="name"
                                    class="form-control @error('name') is-invalid @enderror" placeholder="Nama Lengkap"
                                    value="{{ old('name') }}" required>
                                @error('name')
                                    <span class="invalid-feedback">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!-- End of Form -->

                        <!-- Form Confirm Password -->
                        <div class="form-group mb-4">
                            <label for="phone">No Telepon</label>
                            <div class="input-group">
                                <span class="input-group-text text-secondary" id="basic-addon5">
                                    <i class="align-middle bi bi-telephone"></i>
                                </span>
                                <input id="phone" name="phone" type="text"
                                    class="form-control @error('phone') is-invalid @enderror" placeholder="No Telepon"
                                    value="{{ old('phone') }}" required>
                                @error('phone')
                                    <span class="invalid-feedback">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!-- End of Form -->

                        <!-- Form Email-->
                        <div class="form-group mt-4 mb-4">
                            <label for="email">Email</label>
                            <div class="input-group">
                                <span class="input-group-text text-secondary" id="basic-addon3">
                                    <i class="align-middle bi bi-envelope"></i>
                                </span>
                                <input id="email" type="email" name="email"
                                    class="form-control @error('email') is-invalid @enderror" placeholder="name@example.com"
                                    value="{{ old('email') }}" required>
                                @error('email')
                                    <span class="invalid-feedback">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!-- End of Form -->

                        <!-- Form Password -->
                        <div class="form-group mb-4">
                            <label for="password">Kata Sandi</label>
                            <div class="input-group">
                                <span class="input-group-text text-secondary" id="basic-addon4">
                                    <i class="align-middle bi bi-lock"></i>
                                </span>
                                <input id="password" type="password" name="password"
                                    class="form-control @error('password') is-invalid @enderror" placeholder="Kata Sandi"
                                    required>
                                @error('password')
                                    <span class="invalid-feedback">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!-- End of Form -->

                        <div class="d-grid">
                            <button type="submit" class="btn btn-dark">Sign in</button>
                        </div>
                    </form>
                    <div class="d-flex justify-content-center align-items-center mt-4">
                        <span class="fw-normal">
                            Already have an account?
                            <a href="{{ route('login.index') }}" class="fw-bold text-dark">Login here</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
