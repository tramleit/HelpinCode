<x-app-layout>

    <x-banner />
    <x-heading class="mt-8">Most popluar
        Channels</x-heading>
    <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-4 mt-6">
        @foreach ($channels as $channel)
            <x-channel-card :channel="$channel" />
        @endforeach

    </div>

    <div class="flex text-center justify-center mt-7">
        <a class="text-lg font-medium text-primary hover:text-primary-hover hover:underline"
            href="{{ route('channels.index') }}" wire:navigate>View all Channels</a>
    </div>

    <x-heading class="mt-20">Most popluar
        Threads</x-heading>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 mt-6">
        @foreach ($threads as $thread)
            <x-thread-card :thread="$thread" />
        @endforeach
    </div>

    <div class="flex text-center justify-center mt-7">
        <a class="text-lg font-medium text-primary hover:text-primary-hover hover:underline"
            href="{{ route('threads.index') }}" wire:navigate>View all Threads</a>
    </div>

</x-app-layout>
