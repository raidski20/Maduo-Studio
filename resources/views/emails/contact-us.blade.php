<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact us</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
            font-size: 16px;
            font-style: normal;
            font-weight: 400;
            line-height: normal;
            background: #FFFFFF;
        }
    </style>
</head>
<body>

<div class="container" style="margin-top: 100px;">
    <div class="row">
        <div class="col-sm-12">
            <div class="alert alert-primary text-center" role="alert">
                This email was auto generated and sent by <a href="{{ route('home') }}" class="alert-link">Maduo-studio's website</a> when someone has filled the contact-us form.
            </div>

            <p class="lead">
                <span class="text-decoration-underline">Sender's name:</span>
                {{ $contactData['sender_name'] }}
            </p>
            <p class="lead">
                <span class="text-decoration-underline">Sender's email:</span>
                {{ $contactData['sender_email'] }}
            </p>
            <div>
                <p class="lead  text-decoration-underline">Message:</p>
                <blockquote class="blockquote">
                    <p>{{ $contactData['message'] }}</p>
                </blockquote>
            </div>

        </div>
    </div>
</div>

</body>
</html>
