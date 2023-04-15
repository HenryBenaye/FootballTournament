<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
    <x-layout>

    </x-layout>
    <body class="antialiased h-full">
        <div class="w-full h-full flex justify-center items-center flex-col">
            <h1 class="text-5xl pb-4">Voetbal Toernooi</h1>
            <button id="TourButton" onclick="myFunction()" class="bg-indigo-500 rounded-md p-2 mb-4">Toernooi starten</button>
            <form action=""></form>
            <div id="amountTeams" class="relative z-0 mb-6 group hidden">
                <input type="number" name="amountTeams" id="amountTeamsInput" class="block py-4.5 px-0 text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                <label for="amountTeams" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Hoeveel teams?</label>
            </div>
            <button id="startButton" onclick="" class="bg-indigo-500 hidden rounded-md p-2 mb-4">Starten</button>
        </div>
    </body>
    <script>
        function myFunction() {
            document.getElementById("amountTeams").classList.remove('hidden');
            document.getElementById("TourButton").classList.add('hidden');
            document.getElementById("startButton").classList.remove('hidden');
        }
    </script>
</html>
