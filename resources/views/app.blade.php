<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Blog MDA</title>

    @include('partials.styles')

</head>
<body>

	@include('partials.navbar-admin')

    <div class="container">

    	@yield('content', 'Blog MDA')
    
    </div>

    @include('partials.footer')
    
    @include('partials.scripts')
</body>
</html>