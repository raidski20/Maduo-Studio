@extends('layouts.global')

@section('page_title')
    <title>Our Works | Maduo Studio</title>
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

        <div class="works-section d-flex flex-column justify-content-center gap-5">
            <div class="work d-flex flex-column justify-content-center gap-5">

                <div class="image m-auto">
                    <img
                        class="img-fluid"
                        src="{{ asset('assets/images/works/1.webp') }}"
                    >
                </div>

                <div class="info">
                    <h2 class="title mb-4">1. Maduo Studio</h2>
                    <p class="description">
                        Lorem ipsum dolor sit amet. Ab optio nihil vel amet explicabo non aliquid alias aut molestias impedit ad architecto architecto. Sit nulla perferendis aut rerum corporis et minima debitis? Qui laboriosam consequatur eum totam dolores aut excepturi blanditiis et consequatur minus ut expedita expedita. At iste rerum 33 dolore accusantium qui perferendis asperiores rem consectetur repellendus.
                    </p>

                    <a href="#" class="link">Visit Website</a>
                </div>
            </div>

            <div class="work d-flex flex-column justify-content-center gap-5">

                <div class="image m-auto">
                    <img
                        class="img-fluid"
                        src="{{ asset('assets/images/works/2.webp') }}"
                    >
                </div>

                <div class="info">
                    <h2 class="title mb-4">2. Eden-Hub</h2>
                    <p class="description">
                        Lorem ipsum dolor sit amet. Ab optio nihil vel amet explicabo non aliquid alias aut molestias impedit ad architecto architecto. Sit nulla perferendis aut rerum corporis et minima debitis? Qui laboriosam consequatur eum totam dolores aut excepturi blanditiis et consequatur minus ut expedita expedita. At iste rerum 33 dolore accusantium qui perferendis asperiores rem consectetur repellendus.
                    </p>

                    <a href="#" class="link">Visit Website</a>
                </div>
            </div>

            <div class="work d-flex flex-column justify-content-center gap-5">

                <div class="image m-auto">
                    <img
                        class="img-fluid"
                        src="{{ asset('assets/images/works/1.webp') }}"
                    >
                </div>

                <div class="info">
                    <h2 class="title mb-4">3. Mooc Project</h2>
                    <p class="description">
                        Lorem ipsum dolor sit amet. Ab optio nihil vel amet explicabo non aliquid alias aut molestias impedit ad architecto architecto. Sit nulla perferendis aut rerum corporis et minima debitis? Qui laboriosam consequatur eum totam dolores aut excepturi blanditiis et consequatur minus ut expedita expedita. At iste rerum 33 dolore accusantium qui perferendis asperiores rem consectetur repellendus.
                    </p>

                    <a href="#" class="link">Visit Website</a>
                </div>
            </div>
        </div>

    </div>
@endsection

