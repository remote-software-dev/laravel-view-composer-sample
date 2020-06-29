<!doctype html>
<html lang="en">

<head>
    @include('layouts.partials.head')
</head>

<body>
    <header>
        @include('layouts.partials.header')
    </header>

    <!-- Begin page content -->
    <main role="main" class="container" style="padding-top: 80px;">
        @yield('content')
    </main>
</body>

</html>