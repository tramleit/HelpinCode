@props(['discussion'])
<div
    class="bg-white rounded-lg shadow-md p-6 border-2 border-transparent hover:border-primary transition-all duration-300 group">
    <!-- Header -->
    <div class="flex items-center mb-4">
        <img src="{{ asset('images/person.svg') }}" alt="User Image" class="rounded-lg border-primary border-2 mr-4"
            width="100" height="100">

        <div>
            <h2 class="font-montserrat text-xl font-bold text-primary">Joe Doe</h2>
            <span class="text-gray-500">Posted 2 hours ago</span>
        </div>
    </div>
    
    <!-- Description -->
    <p class="text-gray-500 font-medium mb-4">fklsajfkl;ajs;lfkjaslkjf;lakjsflksajfl;kjasfjas;lsfj</p>
    <p class="text-gray-500 font-medium mb-4">fklsajfkl;ajs;lfkjaslkjf;lakjsflksajfl;kjasfjas;lsfj</p>
    <p class="text-gray-500 font-medium mb-4">fklsajfkl;ajs;lfkjaslkjf;lakjsflksajfl;kjasfjas;lsfj</p>
</div>
