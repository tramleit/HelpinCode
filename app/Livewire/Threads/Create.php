<?php

namespace App\Livewire\Threads;

use App\Models\Channel;
use App\Models\Thread;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Create extends Component
{
    #[Validate(['required', 'min:4', 'max:100', 'string'])]
    public $name;

    #[Validate(['required', 'min:4', 'string'])]
    public $body;

    #[Validate(['required'])]
    public $channel_id;
    public function render()
    {
        return view('livewire.threads.create');
    }

    public function create()
    {
        $attributes = $this->validate();
        $attributes['user_id'] = auth()->user()->id;
        $attributes['slug'] = strtolower(str_replace(' ', '-', $attributes['name']));
        Thread::create($attributes);
        $channel = Channel::whereId($attributes['channel_id'])->first();
        $this->redirect(route('threads.show', [$channel->slug, $attributes['slug']]), navigate: true);
    }
}
