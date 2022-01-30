@extends('layout.main')

@section('main-content')
<div class="d-flex justify-content-center">
    <div class="w-50 text-center">
        <h1 class="mb-3"><strong>{{ $joke->title }}</strong></h1>
        <p>{{ $joke->body }}</p>
        <span class="">{{ $joke->author }}</span>
        <div class="d-flex justify-content-between mt-5 mb-5">
            <p>Vote: <strong>{{ $joke->vote }}</strong></p>
            <p>{{ $joke->date }}</p>
        </div>
        <a class="" href="{{ route('jokes.index') }}">Back to jokes list</a>
    
    </div>
</div>
    
@endsection