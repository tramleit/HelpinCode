<?php

namespace App\Livewire;

use App\Models\Discussion;
use Livewire\Attributes\Computed;
use Livewire\Component;
use Livewire\WithPagination;

class Discussions extends Component
{
    use WithPagination;


    public $threadId;

    public function render()
    {
        return view('livewire.discussions');
    }

    #[Computed()]
    public function discussions()
    {
        $discussions = Discussion::with(['user', 'thread', 'replies'])->orderByDesc('id');

        if (!empty($this->threadId)) {
            $discussions->where('thread_id', $this->threadId);
        }

        return $discussions->Paginate(20);
    }
}