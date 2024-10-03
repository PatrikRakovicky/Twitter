<!DOCTYPE html>
<html lang="EN">

<head>
    {{-- tu includujem head scripty --}}
        @include('inc.head')
</head>

<body>
    {{-- tu includujem navbar --}}
    @include('inc.nav')

    <div class="container py-4">
        {{-- tu includujem content --}}
        @yield('content')
    </div>

    {{-- tu includujem footer --}}
    @include('inc.footer')
</body>

</html>