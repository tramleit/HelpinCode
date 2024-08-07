<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Raja Ammar">
    <meta name="keywords" content="Help in Code, Forum, Coding, PHP, Laravel, Tailwindcss">
    <meta name="description" content="Help in Code is forum website for developer to get solutions of their problems">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @props(['title' => 'Forum For Developer'])
    <title>{{ config('app.name') . ' - ' . $title }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles()
</head>

<body class="font-roboto antialiased">
    <div class="min-h-screen bg-gray-100 flex flex-col">
        <livewire:layout.navigation />

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif
        <!-- Page Content -->
        <main class="container mx-auto p-4">
            {{ $slot }}
        </main>

        <footer class="bg-white" style="margin-top: auto">
            <div class="max-w-7xl mx-auto p-4 flex justify-between">
                <div><a href="{{ route('index') }}" wire:navigate class="text-primary hover:text-primary-hover hover:underline text-xl font-semibold font-montserrat">{{ config('app.name') }}</a></div>
                <div><h1 class="font-medium text-lg">All right reserved &copy; {{ date('Y') }}</h1></div>
            </div>
        </footer>

    </div>
</body>

@livewireScripts()

</html>
