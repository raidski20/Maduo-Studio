@extends('layouts.global')

@section('page_title')
    <title>Contact us | Maduo Studio</title>
@endsection

@section('css')
@endsection

@section('content')
    <div class="contact-us section-padding overflow-hidden">
        <div class="row justify-content-center align-items-center gy-5">

            <div class="col-12 col-md-5 info-section d-flex flex-column align-items-center align-items-md-start">

                <h6 class="section-title">let's talk</h6>
                <p>
                    Have some big idea or brand to develop and need help? Then reach out, we'd love to hear about your project and provide help.
                </p>

                <div class="w-100 d-flex flex-column
                            flex-sm-row flex-md-column
                            justify-content-between gap-2"
                >
                    <div class="contact-info">
                        <h6>Email</h6>

                        <a class="link text-decoration-none"
                           href="mailto:maduostudio@gmail.com"
                        >
                            maduostudio@gmail.com
                        </a>
                    </div>

                    <div class="contact-info">
                        <h6>Socials</h6>

                        <div class="d-flex flex-wrap flex-column flex-sm-row flex-md-column gap-3">
                            <a class="link text-decoration-underline"
                               href="#"
                            >
                                Instagram
                            </a>

                            <a class="link text-decoration-underline"
                               href="#"
                            >
                                Twitter
                            </a>

                            <a class="link text-decoration-underline"
                               href="#"
                            >
                                Facebook
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 form-section d-flex flex-column">
                <form action="#">
                    <div>
                        <label for="inputName" class="form-label">Name</label>
                        <input type="text" class="form-control" id="inputName">
                    </div>

                    <div>
                        <label for="inputEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="inputEmail">
                    </div>

                    <div>
                        <label for="inputService" class="form-label">What service you are interested in?</label>
                        <select class="form-select" id="inputService">
                            <option selected>Select project type</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>

                    <div>
                        <label for="inputBudget" class="form-label">Budget</label>
                        <select class="form-select" id="inputBudget">
                            <option selected>Select project budget</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>

                    <div>
                        <label for="inputMessage" class="form-label">Message</label>
                        <textarea class="form-control" id="inputMessage" rows="5"></textarea>
                    </div>

                    <button type="submit">Send</button>
                </form>
            </div>

        </div>
    </div>
@endsection

@section('js')
@endsection
