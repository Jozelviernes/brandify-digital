<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Brandify Digital')</title>
    
 
    <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/png">

    @vite('resources/css/app.css')
</head>
<body class="flex flex-col min-h-screen font-sans bg-gray-50 text-gray-900">

    {{-- Navbar --}}
    @include('components.navbar')

    {{-- Main Content --}}
    <main class="flex-grow">
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('components.footer')

</body>
</html>
