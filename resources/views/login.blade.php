<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
</head>

<body>
    <aside class="w-screen flex flex-wrap  ">
        <div class="w-[50%] h-screen flex flex-col items-center justify-center">
            <div class="p-4 flex flex-row text-center font-bold text-lg relative">
                <span><svg class="h-8 w-8 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                    </svg>
                </span>
                <h1 class="pt-1 text-xl">SIMS Web App</h1>

            </div>
            <h1 class="text-4xl font-bold">Masuk Atau Buat Akun</h1>
            <h1 class="text-4xl font-bold">Untuk Memulai</h1>

            @if ($errors->any())
                <div class="bg-red-500 text-white p-2 rounded mb-2">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            {{-- Halman Login --}}
            <form method="POST" action="{{ route('login') }}" class="mt-2">
                @csrf
                <div class="w-[500px] flex items-center mt-2 px-3 py-2 border">
                    <input type="text" name="email" class="w-full focus:outline-none "
                        placeholder="@ Masukan Email Anda">
                </div>

                <div class="w-[500px] flex items-center mt-8 px-3 py-2 border">
                    <input type="password" name="password" class="w-full focus:outline-none "
                        placeholder=" Masukan Password Anda">
                </div>

                <div class="w-[500px] text-center mt-8 px-3 py-2 rounded bg-red-600">
                    <button type="submit" class="w-full text-white  font-bold">Masuk</button>
                </div>

            </form>
            {{-- End Halaman Login --}}
        </div>
        <div class="w-[50%] h-screen border-2">
            <img class="w-[100%] h-[100%]" src="../img/profil/gambar.jpg" alt="">
        </div>

    </aside>
</body>

</html>
