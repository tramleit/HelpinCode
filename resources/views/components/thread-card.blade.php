@props(['thread'])
<div
    class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg border-2 border-transparent hover:border-primary transition-all duration-300 group">
    <div class="flex justify-between items-center mb-4">
        <div class="flex items-center">
            <img src="{{ $thread->user->image ?? asset('images/person.svg') }}" alt="User Logo"
                class="rounded-xl mr-2 border border-primary" height="70" width=70">
            <div>
                <h2 class="font-montserrat lg:text-xl text-lg font-bold text-primary group-hover:text-primary-hover"><a
                        href="{{ route('threads.show', [$thread->channel->slug, $thread->slug]) }}"
                        wire:navigate>{{ $thread->name }}</a></h2>
                <span class="text-gray-500">by <a wire:navigate href="{{ route('users.threads', $thread->user->username) }}" class="font-semibold text-primary hover:text-primary-hover">{{ $thread->user->name }}</a></span>
            </div>
        </div>
        <a wire:navigate href="{{ route('channels.show', $thread->channel->slug) }}">
            <x-secondary-button>{{ $thread->channel->name }}</x-secondary-button>
        </a>
    </div>
    <a class="text-gray-500 font-medium mb-4"
        href="{{ route('threads.show', [$thread->channel->slug, $thread->slug]) }}" wire:navigate>
        {{ $thread->body }}</a>
    <div class="flex justify-between items-center">
        <span class="text-gray-500 group-hover:text-gray-600 mt-2 font-semibold">{{ $thread->replies->count() }} Replies</span>
        <span class="text-gray-500 font-semibold">{{ $thread->created_at->diffForHumans() }}</span>
    </div>
</div>
