<?php

namespace App\Livewire;

use App\Models\Thread;
use Livewire\Component;
use Livewire\Attributes\Computed;
use Livewire\WithPagination;

class Threads extends Component
{

    use WithPagination;

    public function render()
    {
        return view('livewire.threads');
    }

    #[Computed()]
    public function threads()
    {
        return Thread::with('discussions')->orderByDesc('id')->paginate(15);
    }
}
