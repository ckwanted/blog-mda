<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Blog MDA</title>

    @include('partials.styles')

</head>
<body>

	@if (Request::is('admin/*'))
		@include('partials.navbar-admin')
	@else
		@include('partials.navbar-public')
	@endif

    <div class="container">
        
    	@yield('content')
        
    </div>

    @include('partials.footer')
    
    @include('partials.scripts')
</body>
</html>