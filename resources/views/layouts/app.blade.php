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


<body class="bg-gray-100 text-gray-800 font-roboto">
    <!-- Header -->
    <header>
        <div class="bg-white shadow">
            <nav class="container mx-auto p-4 flex justify-between items-center">
                <!-- Brand Name -->
                <div class="text-xl font-bold text-primary">
                    <a href="{{ route('index') }}" wire:navigate class="font-montserrat">Help in Code</a>
                </div>
                <!-- Navigation Links -->
                <div>
                    <ul class="flex space-x-4 font-semibold">
                        <li><a href="#" class="text-gray-600 hover:text-primary">Home</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-primary">About</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-primary">Contact</a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- Hero Section -->
        <div class="container mx-auto p-8 text-center mt-20">
            <h1 class="text-4xl font-bold text-primary mb-4 font-montserrat">Welcome to Help in Code</h1>
            <p class="text-lg text-gray-700 mb-8">Discuss Your problem and get the solution</p>
            <div class="flex justify-center">
                <input type="text" placeholder="Search..."
                    class="w-full max-w-lg px-4 py-2 border border-gray-300 rounded-l-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary">
                <button
                    class="px-4 py-2 bg-primary text-white rounded-r-md hover:transition hover:bg-primary-hover focus:outline-none focus:ring-2 focus:ring-primary focus:ring-opacity-50">Search</button>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto p-4">
        {{ $slot }}
    </main>
</body>
@livewireScripts()

</html>
