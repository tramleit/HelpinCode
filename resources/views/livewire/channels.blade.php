@if ($this->channels->currentPage() > $this->channels->lastPage())
    {{ abort(404) }}
@endif

<div>
    <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-4 mt-6">
        @foreach ($this->channels as $channel)
            <x-channel-card :channel="$channel" />
        @endforeach
    </div>
    <div class="mt-8 mb-4">
        {{ $this->channels->links('livewire::tailwind') }}
    </div>
</div>
