<?php

namespace App\Http\Controllers;

use App\Models\Discussion;
use App\Models\Thread;
use Illuminate\Http\Request;

class DiscussionController extends Controller
{
    public function index()
    {
        return view('discussions.index');
    }
    public function show(Thread $thread, Discussion $discussion)
    {
        return view('discussions.show', [
            'thread' => $thread,
            'discussion' => $discussion
        ]);
    }
}
