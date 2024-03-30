@extends('layouts.default')

@section('title', 'Welcome')

@section('content')
    <div class="box-title">
        <div class="container">
            <h1>A joke a day keeps the doctor away</h1>
            <p>If you joke wrong way, your teeth have to pay. (Serious)</p>
        </div>
    </div>

    <div class="box-joke">
        <div class="container">
            @if ($joke)
                <p>{{$joke->content}}</p>
                <form action="{{ route('voteJoke', [$joke]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="box-action">
                        <button class="btn btn-like" type="submit" name="action" value="like">This is Funny!</button>

                        <button class="btn btn-dislike" type="submit" name="action" value="dislike">This is not funny.
                        </button>

                    </div>
                </form>
            @else
                <div class="alert-message">
                    {{$alertMessage}}
                </div>
            @endif

        </div>
    </div>

@endsection
