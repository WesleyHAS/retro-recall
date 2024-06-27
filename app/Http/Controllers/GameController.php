<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;
use Illuminate\Support\Facades\Auth;

class GameController extends Controller
{
    public function index(Request $request)
    {
        $games = collect();
        $message = '';

        if ($request->has('search')) {
            $searchTerm = trim($request->search);
            if ($searchTerm === '') {
                $message = 'Please type a game name to search.';
            } else {
                $games = Game::whereRaw('LOWER(title) LIKE ?', ['%' . strtolower($searchTerm) . '%'])->get();
                if ($games->isEmpty()) {
                    $message = 'No games found.';
                }
            }
        }

        return view('games.index', compact('games', 'message'));
    }

    public function addToUserGames($id)
    {
        $user = Auth::user();
        $game = Game::findOrFail($id);

        if (!$user->games->contains($game->id)) {
            $user->games()->attach($game);
        }

        return redirect()->route('games.index')->with('success', 'Game added to your list.');
    }
}
