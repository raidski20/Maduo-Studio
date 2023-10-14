<footer class="section-padding">
    <div class="upper-footer row flex-column flex-md-row gy-4 gy-md-0 align-items-center justify-content-md-between text-center">

        <div class="col-sm-12 col-md-4">
        <span>
          LET'S DEVELOP,
            </br>
            LET'S COOPERATE!
        </span>
        </div>

        <div class="d-none d-md-block col-md-4">
            <svg width="auto" height="27" viewBox="0 0 379 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M365 25.2908L376.791 13.5L365 1.70932" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                <line x1="1.31134e-07" y1="13.2092" x2="377" y2="13.2093" stroke="white" stroke-width="3"/>
            </svg>
        </div>

        <div class="col-sm-12 col-md-4">
            <a href="{{ route('global.contact') }}" class="btn btn-dark">Let's Talk</a>
        </div>

    </div>

    <div class="divider my-5" style="height: 2px; background: #fff"></div>

    <div class="bottom-footer row justify-content-center justify-content-md-between align-items-center gap-2">
        <div class="col-12 col-sm-7 col-md-5">
            <a href="{{ route('home') }}">
                <img src="{{ asset('assets/images/maduo-transparent-logo.svg') }}">
            </a>

            <p class="bio">We are a designer engaged in design that provides design and renovation services for your home or office.</p>
            <a class="link" href="{{ $contact_us['extra_data']['email'] }}">{{ $contact_us['extra_data']['email'] }}</a>
            <p class="phone-number">{{ $contact_us['extra_data']['phone'] }}</p>
        </div>

        <div class="col-12 col-sm-7 col-md-5 footer-links">

            <div class="links">
                <a href="{{ route('home') }}" class="link">Home</a>
                <a href="/#about-us" class="link">About</a>
                <a href="/#services" class="link">Service</a>
                <a href="{{ route('global.contact') }}" class="link">Contact</a>
            </div>

            <div class="links">
                @foreach($contact_us['extra_data']['socials'] as $social)
                    <a href="{{ $social['link'] }}" class="link text-capitalize">{{ $social['name'] }}</a>
                @endforeach
            </div>
        </div>
    </div>
</footer>
