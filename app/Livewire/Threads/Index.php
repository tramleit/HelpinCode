<?php

namespace App\Livewire\Threads;

use App\Models\Thread;
use Livewire\Component;
use Livewire\Attributes\Url;
use Livewire\WithPagination;
use Livewire\Attributes\Computed;

class Index extends Component
{
    use WithPagination;

    #[Url(as: 'search', history: true)]
    public $search;
    public $channelId;
    public $userId;
    public function render()
    {
        return view('livewire.threads.index');
    }

    #[Computed()]
    public function threads()
    {
        $threads = Thread::with(['user', 'channel', 'replies']);

        if (!empty($this->userId)) {
            $threads->where('user_id', $this->userId);
        }
        if (!empty($this->channelId)) {

            $threads->where('channel_id', $this->channelId);
        }
        $threads->where(function ($query) {
            $query->where('name', 'like', "%$this->search%")
                ->orWhere('body', 'like', "%$this->search%");
        });

        return $threads->orderByDesc('id')->Paginate(20);
    }
}
