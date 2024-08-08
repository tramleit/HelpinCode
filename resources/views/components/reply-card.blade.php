@props(['thread'])
<div
    class="bg-white rounded-lg shadow-md p-6 border-2 border-transparent hover:border-primary transition-all duration-300 group">
    <!-- Header -->
    <div class="flex items-center mb-4">
        <img src="{{ $thread->user->image ?? 'https://ui-avatars.com/api/?name=' . $thread->user->name . '&background=4817E4&color=fff&bold=true' }}" alt="User Image"
            class="rounded-lg border-primary border-2 mr-4" width="100" height="100">

        <div>
            <a wire:navigate href="{{ route('users.threads', $thread->user->username) }}">
                <h2 class="font-montserrat text-xl font-bold text-primary">{{ $thread->user->name }}</h2>
            </a>
            <span class="text-gray-500">Posted {{ $thread->created_at->diffForHumans() }}</span>
        </div>
    </div>

    <div>
        <h1 class="bg-primary/5 px-9 mb-5 py-4 rounded-full text-primary inline-block text-lg font-semibold">
            {{ ucfirst($thread->name) }}</h1>
    </div>
    <!-- Description -->
    <p class="text-gray-500 font-medium mb-4">{{ $thread->body }}</p>
</div>
