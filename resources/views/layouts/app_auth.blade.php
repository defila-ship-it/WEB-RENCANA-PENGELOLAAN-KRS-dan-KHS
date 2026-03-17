<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Auth')</title>

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-br from-indigo-600 via-blue-500 to-cyan-400">

    <!-- Background Blur Effect -->
    <div class="absolute w-72 h-72 bg-white/20 rounded-full blur-3xl top-10 left-10"></div>
    <div class="absolute w-72 h-72 bg-cyan-300/30 rounded-full blur-3xl bottom-10 right-10"></div>

    <div class="min-h-screen flex items-center justify-center relative z-10">
        <div class="bg-white/10 backdrop-blur-xl border border-white/20 shadow-2xl rounded-2xl p-8 w-full max-w-md">

            <h2 class="text-2xl font-bold text-center mb-6 text-white">
                @yield('title', 'Auth Page')
            </h2>
            @yield('content')

        </div>
    </div>

</body>

</html>