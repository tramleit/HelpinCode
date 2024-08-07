<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Validate;
use App\Models\Reply as ModelsReply;
use Illuminate\Support\Facades\Auth;

class Reply extends Component
{
    #[Validate(['required', 'min:3'])]
    public $reply;

    public $threadId;
    public function render()
    {

        return view('livewire.reply');
    }

    #[Computed()]
    public function replies()
    {
        return ModelsReply::where('thread_id', $this->threadId)->with('user')->paginate(20);
    }

    public function createReply()
    {
        if (!Auth::user()) {
            abort(403);
        }
        $this->validateOnly('reply');
        ModelsReply::create([
            'user_id' => auth()->user()->id,
            'thread_id' => $this->threadId,
            'body' => $this->reply
        ]);

        $this->reset('reply');
    }
}
