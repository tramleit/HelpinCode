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

<body class="font-sans text-gray-900 antialiased">

    <div class="min-h-screen bg-gray-100">
        <livewire:layout.navigation />
        <div class="flex flex-col sm:justify-center items-center mt-8 sm:pt-0">
            <div>
                <a href="/" wire:navigate>
                    <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                </a>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 mb-6 bg-white shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </div>
</body>

</html>
