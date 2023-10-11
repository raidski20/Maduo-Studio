<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home</title>

        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

        <style>
            html {
                scroll-behavior: smooth;
            }

            body {
                font-family: 'Poppins', sans-serif;
                font-size: 18px;
                font-style: normal;
                font-weight: 400;
            }

            .section-padding {
                padding: 60px 20px;
            }

            .section-title {
                font-size: 44px;
                font-weight: bold;
            }

            .section-title-sm {
                font-size: 25px;
            }

            .navbar .navbar-brand {
                font-size: 25px;
                font-weight: 700;
            }

            .services .service .service-number {
                padding: 4px 8px;
                background: #EBE2D9;
            }
            .services .service .service-detail {
                width: 75%;
                text-align: center;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container">
                <a class="navbar-brand" href="#">Brand</a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto text-center mb-2 mb-lg-0">

                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about-us">About us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#services">Services</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>

        <div class="hero section-padding justify-content-center align-items-center d-flex flex-column">
            <h4 class="w-75 text-center font-weight-bold">
                Lorem ipsum dolor sit amet. Qui aperiam nobis sed numquam optio aut assumenda vero.
            </h4>
        </div>

        <div class="about-us section-padding bg-body-tertiary text-center"
             id="about-us"
        >
            <h6 class="section-title">About Us</h6>
            <p class="mb-5">
                Lorem ipsum dolor sit amet consectetur. Egestas praesent sagittis lectus libero ultricies enim aliquam. Quis ipsum nibh quis odio sit vel enim. Laoreet neque duis sem ut amet. Urna ullamcorper dignissim magnis nunc.
            </p>

            <h6 class="section-title-sm">Our Mission</h6>
            <p>
                Lorem ipsum dolor sit amet consectetur. Egestas praesent sagittis lectus libero ultricies enim aliquam. Quis ipsum nibh quis odio sit vel enim. Laoreet neque duis sem ut amet. Urna ullamcorper dignissim magnis nunc.
            </p>
        </div>

        <div class="services section-padding"
             id="services"
        >
            <div class="intro text-center mb-5">
                <h6 class="section-title mb-4">Want you to boost your business growth?
                    Solution is here.
                </h6>
                <p>
                    Lorem ipsum dolor sit amet consectetur. Ultrices augue ut vitae velit sodales. Sapien lacus eu vulputate ac commodo nisl dictumst lacus.
                </p>
            </div>

            <div class="main-services d-flex flex-column align-items-center justify-content-center">

                <div class="service d-flex flex-column align-items-center">
                    <p class="service-number">01</p>

                    <h6 class="section-title-sm">Web Content</h6>

                    <p class="service-detail">
                        Lorem ipsum dolor sit amet consectetur. Sapien nisl lobortis odio semper tellus id sed vitae. At mauris dui nam nibh viverra. Lacus pulvinar fringilla amet auctor tortor eget venenatis. Libero id.
                    </p>
                </div>

                <div class="service d-flex flex-column align-items-center">
                    <p class="service-number">02</p>

                    <h6 class="section-title-sm">Android Dev</h6>

                    <p class="service-detail">
                        Lorem ipsum dolor sit amet consectetur. Sapien nisl lobortis odio semper tellus id sed vitae. At mauris dui nam nibh viverra. Lacus pulvinar fringilla amet auctor tortor eget venenatis. Libero id.
                    </p>
                </div>

                <div class="service d-flex flex-column align-items-center">
                    <p class="service-number">03</p>

                    <h6 class="section-title-sm">Branding</h6>

                    <p class="service-detail">
                        Lorem ipsum dolor sit amet consectetur. Sapien nisl lobortis odio semper tellus id sed vitae. At mauris dui nam nibh viverra. Lacus pulvinar fringilla amet auctor tortor eget venenatis. Libero id.
                    </p>
                </div>

                <div class="service d-flex flex-column align-items-center">
                    <p class="service-number">04</p>

                    <h6 class="section-title-sm">Market Analysis</h6>

                    <p class="service-detail">
                        Lorem ipsum dolor sit amet consectetur. Sapien nisl lobortis odio semper tellus id sed vitae. At mauris dui nam nibh viverra. Lacus pulvinar fringilla amet auctor tortor eget venenatis. Libero id.
                    </p>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>
