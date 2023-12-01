@extends('layouts.global')

@section('seo_meta_data')
    <meta name="description" content="Crafting business solutions with tomorrow's technology, today." />
    <meta name="og:title" property="og:title" content="Maduo Studio - Home" />
    <meta name="og:description" property="og:description" content="Crafting business solutions with tomorrow's technology, today." />
@endsection

@section('page_title')
    <title>Home | Maduo Studio</title>
@endsection

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('content')
  <header>
    <div class="hero section-padding">
        <h6 class="hero-small-title">
          {{ $sections['hero']['title'] }}
        </h6>

        <div class="hero-intro text-center">
          <h6 class="hero-intro-text">
              {{ $sections['hero']['description'] }}
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

        @foreach($sections['statistics']['extra_data']['entities'] as $statistic)
            <div class="col-sm-6 col-lg-3 stat">
                <p class="stat-number">{{ $statistic["number"] }}</p>

                <div class="divider"></div>

                <p class="stat-title">{{ $statistic['name'] }}</p>
            </div>
        @endforeach

    </div>
  </div>

  <div class="about-us section-padding overflow-hidden"
       id="about-us"
  >
    <div class="row justify-content-between">

    <div class="col-sm-5 heading">
      <h6 class="section-title">{{ $sections['about-us']['title'] }}</h6>
    </div>
    <div class="col-sm-7 details">
      <p>
          {{ $sections['about-us']['description'] }}
      </p>

        @if(!empty($sections['about-us']['extra_data']['title']))
            <h6 class="section-title-sm">
                {{ $sections['about-us']['extra_data']['title'] }}
            </h6>
        @endif

        @if(!empty($sections['about-us']['extra_data']['title']))
            <p>
                {{ $sections['about-us']['extra_data']['description'] }}
            </p>
        @endif
    </div>
    </div>
  </div>

  <div class="services section-padding overflow-hidden"
       id="services"
  >
    <div class="row justify-content-between">

      <div class="col-md-12 col-lg-5 heading">
        <h6 class="section-title">{{ $sections['services']['title'] }}</h6>
        <p>{{ $sections['services']['description'] }}</p>

        <a href="{{ route("global.services") }}" class="btn btn-white mb-5 mb-lg-0">See more</a>
      </div>

      <div class="col-md-12 col-lg-7 details">
        <div class="row g-0">

            @foreach($services as $service)
                <div class="col-md-6 mb-4 mb-md-0 service">
                    <div class="h-100 position-relative py-5 px-3">
                      <span class="service-count">{{ '0' . $loop->iteration }}</span>
                      <h6>{{ $service->name }}</h6>
                      <p>{{ $service->description }}</p>
                    </div>
                </div>
            @endforeach
        </div>
      </div>

    </div>
  </div>
@endsection

@section('js')
@endsection
