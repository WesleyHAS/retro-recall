<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;

class GameController extends Controller
{
    public function index(Request $request)
    {
        $games = collect(); // Start with an empty collection
        $message = ''; // Initialize an empty message

        if ($request->has('search')) {
            $searchTerm = trim($request->search);
            if ($searchTerm === '') {
                $message = 'Please type a game name to search.'; // Set message for empty search
            } else {
                // Using case-insensitive search
                $games = Game::whereRaw('LOWER(title) LIKE ?', ['%' . strtolower($searchTerm) . '%'])->get();
                if ($games->isEmpty()) {
                    $message = 'No games found.';
                }
            }
        }

        return view('games.index', compact('games', 'message'));
    }
}



