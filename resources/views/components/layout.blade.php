<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Halaman Home</title>
</head>

<body class="h-full">
    <div class="min-h-full">
        <x-navbar></x-navbar>
        {{-- <div class="flex">
            <!-- Sidebar -->
            <aside class="w-64 bg-gray-100 p-4 min-h-screen">
                <h2 class="text-lg font-semibold mb-4">Menu</h2>
                <ul class="space-y-2">
                    <li><a href="#" class="block px-4 py-2 rounded hover:bg-gray-200">Dashboard</a></li>
                    <li><a href="#" class="block px-4 py-2 rounded hover:bg-gray-200">Team</a></li>
                    <li><a href="#" class="block px-4 py-2 rounded hover:bg-gray-200">Projects</a></li>
                </ul>
            </aside>

            <!-- Main content -->
            <main class="flex-1 bg-white p-6">
                <h1 class="text-2xl font-bold mb-4">Welcome</h1>
                <p class="text-gray-600">Ini adalah area konten utama.</p>
            </main>
        </div> --}}

        <x-header>{{ $title }}</x-header>

        <main>
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                {{ $slot }}
            </div>
        </main>
    </div>
    {{-- <h1 class="text-3xl text-red-500 font-bold">Hello World</h1> --}}


</body>

</html>
