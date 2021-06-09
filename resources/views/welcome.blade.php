@extends('common.master')

@section('content')
    <section class="hero is-warning">
        <div class="hero-body" >
            <p class="title">
                Home
            </p>
            <p class="subtitle">
                About us
            </p>
            <nav class="breadcrumb has-succeeds-separator" aria-label="breadcrumbs">
                <ul>
                    <li><a href="/">Example</a></li>
                    <li class="is-active"><a href="/" aria-current="page">Home</a></li>
                </ul>
            </nav>
        </div>
    </section>

    <section class = "section">
    <div class="block" >
        <h1 class="title has-text-centered">Welcome to the website of Bogomil</h1>
        <p class = "has-text-centered">This is the example website of me for the fourth quartile. There are a lot of improvements that can be done in future but it is created only for the assignments during the quartile.</p>
    </div><br>
    <div class = "block">
        <h1 class="title has-text-centered">What can you find here?</h1>
        <p class = "has-text-centered">Here is the place where you can find funny youtube videos:</p>
    </div>
    <div class = "block">
        <iframe class="video-border" width="560" height="315" src="https://www.youtube.com/embed/VB4CCHHYOqY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
{{--        <p class="welcomePageText">and funny pictures:</p>--}}
{{--        <img class = "welcomeImage"  src="{{asset("images/elena-cordery-RLlcbkemwnw-unsplash.jpg")}}" alt="Pineapple with sunglasses" width="200"--}}
{{--             height="80">--}}
    </div>
    </section>

    <footer class="footer has-background-warning-light">
        <div class="content has-text-centered">
            <p>
                <strong>Example</strong> made by Bogomil Dochev from <a href="https://hz.nl/">HZ University of Applied Sciences</a>. | All Rights Reserved
            </p>
        </div>
    </footer>

@endsection
