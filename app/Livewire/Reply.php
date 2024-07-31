<?php

namespace App\Livewire;

use App\Models\Reply as ModelsReply;
use Livewire\Component;
use Livewire\Attributes\Computed;

class Reply extends Component
{
    public $discussionId;
    public function render()
    {

        return view('livewire.reply');
    }

    #[Computed()]
    public function replies()
    {
        return ModelsReply::where('discussion_id', $this->discussionId)->with('user')->paginate(20);
    }
}
