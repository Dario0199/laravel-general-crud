@extends('layout.main')

@section('main-content')
    <div class="container-fluid mt-5">
        <div class="container">
            <h2 class="mb-5">Edit <strong>{{ $edit_joke->title }}</strong></h2>

            <form action="{{ route('jokes.update', $edit_joke->id) }}" method="post">
                @csrf
                @method('patch')

                <div class="mb-5">
                    <label class="form-label" for="title"><strong>Title</strong></label>
                    <input class="form-control" type="text" name="title" id="title" value="{{ $edit_joke->title }}">
                </div>

                <div class="mb-5">
                    <label class="form-label" for="body"><strong>Body</strong></label>
                    <textarea class="form-control" name="body" id="body" rows="10">{{ $edit_joke->body }}</textarea>
                </div>

                <div class="mb-5">
                    <label class="form-label" for="vote"><strong>Vote</strong></label>
                    <input class="form-control" type="text" name="vote" id="vote" value="{{ $edit_joke->vote }}">
                </div>

                <div class="mb-5">
                    <label class="form-label" for="author"><strong>Author</strong></label>
                    <input class="form-control" type="text" name="author" id="author" value="{{ $edit_joke->author }}">
                </div>

                <div class="mb-5">
                    <label class="form-label" for="date"><strong>Date</strong></label>
                    <input class="form-control" type="text" name="date" id="date" value="{{ $edit_joke->date }}">
                </div>
                
                <button class="btn btn-primary mb-5">
                    Edit
                </button>
            </form>
        </div>
    </div>
@endsection