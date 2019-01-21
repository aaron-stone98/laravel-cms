<!DOCTYPE html>
<html>
<head>
	<title>Aaron</title>
	<link rel="stylesheet" href="/css/app.css">
</head>


<body>
    @include('include.navbar')
    <div class="container">
	@include('include.showcase')
	<div class="row">
		<div class="col-md-8 col-lg-8">
            @yield('content')
        </div>    
        <div class="col-md-4 col-lg-4">   

            @include('include.sidebar')
			
		





		</div>
	</div>
	</div>

	   


</body>
</html>