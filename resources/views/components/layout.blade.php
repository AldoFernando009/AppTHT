<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css', 'resources/js/app.js')
    <script src="js/script.js"></script>
</head>

<body>
    <x-sidebar>

        <main>
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                {{ $slot }}
            </div>

        </main>

    </x-sidebar>
    <x-script></x-script>
</body>

</html>
