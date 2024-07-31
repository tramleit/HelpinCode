@props(['thread'])
<div
    class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg border-2 border-transparent hover:border-primary transition-all duration-300 group">
    <div class="flex justify-between items-center mb-2">
        <a wire:navigate href="{{ route('threads.show', $thread->slug) }}"
            class="font-montserrat lg:text-2xl font-bold text-primary group-hover:text-primary-hover text-xl">{{ $thread->name }}
        </a>
        <span class="text-gray-500 group-hover:text-gray-600 font-semibold">{{ $thread->discussions->count() }} conservations</span>
    </div>
    <a href="{{ route('threads.show', $thread->slug) }}" class="text-gray-500 font-medium">{{ $thread->description }}</a>
</div>
