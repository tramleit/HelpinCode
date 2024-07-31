<?php

namespace App\Http\Controllers;

use App\Models\Thread;
use App\Models\Discussion;

class HomeController extends Controller
{
    public function __invoke()
    {
        $d = Thread::limit(6)
            ->with('discussions')
            ->orderByDesc('id')
            ->first();

        return view('index', [
            'threads' => Thread::limit(6)
                ->with('discussions')
                ->orderByDesc('id')
                ->get(),

            'discussions' => Discussion::limit(10)
                ->with(['user', 'thread', 'replies'])
                ->orderByDesc('id')
                ->get()
        ]);
    }
}
