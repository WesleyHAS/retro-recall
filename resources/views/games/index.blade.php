@extends('layouts.app')

@section('content')
    <h1>Available Games</h1>
    
    <form action="{{ route('games.index') }}" method="GET">
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Search games" name="search" value="{{ request('search') }}">
            <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="submit">Search</button>
            </div>
        </div>
    </form>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if (!empty($message))
        <p>{{ $message }}</p>
    @endif

    @if (!empty(request('search')) && !$games->isEmpty())
        <ul>
            @foreach ($games as $game)
                <li>
                    {{ $game->title }} - Released: {{ $game->release_date }}
                    <form action="{{ route('games.add', $game->id) }}" method="POST" style="display:inline;">
                        @csrf
                        <button type="submit" class="btn btn-primary btn-sm">+</button>
                    </form>
                </li>
            @endforeach
        </ul>
    @endif
@endsection


