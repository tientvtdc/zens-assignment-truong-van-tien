<?php

namespace App\Http\Controllers;

use App\Models\Joke;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class JokeController extends Controller
{
    public function showJoke()
    {
        $votedJokes = Cookie::get('votedJoke') ? json_decode(Cookie::get('votedJoke'), true) : [];
        $joke = Joke::whereNotIn('id', $votedJokes)->first();

        $alertMessage = null;

        if (!isset($joke)) {
            $alertMessage = "That's all the jokes for today! Come back another day!";
        }
        return view('index', compact('joke', 'alertMessage'));
    }

    public function voteJoke(Request $request, Joke $joke)
    {
        $action = $request->input('action');
        if ($action === 'like') {
            $joke->increaseLike();
        } else {
            $joke->increaseDislike();
        }
        $votedJokes = Cookie::get('votedJoke') ? json_decode(Cookie::get('votedJoke'), true) : [];

        $votedJokes[] = $joke->id;

        $jsonData = json_encode($votedJokes);

        Cookie::queue('votedJoke', $jsonData);

        return redirect(route("showJoke"));
    }
}
