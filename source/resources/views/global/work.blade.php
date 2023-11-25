@extends('layouts.global')

@section('page_title')
    <title>Our Work | Maduo Studio</title>
@endsection

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('content')
    <div class="work-page common-page section-padding overflow-hidden" id="services-page">

        <div class="heading-section d-flex flex-column justify-content-center align-items-center">
            <h6 class="section-title">Our Work</h6>

            <p class="text-center">
                Lorem ipsum dolor sit amet consectetur. Sapien nisl lobortis odio semper tellus id sed vitae. At mauris dui nam nibh viverra. Lacus pulvinar fringilla amet auctor tortor eget venenatis
            </p>
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
                        <img class="img-fluid img-thumbnail"
                            src="{{ asset($work->attachment[0]->relativeUrl) }}"
                        >
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

