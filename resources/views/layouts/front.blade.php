<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.head')
</head>

<body class="bg-base-white font-poppins">
    {{-- wa floating icon --}}
    <a href="https://api.whatsapp.com/send?phone=6285852115872&text=testing" class="float" target="_blank">
        <i class="fa fa-whatsapp my-float"></i>
    </a>
    {{-- end wa floating icon --}}
    <div class="flex flex-col text-base">
        @include('includes.navbar')
        <main>
            @yield('content')
        </main>
        @include('includes.footer')
    </div>

    @stack('scripts')
</body>

</html>
