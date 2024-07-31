@props(['discussion'])
<div
    class="bg-white rounded-lg shadow-md p-6 border-2 border-transparent hover:border-primary transition-all duration-300 group">
    <!-- Header -->
    <div class="flex items-center mb-4">
        <img src="{{ $discussion->user->image ?? asset('images/person.svg') }}" alt="User Image" class="rounded-lg border-primary border-2 mr-4"
            width="100" height="100">

        <div>
            <h2 class="font-montserrat text-xl font-bold text-primary">{{ $discussion->user->name }}</h2>
            <span class="text-gray-500">Posted {{ $discussion->created_at->diffForHumans() }}</span>
        </div>
    </div>
    
    <div>
        <h1 class="bg-primary/5 px-9 mb-5 py-4 rounded-full text-primary inline-block text-lg font-semibold">{{ ucfirst($discussion->name) }}</h1>
    </div>
    <!-- Description -->
    <p class="text-gray-500 font-medium mb-4">{{ $discussion->description }}</p>
</div>
