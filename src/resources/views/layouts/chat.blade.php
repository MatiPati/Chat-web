<html>
<head>
    <title>Chat-Web</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- Meta-informations --}}
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Mateusz Ożóg">
    <meta name="description" content="">
    <meta name="keywords" content="">
    {{-- Styles --}}
    <link rel="stylesheet" href="/css/app.css">
    {{-- Scripts --}}
    <script src="/js/app.js" type="application/javascript" defer></script>
    <script src="/js/backend.js" type="application/javascript" defer></script>
</head>
<body>
    @include('inc.navbar')
    <main class="my-5">
        <div class="container">
            @include('inc.messages')
            @yield('content')
        </div>
    </main>
</body>
</html>