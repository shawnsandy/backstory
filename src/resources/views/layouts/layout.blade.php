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
    <div class="container is-fluid">
        <div class="section">
            <div class="">
                <h1 class="title is-1">
                   <a href="/stories">BackStory</a>
                </h1>
                <p class="subtitle is-4">A Simple way to create content in laravel (post stories, articles, podcast) </p>
                <p class="has-text-right"><a href="{{ config("backstory.stories.create_url") }}" class="button">Create a new Story</a></p>
            </div>
            <div class="col-md-12">
                @include('backstory::partials.messages')
            </div>
        </div>
    </div>
    <hr>
    <section class="section">

        <div class="container is-fluid">
            <div class="columns">

                <div class="column">
                <div class="container is-fluid">
                    @yield('content')
                </div>
                </div>

                <div class="column is-one-quarter">
                        @yield('sidebar')
                </div>

            </div>
        </div>

    </section>

    <footer>
        <p class="has-text-centered"> Backstory </p>
    </footer>
</body>

<script src="https://cdn.jsdelivr.net/npm/umbrellajs@2.9.0/umbrella.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
@stack('scripts')
@stack('inline_scripts')
<script src="/assets/backstory/app.js"></script>

</html>
