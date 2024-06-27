<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function myGames()
    {
        $user = Auth::user();
        $games = $user->games;

        return view('users.my-games', compact('games'));
    }

    public function removeFromUserGames($id)
    {
        $user = Auth::user();
        $game = $user->games()->findOrFail($id);

        $user->games()->detach($game);

        return redirect()->route('my-games')->with('success', 'Game removed from your list.');
    }
}
