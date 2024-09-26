<!DOCTYPE html>
<html lang="EN">

<head>
    {{-- tu includujem head scripty --}}
        @include('layout.head')
</head>

<body>
    {{-- tu includujem navbar --}}
    @include('layout.nav')

    <div class="container py-4">
        {{-- tu includujem content --}}
        @yield('content')
    </div>

    {{-- tu includujem footer --}}
    @include('layout.footer')
</body>

</html>