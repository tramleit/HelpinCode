<?php

use App\Models\User;
use Livewire\Volt\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Layout;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;

new #[Layout('layouts.guest')] class extends Component {
    use WithFileUploads;

    public string $name = '';
    public string $email = '';
    public string $password = '';
    public string $password_confirmation = '';
    public $image;
    /**
     * Handle an incoming registration request.
     */
    public function register(): void
    {
        $validated = $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255'],
            'password' => ['required', 'string', 'confirmed', Rules\Password::defaults()],
            'image' => ['required', 'image', 'max:1024'],
        ]);

        $validated['username'] = strtolower('@' . str_replace(' ', '-', $validated['name']));

        $image = $this->image;
        $imageName = time() . '-' . str_replace(' ', '-', $validated['name']) . '.' . $image->extension();
        $image->storeAs('images/logos', $imageName, 'real_public');
        $validated['image'] = '/images/logos/' . $imageName;

        $validated['password'] = Hash::make($validated['password']);
        if (User::where('username', $validated['username'])->count()) {
            $validated['username'] = strtolower($validated['username'] . '_' . rand(50, 500));
        }

        $validated['password'] = Hash::make($validated['password']);

        if (User::where('email', $validated['email'])->count()) {
            $user = User::where('email', $validated['email'])->first();

            if ($user->password == '' && $user->google_id !== '') {
                $user->update([
                    'name' => $validated['name'],
                    'email' => $validated['email'],
                    'password' => $validated['password'],
                ]);
                event(new Registered($user));
            } else {
                $this->validate(['email' => 'unique:' . User::class]);
            }
        } else {
            event(new Registered(($user = User::create($validated))));
        }
        Auth::login($user);

        $this->redirect(route('dashboard', absolute: false), navigate: true);
    }
};
?>

<div>
    <form wire:submit="register" enctype="multipart/form-data">
        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input wire:model="name" id="name" class="block mt-1 w-full" type="text" name="name" required
                autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input wire:model="email" id="email" class="block mt-1 w-full" type="email" name="email"
                required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input wire:model="password" id="password" class="block mt-1 w-full" type="password" name="password"
                required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input wire:model="password_confirmation" id="password_confirmation" class="block mt-1 w-full"
                type="password" name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="image" :value="__('Logo')" />

            <input type="file" wire:model="image" class="block mt-1 w-full" />

            <x-input-error :messages="$errors->get('image')" class="mt-2" />
        </div>
        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                href="{{ route('login') }}" wire:navigate>
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
        <x-google-button href="{{ route('googleRedirect') }}" />
    </form>
</div>
