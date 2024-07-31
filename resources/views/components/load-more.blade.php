@if ($count >= $this->perPage)
    <div x-intersect.full="$wire.loadMore()" class="mt-10 mb-16">
        <p class="text-primary text-2xl font-medium text-center">Loading ...</p>
    </div>
@endif