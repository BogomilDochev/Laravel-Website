<?php
    function getYoutubeEmbedUrl($url)
    {
        $shortUrlRegex = '/youtu.be\/([a-zA-Z0-9_-]+)\??/i';
        $longUrlRegex = '/youtube.com\/((?:embed)|(?:watch))((?:\?v\=)|(?:\/))([a-zA-Z0-9_-]+)/i';

        if (preg_match($longUrlRegex, $url, $matches)) {
        $youtube_id = $matches[count($matches) - 1];
        }

        if (preg_match($shortUrlRegex, $url, $matches)) {
        $youtube_id = $matches[count($matches) - 1];
        }
        return 'https://www.youtube.com/embed/' . $youtube_id ;
    }
?>

@extends('common.master')

@section('content')
    <section class="hero is-warning">
        <div class="hero-body">
            <p class="title">
                Videos
            </p>
            <p class="subtitle">
                Funny YouTube videos
            </p>
            @if(Auth::user())
            <a href="/videos/create" class="button is-link">
                Add video
            </a><br><br>
            @endif
            <nav class="breadcrumb has-succeeds-separator" aria-label="breadcrumbs">
                <ul>
                    <li><a href="/">Example</a></li>
                    <li class="is-active"><a href="/videos" aria-current="page">Youtube videos</a></li>
                </ul>
            </nav>
        </div>
    </section>


    @foreach($videos as $video)
        <div class="videos">
            <iframe class="video-border" width="560" height="315" src={{getYoutubeEmbedUrl($video->URL)}} title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        @if(Auth::user())
            <form class = "form" method="POST" action="/videos/{{ $video->id }}">
                @csrf
                @method('DELETE')
                <button type="submit" class="button is-danger">Delete</button>
            </form>
        @endif
        </div>
    @endforeach

    <footer class="footer has-background-warning-light">
        <div class="content has-text-centered">
            <p>
                <strong>Example</strong> made by Bogomil Dochev from <a href="https://hz.nl/">HZ University of Applied Sciences</a>. | All Rights Reserved
            </p>
        </div>
    </footer>
@endsection
