<x-app-layout>

    <x-heading class="mt-8">Threads created by {{ $user->name }}</x-heading>

    <livewire:threads.index :userId="$userId" />

</x-app-layout>
