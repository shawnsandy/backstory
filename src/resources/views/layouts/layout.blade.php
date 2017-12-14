<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') | Backstory</title>
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

    </style>
    @stack('styles')
    @stack('inline-styles')
</head>

<body class="backstory">
        <div class="section hero is-light @yield("hero_class", "is-dark") ">
        <div class="container">
                <h1 class="title is-1 is-large">
                   <a href="/stories">@yield("page_title", "BackStory")</a>
                </h1>
                <p class="subtitle is-4">
                @yield("page_subtitle", "A Simple way to create content in laravel (post stories, articles, podcast)" )
                </p>
                @auth
                <p class="">
                <a href="{{ config("backstory.stories.create_url") }}" class="button is-rounded is-light is-outlined">Create a new Story</a>



                <button type="button" class="button is-rounded is-light is-outlined manage-categories is-invisible">Add Categories</button>
                </p>

                @endauth

                @include('backstory::components.modals-categories')


        </div>
    </div>
<div class="">
                @include('backstory::partials.messages')
            </div>

    <section class="section">
        <div class="container">
           <div class="columns">

                <div class="column">
                <div class="is-fluid">
                    @yield('content')
                </div>
                </div>

                <div class="column is-4">
                <div class="container is-fluid">
                        @yield('sidebar')
                </div>
                </div>

            </div>
        </div>

    </section>

    <footer class="section">
        <p class="has-text-centered"> Backstory </p>
    </footer>
</body>

<script src="https://cdn.jsdelivr.net/npm/umbrellajs@2.9.0/umbrella.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
@stack('scripts')
@stack('inline_scripts')
<script src="/assets/backstory/app.js"></script>

</html>
