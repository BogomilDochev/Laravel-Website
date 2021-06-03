@extends('common.master')

@section('content')
    <section class="hero is-warning">
        <div class="hero-body" >
            <p class="title">
                Pictures
            </p>
            <p class="subtitle">
                Funny pictures
            </p>
            @if(Auth::user())
                <a href="/pictures/create" class="button is-link">
                    Add picture
                </a>
            @endif
        </div>
    </section>


    @foreach($pictures as $picture)
        <div class="pictures">
        <img class = "images" src='{{asset("storage/images/$picture->fileName")}}' alt="{{$picture->Alt}}" width="200"
             height="80">


    @if(Auth::user())
        <form class = "form" method="POST" action="/pictures/{{ $picture->id }}">
            @csrf
            @method('DELETE')
            <button type="submit" class="button is-danger">Delete</button>
        </form>
    @endif
    </div>
    @endforeach
@endsection
