@extends('layout.main')

@section('main-content')
    <div class="container-fluid">
        <div class="container">
            <h2 class="mb-5"><strong>Create your Joke</strong></h2>

            <form action="{{ route('jokes.store') }}" method="post">
                @csrf

                <div class="mb-5">
                    <label class="form-label" for="title"><strong>Title</strong></label>
                    <input class="form-control" type="text" name="title" id="title">
                </div>

                <div class="mb-5">
                    <label class="form-label" for="body"><strong>Body</strong></label>
                    <textarea class="form-control" name="body" id="body" rows="10"></textarea>
                </div>

                <div class="mb-5">
                    <label class="form-label" for="vote"><strong>Vote</strong></label>
                    <input class="form-control" type="text" name="vote" id="vote">
                </div>

                <div class="mb-5">
                    <label class="form-label" for="author"><strong>Author</strong></label>
                    <input class="form-control" type="text" name="author" id="author">
                </div>

                <div class="mb-5">
                    <label class="form-label" for="date"><strong>Date</strong></label>
                    <input class="form-control" type="text" name="date" id="date">
                </div>
                
                <button class="btn btn-primary">
                    Create
                </button>
            </form>
        </div>
    </div>
@endsection