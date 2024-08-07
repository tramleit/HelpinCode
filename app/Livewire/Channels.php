<?php

namespace App\Livewire;

use App\Models\Channel;
use Livewire\Component;
use Livewire\Attributes\Computed;
use Livewire\WithPagination;

class Channels extends Component
{
    protected $paginationTheme = 'bootstrap';
    use WithPagination;

    public function render()
    {
        return view('livewire.channels');
    }

    #[Computed()]
    public function channels()
    {
        return Channel::with('threads')->orderByDesc('id')->paginate(15);
    }
}
