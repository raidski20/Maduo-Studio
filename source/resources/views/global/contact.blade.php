@extends('layouts.global')

@section('seo_meta_data')
    <meta name="description" content="Reach out to kickstart you big ideas." />
    <meta name="og:description" property="og:description" content="Reach out to kickstart you big ideas." />
    <meta name="og:title" property="og:title" content="Maduo Studio - Let's Talk" />
@endsection

@section('page_title')
    <title>Contact us | Maduo Studio</title>
@endsection

@section('css')
@endsection

@section('content')

    @include('sweetalert::alert')

    <div class="contact-us-page common-page section-padding overflow-hidden">
        <div class="row justify-content-center align-items-center gy-5">

            <div class="col-12 col-md-5 heading-section d-flex flex-column align-items-center align-items-md-start">

                <h6 class="section-title">{{ $contact_us['title'] }}</h6>
                <p>
                    {{ $contact_us['description'] }}
                </p>

                <div class="w-100 d-flex flex-column
                            flex-sm-row flex-md-column
                            justify-content-between gap-2"
                >
                    <div class="contact-info">
                        <h6>Email</h6>

                        <a class="link text-decoration-none"
                           href="{{ $contact_us['extra_data']['email'] }}"
                        >
                            {{ $contact_us['extra_data']['email'] }}
                        </a>
                    </div>

                    <div class="contact-info">
                        <h6>Socials</h6>

                        <div class="d-flex flex-wrap flex-column flex-sm-row flex-md-column gap-3">
                            @foreach($contact_us['extra_data']['socials'] as $social)
                                <a href="{{ $social['link'] }}" class="link text-capitalize text-decoration-underline">{{ $social['name'] }}</a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 form-section d-flex flex-column">

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route("global.contact.send") }}" method="POST">
                    @csrf

                    <x-forms.input :label="'full name'"
                                   :field="'sender_name'"
                                   :type="'text'"
                                   :required="true"
                    ></x-forms.input>

                    <x-forms.input :label="'email'"
                                   :field="'sender_email'"
                                   :type="'email'"
                                   :required="true"
                    ></x-forms.input>

                    <x-forms.textarea :label="'message'"
                                      :field="'message'"
                                      :required="true"
                    ></x-forms.textarea>

                    <button type="submit">Send</button>
                </form>
            </div>

        </div>
    </div>
@endsection

@section('js')
@endsection
