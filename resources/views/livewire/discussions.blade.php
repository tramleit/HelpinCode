@if ($this->discussions->currentPage() > $this->discussions->lastPage())
    {{ abort(404) }}
@endif

<div>
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 mt-6">
        @foreach ($this->discussions as $discussion)
            <x-discussion-card :discussion="$discussion" />
        @endforeach
    </div>
    <div class="mt-8 mb-4">
        {{ $this->discussions->links('pagination::tailwind') }}
    </div>

</div>
