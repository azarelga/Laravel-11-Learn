<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>About Us</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        .about-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            text-align: center;
        }
        .about-title {
            font-size: 2.5em;
            margin-bottom: 20px;
        }
        .about-content {
            font-size: 1.2em;
            line-height: 1.6;
        }
    </style>
</head>
<body>
    @include('navbar')
    <div class="about-container">
        <h1 class="about-title">Hi! I'm {{ $nama }}</h1>
        <p class="about-content">
        {{ $nama }} is a machine learning engineerer. He is passionate about building machine learning models and tinkering them just for fun.
            He had an ambition to build machine learning models for various industries such as finance, healthcare, and e-commerce.
            He have joined Kaggle competitions and has been ranked in the top 10% of the competition.
        </p>
    </div>
</body>
</html>

