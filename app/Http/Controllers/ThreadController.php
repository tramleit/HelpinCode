<?php

namespace App\Http\Controllers;

use App\Models\Thread;
use App\Models\Discussion;
use Illuminate\Http\Request;

class ThreadController extends Controller
{
    public function index()
    {
        return view('threads.index');
    }

    public function show(Thread $thread)
    {
        return view('threads.show', ['threadId' => $thread->id]);
    }
}
