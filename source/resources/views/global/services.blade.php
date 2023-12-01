@extends('layouts.global')

@section('seo_meta_data')
    <meta name="description" content="Explore our transformative tech solutions." />
    <meta name="og:title" property="og:title" content="Maduo Studio - Services" />
    <meta name="og:description" property="og:description" content="Explore our transformative tech solutions." />
@endsection

@section('page_title')
    <title>Our Services | Maduo Studio</title>
@endsection

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('content')
    <div class="services-page common-page section-padding overflow-hidden" id="services-page">
        <div class="row justify-content-center align-items-center gy-5">
            <div class="col-12 heading-section d-flex flex-column align-items-center align-items-md-start">
                <h6 class="section-title text-center">{{ $serviceSectionData->title }}</h6>
                <p class="text-center">
                    {{ $serviceSectionData->description }}
                </p>
            </div>

            <div class="col-12 d-flex flex-column">
                <div class="row row-cols-1 row-cols-md-3 g-4" data-masonry='{"percentPosition": true }'>
                    @foreach($services as $service)
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $service->name }}</h5>
                                    <p class="card-text">{{ $service->description }}</p>

                                    <div class="text-end">
                                        <a class="btn btn-contact-icon mt-5"
                                           href="{{ route('global.contact') }}"
                                        >
                                            Lets Talk
                                            <div class="icon-container ms-2" >
                                                <i class="fa-solid fa-arrow-up"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
@endsection

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async></script>
@endsection
