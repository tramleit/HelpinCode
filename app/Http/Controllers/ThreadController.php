<?php

namespace App\Http\Controllers;

use App\Models\Channel;
use App\Models\Thread;
use Illuminate\Http\Request;

class ThreadController extends Controller
{

    public function index()
    {
        return view('threads.index');
    }
    public function show(Channel $channel, Thread $thread)
    {
        return view('threads.show', [
            'channel' => $channel,
            'thread' => $thread
        ]);
    }

    public function create()
    {
        return view('threads.create');
    }
}
