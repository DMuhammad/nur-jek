<nav class="navbar bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand heading-nav" href="{{ route('dashboard') }}">NUR-JEK</a>
        <div class="d-flex">
            <h5 class="text-dark mx-3 my-auto">Hi, {{ auth()->user()->name }}!</h5>
            <a class="btn" href="{{ route('auth.logout') }}">
                <i class="bi bi-box-arrow-right"></i>
                Logout
            </a>
        </div>
    </div>
</nav>
