@if ($this->threads->currentPage() > $this->threads->lastPage())
    {{ abort(404) }}
@endif

<div>
    <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-4 mt-6">
        @foreach ($this->threads as $thread)
            <x-thread-card :thread="$thread" />
        @endforeach
    </div>
    <div class="mt-8 mb-4">
        {{ $this->threads->links('pagination::tailwind') }}
    </div>
</div>
