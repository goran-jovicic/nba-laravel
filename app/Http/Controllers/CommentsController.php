<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Team;
use App\Comment;
use App\Mail\CommentReceived;
use Illuminate\Support\Facades\Auth;

class Commentscontroller extends Controller
{
    public function __construct()
    {
        $this->middleware('forbidden-words')->only('store');
    }

    public function store($teamId)
    {
        $team = Team::find($teamId);

        // $team->comments()->create(request()->all());

        $comment = new Comment;

        $comment->content = request('content');
        $comment->user_id = auth()->user()->id;
        $comment->team_id = $teamId;
        $comment->save();

        \Mail::to($team->email)->send(new CommentReceived($team));

        return redirect()->route('team-details', ['id' => $teamId]);
    }
}
