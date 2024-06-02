@extends('layouts.guest')

@section('content')
    <div class="container pt-3 pt-md-5">
        <div class="row justify-content-sm-center">
            <div class="col-12 col-xl-6 col-md-8 d-flex align-items-center justify-content-center">
                <div class="bg-white shadow-sm border rounded border-light p-4 w-100">
                    <div class="text-center text-md-center mb-4 mt-md-0">
                        <h1 class="heading-auth">NUR-JEK</h1>
                    </div>
                    <form action="{{ route('auth.login') }}" class="mt-4" method="POST">
                        @csrf

                        <!-- Form Email -->
                        <div class="form-group mb-4">
                            <label for="email">Email</label>
                            <div class="input-group">
                                <span class="input-group-text text-secondary" id="basic-addon1">
                                    <i class="align-middle bi bi-envelope"></i>
                                </span>
                                <input id="email" class="form-control @error('email') is-invalid @enderror"
                                    type="email" name="email" placeholder="name@example.com" required
                                    value="{{ old('email') }}" autocomplete="email">
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <!-- End of Form -->

                        <!-- Form Password -->
                        <div class="form-group mb-4">
                            <label for="password">Kata Sandi</label>
                            <div class="input-group">
                                <span class="input-group-text text-secondary" id="basic-addon2">
                                    <i class="align-middle bi bi-lock"></i>
                                </span>
                                <input id="password" class="form-control" type="password" name="password"
                                    placeholder="Kata Sandi" required autocomplete="current-password">
                            </div>
                        </div>
                        <!-- End of Form -->

                        <div class="d-grid">
                            <button type="submit" class="btn btn-dark">Sign in</button>
                        </div>
                    </form>
                    <div class="d-flex justify-content-center align-items-center mt-4">
                        <span class="fw-normal">
                            Not registered?
                            <a href="{{ route('register.index') }}" class="fw-bold text-dark">Create account</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
