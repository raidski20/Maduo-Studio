@extends('layouts.global')

@section('seo_meta_data')
    <meta name="description" content="Witness our expertise." />
    <meta name="og:title" property="og:title" content="Maduo Studio - Work" />
    <meta name="og:description" property="og:description" content="Witness our expertise." />
@endsection

@section('page_title')
    <title>Our Work | Maduo Studio</title>
@endsection

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('content')
    <div class="work-page common-page section-padding overflow-hidden" id="services-page">

        <div class="heading-section d-flex flex-column justify-content-center align-items-center">
            <h6 class="section-title">{{ $workSectionData->title }}</h6>

            <p class="text-center">{{ $workSectionData->description }}</p>
        </div>

        <div class="works-section container d-flex flex-column justify-content-center">

            @forelse($works as $work)

                @switch($work->type)
                    @case(\App\Enums\WorkType::ANDROID_APP->value)
                            <div class="work d-flex flex-column flex-md-row justify-content-center gap-5">
                        @break

                    @default
                        <div class="work d-flex flex-column justify-content-center gap-5">
                @endswitch

                    <div class="image d-flex justify-content-center">

                        <x-bootstrap-carousel.carousel :carouselId="'carousel-' . $loop->index">

                            @foreach($work->attachment as $attachment)

                                <x-bootstrap-carousel.carousel-img-item
                                    :img-url="asset($attachment->relativeUrl)"
                                    :is-active="$loop->index == 0"
                                >
                                </x-bootstrap-carousel.carousel-img-item>
                            @endforeach

                        </x-bootstrap-carousel.carousel>

                    </div>

                    @switch($work->type)
                        @case(\App\Enums\WorkType::ANDROID_APP->value)
                            <div class="info w-100 w-md-50">
                        @break

                        @default
                            <div class="info ms-md-5">
                    @endswitch

                        <h2 class="title mb-4">{{ $loop->iteration . '. ' . $work->title }}</h2>

                        <p class="description">
                            {{$work->description }}
                        </p>

                        @if($work->url)
                            <a href="{{ $work->url }}" class="link">Visit Website</a>
                        @endif
                    </div>
                </div>
            @empty
                <h1 class="text-center">
                    Whoopsie-doodle! No works in sight, looks like they are hiding like pros.
                    Give it another shot later 🕵️‍♂️😅
                </h1>
            @endforelse
        </div>
    </div>
@endsection

