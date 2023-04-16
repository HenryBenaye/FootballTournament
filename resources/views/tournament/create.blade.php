<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
<x-layout>

</x-layout>
<body class="antialiased h-full">
<div class="w-full h-full flex justify-center items-center flex-col">
    <form id="form" class="border-solid border-2 border-black rounded-md p-4 shadow-xl" method="post" action="{{"tournament.store"}}">
        @csrf
        @method('POST')
        <div id="inputTeams" class="mb-4">

        </div>
        <input type="hidden" value="{{$amountTeams}}" name="amountTeams" >
        <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Submit
        </button>
    </form>
</div>
<script>
    for (let i = 0; i < {{$amountTeams}}; i++) {
        const list = document.getElementById("inputTeams");
        list.innerHTML +=
            `<div>
                    <label for="teamName" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Team Naam #${i}</label>
            <input type="text" name="teamName${i}" id="teamName"
                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required>
            </div>`;
    }
</script>
</body>
</html>
