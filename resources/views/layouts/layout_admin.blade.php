<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport"
	content="width=device-width, initial-scale=1, user-scalable=yes">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>


	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
		  <div class="navbar-header">
			<a class="navbar-brand" href="#">Make Up</a>
		  </div>
		  <ul class="nav navbar-nav">
			@guest
						<li class="nav-item">
							<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
						</li>
						@if (Route::has('register'))
							<li class="nav-item">
								<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
							</li>
						@endif
					@else
			
			<li><a href="{{ route('product.index') }}" 	>
                products
            </a></li>
			<li><a href="{{ route('provider.index') }}" 	>
                providers
			</a></li>
			<li><a href="{{ route('category.index') }}" 	>
                categories
			</a></li>
			<li><a href="{{ route('sale.index') }}" 	>
                sales
			</a></li>
			<li><a href="{{ route('bill.index') }}" 	>
                bills
			</a></li>
			
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">{{ Auth::user()->name }}
				<span class="caret"></span></a>
				<ul class="dropdown-menu">
				  <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
					  Logout
				  </a></li>
				  <li><a href="{{ route('product.index') }}" 	>
					  Admin
				  </a></li>
			  
				</ul>
			  </li>
		  </ul>
		  
		</div>
	  </nav>
				<ul class="navbar-nav ml-auto">
					
							<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
								{{ csrf_field() }}
							</form>

							</div>
						</li>
					@endguest
				</ul>
			</div>
		</div>
	</nav>
	<div class="container-fluid" style="margin-top: 100px">

		@yield('content')
	</div>
	<style type="text/css">
	.table {
		
		border-top: 2px solid #ccc;

	}

body {               
                background-image: url("https://cdn.pixabay.com/photo/2015/07/31/20/38/background-869586__340.png");
                 background-repeat: no-repeat;
				font-family:Arial;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
            }
</style>


</body>
</html>