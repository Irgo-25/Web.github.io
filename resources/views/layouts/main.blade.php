<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> {{ $title }} </title>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
</head>

<body>
    {{--Header in Partials Folder --}}
    <nav class="fixed top-0 z-50 w-full bg-[#E9B824] border-b border-orange-600 shadow-lg">
        @include('partials.header')
    </nav>
    {{-- End Header --}}
    {{-- Sidebar in partials Folder --}}
    <aside id="sidebar"
        class="fixed top-0 left-0 bg-[#f5d985] w-44 z-40 h-screen pt-20 transition-transform -translate-x-full sm:translate-x-0 border-2 border-solid border-[#E9B824] rounded-md"
        aria-label="logo-sidebar">
        @include('partials.sidebar')

    </aside>
    {{-- End Sidebar --}}

    {{-- Content In View --}}
    <div class="p-4 sm:ml-40">
        <div class="p-4 mt-10">
            @yield('content')
        </div>
        {{-- End Content --}}
</body>

</html>