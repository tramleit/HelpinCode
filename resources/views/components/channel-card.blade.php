@props(['channel'])
<div
    class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg border-2 border-transparent hover:border-primary transition-all duration-300 group">
    <div class="flex justify-between items-center mb-2">
        <a wire:navigate href="{{ route('channels.show', $channel->slug) }}"
            class="font-montserrat lg:text-2xl font-bold text-primary group-hover:text-primary-hover text-xl">{{ $channel->name }}
        </a>
        <span class="text-gray-500 group-hover:text-gray-600 font-semibold">{{ $channel->threads->count() }} conservations</span>
    </div>
    <a href="{{ route('channels.show', $channel->slug) }}" class="text-gray-500 font-medium">{{ $channel->description }}</a>
</div>
