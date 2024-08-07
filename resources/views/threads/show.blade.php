<x-app-layout>

    <section class="max-w-screen-lg mx-auto mt-8">
        <div
            class="w-11/12 ml-auto bg-white rounded-lg shadow-md p-6 mt-6 border-2 border-transparent hover:border-primary transition-all duration-300 group">
            <div class="flex justify-between items-center">
                <p class="text-gray-500 font-medium">{{ $thread->user->name }} started this conversation
                    {{ $thread->created_at->diffForHumans() }}. {{ $thread->replies->count() }} people have
                    replied.</p>
                <a href="{{ route('threads.show', [$channel->slug, $thread->slug]) }}" wire:navigate>
                    <x-secondary-button>{{ $channel->name }}</x-secondary-button>
                </a>
            </div>
        </div>

        <div class="mt-4">
            <x-reply-card :thread="$thread" />
        </div>

        <livewire:reply :threadId="$thread->id" />

    </section>
    
</x-app-layout>
