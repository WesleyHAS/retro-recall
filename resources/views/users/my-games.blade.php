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
        <ul>
            @foreach ($games as $game)
                <li>
                    {{ $game->title }} - Released: {{ $game->release_date }}
                    <form action="{{ route('my-games.remove', $game->id) }}" method="POST" style="display:inline;">
                        @csrf
                        <button type="submit" class="btn btn-danger btn-sm">-</button>
                    </form>
                </li>
            @endforeach
        </ul>
    @endif
</div>
@endsection
