@extends('layout.main')

@section('main-content')

<div class="container text-center">
    <h1>
        Jokes
    </h1>
    @forelse ($jokes as $joke)
        <article>
            <h3>{{ $joke->title }}</h3>
        </article>
    @empty
        <span>Not Found</span>
    @endforelse
</div>
    
@endsection