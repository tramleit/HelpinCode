<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="{{ route('threads.create') }}" wire:navigate class="font-semibold text-xl text-primary hover:underline">Create new
                Thread</a>
            <livewire:threads.index :userId="auth()->user()->id"/>
        </div>
    </div>
</x-app-layout>
