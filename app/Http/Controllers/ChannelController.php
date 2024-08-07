<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Channel;

class ChannelController extends Controller
{
    public function index()
    {
        return view('channels.index');
    }

    public function show(Channel $channel)
    {
        return view('channels.show', [
            'channel' => $channel,
            'channelId' => $channel->id
        ]);
    }
}
