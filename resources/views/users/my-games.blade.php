@extends('layouts.app')

@section('content')
<div class="container">
    <h2>My Games</h2>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if ($games->isEmpty())
        <p>You have no games in your list.</p>
    @else
        <ul class="list-group">
            @foreach ($games as $game)
                <li class="list-group-item">
                    <h5>{{ $game->title }}</h5>
                    <p>Released: {{ $game->release_date }}</p>
                    <p>Status: {{ $game->pivot->status }}</p>
                    <p>Rating: {{ $game->pivot->rating }}</p>
                    <p>Started at: {{ $game->pivot->started_at }}</p>
                    <p>Finished at: {{ $game->pivot->finished_at }}</p>
                    <form action="{{ route('my-games.remove', $game->id) }}" method="POST" style="display:inline;">
                        @csrf
                        <button type="submit" class="btn btn-danger btn-sm">Remove</button>
                    </form>
                </li>
            @endforeach
        </ul>
    @endif
</div>
@endsection
