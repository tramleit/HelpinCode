@if ($this->replies->currentPage() > $this->replies->lastPage())
    {{ abort(404) }}
@endif

<div>

    <div class="max-w-lg">
        <div class="mt-4">
            <x-input-label for="reply" :value="__('Reply')" />
            <x-textarea wire:model="reply" id="reply" class="block mt-1 w-full" type="text" name="reply" required
                autocomplete="username" rows="6" placeholder="Write a Reply" />
            <x-input-error :messages="$errors->get('reply')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ms-4">
                {{ __('Reply') }}
            </x-primary-button>
        </div>
    </div>

    <div class="w-11/12 ml-auto mt-6 space-y-2">
        @foreach ($this->replies as $reply)
            <div
                class="bg-white rounded-lg shadow-md p-6 border-2 border-transparent hover:border-primary transition-all duration-300 group">
                <div class="flex items-center mb-4">
                    <img src="{{ $reply->user->image ?? asset('images/person.svg') }}" alt="User Image"
                        class="rounded-lg border-primary border-2 mr-4" width="100" height="100">

                    <div>
                        <h2 class="font-montserrat text-xl font-bold text-primary">{{ $reply->user->name }}</h2>
                        <span class="text-gray-500">Posted {{ $reply->created_at->diffForHumans() }}</span>
                    </div>
                </div>

                <p class="text-gray-500 font-medium mb-4">{{ $reply->body }}</p>
            </div>
        @endforeach
    </div>

    <div class="mt-5 mb-4">
        {{ $this->replies->links() }}
    </div>

</div>
