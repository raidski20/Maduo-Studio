<nav class="navbar navbar-expand-md">
    <div class="container gap-0 column-gap-lg-5 flex-wrap">

        <a class="navbar-brand" style="" href="{{ route('home') }}">
            <img src="{{ asset('assets/images/maduo-logo.svg') }}">
        </a>

        <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse" data-bs-target="#maduoNavbar"
                aria-controls="maduoNavbar" aria-expanded="false" aria-label="Toggle menu"
        >
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="maduoNavbar">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 text-center gap-md-3 gap-lg-5">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/#about-us">About</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/#services">Service</a>
                </li>

                <li class="nav-item">
                    <a class="btn btn-dark-2"
                       href="{{ route('global.contact') }}"
                    >
                        contact us</a>
                </li>
            </ul>
        </div>

        <div class="navbar-copyright d-none d-md-block"></div>

        <div class="w-100">
            <svg xmlns="http://www.w3.org/2000/svg" width="auto" height="11" viewBox="0 0 1290 11" fill="none">
                <path d="M1 9.91846L1289 0.959228" stroke="#2C313F"/>
            </svg>
        </div>

    </div>
</nav>
