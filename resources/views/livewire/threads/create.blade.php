<div class="max-w-2xl mt-6 px-6 py-4 mb-6 bg-white shadow-md overflow-hidden sm:rounded-lg">
    <form wire:submit="create">
        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input wire:model="name" id="name" class="block mt-1 w-full" type="text" name="name" required
                autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Body -->
        <div class="mt-4">
            <x-input-label for="body" :value="__('Body')" />
            <x-textarea wire:model="body" id="body" class="block mt-1 w-full" type="text" name="body"
                required autofocus autocomplete="body" rows=7 />
            <x-input-error :messages="$errors->get('body')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="channel_id" :value="__('Channel')" />

            <select class="block mt-1 w-full border-gray-300 focus:border-primary rounded-md shadow-sm"
                wire:model="channel_id" name="channel_id" :value="old('channel_id')" required>
                @foreach (\App\Models\Channel::all() as $channel)
                    <option value="{{ $channel->id }}" {{ old('channel_id') == $channel->id ? 'selected' : null }}>
                        {{ $channel->name }}
                    </option>
                @endforeach
            </select>
            <x-input-error :messages="$errors->get('channel_id')" class="mt-2" />
        </div>
        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                href="{{ route('dashboard') }}" wire:navigate>
                {{ __('Cancel') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Create') }}
            </x-primary-button>
        </div>
    </form>
</div>
