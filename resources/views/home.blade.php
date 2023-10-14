@extends('layouts.global')

@section('page_title')
    <title>Maduo Studio</title>
@endsection

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('content')
  <header>
    <div class="hero section-padding">
        <h6 class="hero-small-title">
          BUSINESS intelligence agency
        </h6>

        <div class="hero-intro text-center">
          <h6 class="hero-intro-text">
            Crafting business-story with art
          </h6>

          <a class="btn btn-contact-icon mt-5" href="{{ route('global.contact') }}">
            Lets Talk
            <div class="icon-container ms-2" >
              <i class="fa-solid fa-arrow-up"></i>
            </div>
          </a>

        </div>
    </div>
  </header>

  <div class="statistics section-padding overflow-hidden">
    <div class="row justify-content-center align-items-center">

      <div class="col-sm-6 col-lg-3 stat">
        <p class="stat-number">42+</p>

        <div class="divider"></div>

        <p class="stat-title">Client</p>
      </div>

      <div class="col-sm-6 col-lg-3 stat">
        <p class="stat-number">540</p>

        <div class="divider"></div>

        <p class="stat-title">Project</p>
      </div>

      <div class="col-sm-6 col-lg-3 stat">
        <p class="stat-number">300</p>

        <div class="divider"></div>

        <p class="stat-title">Partner</p>
      </div>

      <div class="col-sm-6 col-lg-3 stat">
        <p class="stat-number">25+</p>

        <div class="divider"></div>

        <p class="stat-title">Office</p>
      </div>
    </div>
  </div>

  <div class="about-us section-padding overflow-hidden"
       id="about-us"
  >
    <div class="row justify-content-between">

    <div class="col-sm-5 heading">
      <h6 class="section-title">About Us!</h6>
    </div>
    <div class="col-sm-7 details">
      <p>
        Lorem ipsum dolor sit amet consectetur. Egestas praesent sagittis lectus libero ultricies enim aliquam. Quis ipsum nibh quis odio sit vel enim. Laoreet neque duis sem ut amet. Urna ullamcorper dignissim magnis nunc. Massa
      </p>

      <h6 class="section-title-sm">
        What We do?
      </h6>

      <p>
        Lorem ipsum dolor sit amet consectetur. Pulvinar volutpat in dui sed cursus lacus nibh arcu odio. Pharetra penatibus imperdiet in elementum commodo a nisl non pharetra. Ultrices convallis quis felis faucibus lacinia aenean. Ac sed ipsum blandit aliquet urna cursus fusce etiam. Lacus eget neque fringilla mi. Et habitasse lectus id gravida lorem. Vulputate iaculis sagittis non sit in ullamcorper rhoncus nec adipiscing. Nam ornare ultricies morbi volutpat malesuada nisl. Vel mollis ultrices integer molestie vitae facilisi enim sit. Adipiscing quis auctor ac pellentesque blandit pellentesque nibh donec. Purus faucibus fermentum blandit massa.
      </p>
    </div>
    </div>
  </div>

  <div class="services section-padding overflow-hidden"
       id="services"
  >
    <div class="row justify-content-between">

      <div class="col-md-12 col-lg-5 heading">
        <h6 class="section-title">Want you to boost your business growth? Solution is here.</h6>
        <p>Lorem ipsum dolor sit amet consectetur. Ultrices augue ut vitae velit sodales. Sapien lacus eu vulputate ac commodo nisl dictumst lacus.</p>

        <a class="btn btn-white mb-5 mb-lg-0">See more</a>
      </div>

      <div class="col-md-12 col-lg-7 details">
        <div class="row g-0">

          <div class="col-md-6 mb-4 mb-md-0 service">
            <div class="position-relative  py-5 px-3">
              <span class="service-count">01</span>
              <h6>Android Dev</h6>
              <p>Lorem ipsum dolor sit amet consectetur. Sapien nisl lobortis odio semper tellus id sed vitae. At mauris dui nam nibh viverra. Lacus pulvinar fringilla amet auctor tortor eget venenatis. Libero id.</p>
            </div>
          </div>

          <div class="col-md-6 mb-4 mb-md-0 service">
            <div class="position-relative py-5 px-3">
              <span class="service-count">02</span>
              <h6>Web Content</h6>
              <p>Lorem ipsum dolor sit amet consectetur. Sapien nisl lobortis odio semper tellus id sed vitae. At mauris dui nam nibh viverra. Lacus pulvinar fringilla amet auctor tortor eget venenatis. Libero id.</p>
            </div>
          </div>

          <div class="col-md-6 mb-4 mb-md-0 service">
            <div class="position-relative py-5 px-3">
              <span class="service-count">03</span>
              <h6>Branding</h6>
              <p>Lorem ipsum dolor sit amet consectetur. Sapien nisl lobortis odio semper tellus id sed vitae. At mauris dui nam nibh viverra. Lacus pulvinar fringilla amet auctor tortor eget venenatis. Libero id.</p>
            </div>
          </div>

          <div class="col-md-6 service">
            <div class="position-relative service py-5 px-3">
              <span class="service-count">04</span>
              <h6>Market Analysis</h6>
              <p>Lorem ipsum dolor sit amet consectetur. Sapien nisl lobortis odio semper tellus id sed vitae. At mauris dui nam nibh viverra. Lacus pulvinar fringilla amet auctor tortor eget venenatis. Libero id.</p>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>

  <div class="recent-work section-padding">
      <div class="heading mb-4 d-flex flex-column flex-sm-row justify-content-between g-0">
        <h6 class="section-title">Our Work</h6>

        <div>
          <a class="btn btn-white">see more</a>
        </div>
      </div>

    <div class="row justify-content-between row-gap-3">
        <div class="col-sm-6">
          <img src="{{ asset('assets/images/work-samples/sample-1.png') }}" class="img-fluid img-thumbnail" alt="work-sample-1">
        </div>

        <div class="col-sm-6">
          <img src="{{ asset('assets/images/work-samples/sample-2.png') }}" class="img-fluid img-thumbnail" alt="work-sample-2">
        </div>

        <div class="col-sm-6">
          <img src="{{ asset('assets/images/work-samples/sample-3.png') }}" class="img-fluid img-thumbnail" alt="work-sample-3">
        </div>

        <div class="col-sm-6">
          <img src="{{ asset('assets/images/work-samples/sample-4.png') }}" class="img-fluid img-thumbnail" alt="work-sample-4">
        </div>
    </div>
  </div>

  <div class="testimonial section-padding">
    <h6 class="section-title">Testimonial!</h6>

    <div class="reviews">

      <div class="quote-symbol">
        <svg xmlns="http://www.w3.org/2000/svg" width="107" height="85" viewBox="0 0 107 85" fill="none">
          <path d="M51.3739 60.1946C51.3739 45.9728 42.0935 37.3735 30.1615 37.3735C26.5156 37.3735 23.5326 38.035 20.881 39.0272C20.881 27.4514 30.8244 18.5214 45.0765 15.8755V0C18.5609 3.30741 0 24.8055 0 52.5876C0 72.4319 11.2691 85 26.847 85C41.4306 85 51.3739 74.7471 51.3739 60.1946ZM107 60.1946C107 45.9728 97.3881 37.3735 85.4561 37.3735C81.8102 37.3735 78.8272 38.035 76.1756 39.358C76.1756 27.4514 86.4504 18.5214 100.703 15.8755V0C74.187 3.30741 55.6261 24.8055 55.6261 52.5876C55.6261 72.4319 66.8952 85 82.4731 85C97.0567 85 107 74.7471 107 60.1946Z" fill="#F4F4F4"/>
        </svg>
      </div>

      <div class="review row gx-lg-3 justify-content-lg-between align-items-lg-end">
        <div class="col-lg-7">
          <p class="review-text">
            Lorem ipsum dolor sit amet consectetur. Fusce nisi bibendum nisl turpis sit elementum. Massa tincidunt sed et quis sit blandit turpis pellentesque. Facilisi.
          </p>
        </div>

        <div class="col-lg-2">
          <div class="reviewer-info text-start text-sm-end">
            <p>Raid</p>
            <p>CEO of Mooc</p>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('js')
@endsection
