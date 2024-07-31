<x-app-layout>

    <x-heading class="mt-8">Most popluar
        Discussions</x-heading>

    <section class="max-w-screen-lg mx-auto mt-8">
        <div
            class="w-11/12 ml-auto bg-white rounded-lg shadow-md p-6 mt-6 border-2 border-transparent hover:border-primary transition-all duration-300 group">
            <div class="flex justify-between items-center">
                <p class="text-gray-500 font-medium">{{ $discussion->user->name }} started this conversation
                    {{ $discussion->created_at->diffForHumans() }}. {{ $discussion->replies->count() }} people have
                    replied.</p>
                <a href="{{ route('threads.show', $thread->slug) }}" wire:navigate>
                    <x-secondary-button>{{ $thread->name }}</x-secondary-button>
                </a>
            </div>
        </div>

        <div class="mt-4">
            <x-reply-card :discussion="$discussion" />
        </div>
        {{-- 
        <div class="max-w-lg">
            <div class="mt-4">
                <x-input-label for="reply" :value="__('Reply')" />
                <x-textarea wire:model="reply" id="reply" class="block mt-1 w-full" type="text" name="reply"
                    required autocomplete="username" rows="6" placeholder="Write a Reply" />
                <x-input-error :messages="$errors->get('reply')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-primary-button class="ms-4">
                    {{ __('Reply') }}
                </x-primary-button>
            </div>
        </div>

        <div class="w-11/12 ml-auto mt-6 space-y-2">


        </div> --}}
        <livewire:reply :discussionId="$discussion->id" />
    </section>
</x-app-layout>
