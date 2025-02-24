<x-layout>
    {{-- Foto Pofil --}}
    <div class="flex flex-wrap-reverse relative">
        <div class="w-44 h-44 bg-[url(img/aldo.jpg)] bg-cover bg-center border-gray-700 rounded-full">
            <img class="w-44 h-44 border bg-[url(img/aldo.jpg)] bg-cover bg-center border-gray-700 rounded-full"
                src="img/aldo.jpg" alt="">
        </div>
        <a href="#" class="w-10 h-10 ml-36 mb-2 border-2 p-1 border-gray-400 rounded-full absolute">
            <i><svg class="fill-black stroke-white stroke-2" xmlns="http://www.w3.org/2000/svg" width="30"
                    height="30" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path
                        d="M21.174 6.812a1 1 0 0 0-3.986-3.987L3.842 16.174a2 2 0 0 0-.5.83l-1.321 4.352a.5.5 0 0 0 .623.622l4.353-1.32a2 2 0 0 0 .83-.497z">
                    </path>
                    <path d="m15 5 4 4"></path>
                </svg></i>
        </a>
    </div>

    <div class="flex space-x-4 p-4">
        {{-- Nama Kanidat --}}
        <div class="w-[700px]">
            <label for="" class="block text-gray-700 mb-1">Nama Kanidat</label>
            <div class="flex items-center border rounded  px-3 py-2 bg-white">
                <span class="text-gray-500">@</span>
                <input type="text" value="Aldo Zamaludin Fernando"
                    class="w-full focus:outline-none ml-2 text-gray-700" readonly>
            </div>
        </div>

        {{-- Posisi  Kanidat --}}
        <div class="w-[290px]">
            <label for="" class="block text-gray-700 mb-1">Posisi Kanidat</label>
            <div class="flex items-center border raunded px-3 py-2 bg-white">
                <input type="text" value="Web Programmer" class="w-full focus:outline-none" readonly>
            </div>
        </div>

    </div>

    {{--  --}}

</x-layout>
