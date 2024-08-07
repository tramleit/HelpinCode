<?php

namespace App\Http\Controllers;

use App\Models\Channel;
use App\Models\Thread;

class HomeController extends Controller
{
    public function __invoke()
    {
        return view('index', [
            'channels' => Channel::limit(6)
                ->with('threads')
                ->withCount('threads')
                ->orderByDesc('threads_count')
                ->get(),

            'threads' => Thread::limit(10)
                ->with(['user', 'channel', 'replies'])->withCount('replies')
                ->orderByDesc('replies_count')
                ->get()
        ]);
    }
}
