<div class="flex min-h-screen">
    <!-- Sidebar -->
    <aside class="w-64 bg-red-600 text-white flex flex-col">
        <div class="p-4 text-center font-bold text-lg relative">
            <img class="absolute mt-1 ml-4" src="img/package2.svg" alt=""> SIMS Web App <span
                class="pl-6 absolute"><svg class="h-8 w-8 text-white" width="24" height="24" viewBox="0 0 24 24"
                    stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" />
                    <line x1="4" y1="6" x2="20" y2="6" />
                    <line x1="4" y1="12" x2="14" y2="12" />
                    <line x1="4" y1="18" x2="18" y2="18" />
                </svg></span>
        </div>
        <nav class="flex-1 p-4">
            <ul>
                <li class="mb-4">
                    <a href="/produk" class="flex items-center gap-2 px-4 py-2 rounded hover:bg-red-300/30 font-bold">
                        <i><svg class="block stroke-white stroke-2" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path
                                    d="M11 21.73a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73z">
                                </path>
                                <path d="M12 22V12"></path>
                                <path d="m3.3 7 7.703 4.734a2 2 0 0 0 1.994 0L20.7 7"></path>
                                <path d="m7.5 4.27 9 5.15"></path>
                            </svg></i> Produk
                    </a>
                </li>
                <li class="mb-4">
                    <a href="/profil" class="flex items-center gap-2 px-4 py-2 rounded hover:bg-red-300/30 font-bold">
                        <i><svg class="stroke-white stroke-2l" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="8" r="5"></circle>
                                <path d="M20 21a8 8 0 0 0-16 0"></path>
                            </svg></i> Profil
                    </a>
                </li>
                <li class="mb-4">
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button type="submit"
                            class="flex items-center gap-2 px-4 py-2 rounded hover:bg-red-300/30 font-bold"><i><svg
                                    class="stroke-white stroke-2" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                    <polyline points="16 17 21 12 16 7"></polyline>
                                    <line x1="21" x2="9" y1="12" y2="12"></line>
                                </svg></i> Logout</button>
                    </form>

                </li>
            </ul>
        </nav>
    </aside>
    <div>
        {{ $slot }}
    </div>
</div>
