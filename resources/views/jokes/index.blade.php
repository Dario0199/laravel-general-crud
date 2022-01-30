@extends('layout.main')

@section('main-content')

<div class="container text-center">
    <h1 class="mb-5">
        Jokes
    </h1>
    @if (session('delete'))
        <div class="alert alert-success alert-dismissible">
            {{ session('delete') }} deleted!
        </div>
    @endif

    @forelse ($jokes as $joke)
        <article class="mb-3">
            <h3>{{ $joke->title }}</h3>
            <div>
                <a class="btn btn-primary" href="{{ route('jokes.show', $joke->id) }}">Read more</a>
                <a class="btn btn-success" href="{{ route('jokes.edit', $joke->id) }}">Edit Joke</a>
                <form  action="{{ route('jokes.destroy', $joke->id) }}" method="post">
                    @csrf
                    @method('delete')
                    <button class= "btn btn-danger mt-1" type="submit">Delete</button>
                </form>
            </div>
        </article>
    @empty
        <span>Not Found</span>
    @endforelse
</div>
    
@endsection