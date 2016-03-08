<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Blog Personal</title>

    @include('partials.styles')

</head>
<body>

    <div class="container">
        <h1 class="text-center">Blog MDA</h1>
    </div>

    @yield('body', '')

    @include('partials.scripts')
</body>
</html>