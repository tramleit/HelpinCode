<div>
    <div class="flex justify-end mt-5">
        <input type="text" placeholder="Search Threads ...." id="search" wire:model.live.debounce.700='search'
            class="w-full max-w-lg px-4 py-2 border border-gray-300 rounded-l-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary">
        <button wire:search
            class="px-4 py-2 bg-primary text-white rounded-r-md hover:transition hover:bg-primary-hover focus:outline-none focus:ring-2 focus:ring-primary focus:ring-opacity-50">Search</button>
    </div>
    @if ($this->threads->count())

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 mt-6" id="threads">
            @foreach ($this->threads as $thread)
                <x-thread-card :thread="$thread" />
            @endforeach
        </div>

        <div class="mt-8 mb-4">
            {{ $this->threads->links('livewire::tailwind') }}
        </div>
    @else
    
    <div class="mt-5">
        <h3 class="text-4xl text-center">No Thread found.</h3>
    </div>

    @endif
</div>
