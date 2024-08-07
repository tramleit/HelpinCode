<x-app-layout>

    <x-heading class="mt-8">All Threads in {{ $channel->name }}</x-heading>

    <livewire:threads.index :channelId="$channelId" />

</x-app-layout>
