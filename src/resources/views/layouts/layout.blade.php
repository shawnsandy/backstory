<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <title>@yield('title')</title>
    <meta name="description" content="@yield('description', 'Site description')">
    <meta name="author" content="Shawn Sandy">
    <!-- Latest compiled and minified CSS -->
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://unpkg.com/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.1/css/bulma.min.css">
    <link rel="stylesheet" href="/assets/backstory/backstory.css">
    <style>
        p {
            font-size: 16px;
        }


        .form-control {
            border-radius: 0;
        }
        .hide {
            display: none;
        }

        .btn {
            border-radius: 20px;
        }

        footer {
            padding: 50px 0;
        }
    </style>
    @stack('styles')
    @stack('inline-styles')
</head>

<body>
<div class="container">
    <div class="section">
        <div class="">
            <h1>
                @yield('page_title')
            </h1>
        </div>
        <div class="col-md-12">
            @include('backstory::partials.messages')
        </div>
    </div>
</div>
<hr>
<section class="hero is-fullheight">
  <div class="hero-body hero">
    <div class="container">
      <div class="section">
      @yield('content')
      </div>
    </div>
  </div>
</section>

<footer>
    <p class="has-text-centered"> Backstory </p>
</footer>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
@stack('scripts')
@stack('inline_scripts')
</html>
