<nav class="navbar navbar-expand-sm navbar-dark bg-black">
	<div class="container">
        <a class="navbar-brand" href="{{route('welcome')}}">
            <img src="{{asset('images/logo.png')}}" alt="">
        </a>
	  <a href="home.html" class="navbar-brand">Branded Watches</a>
	  <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
		<span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarCollapse">
		<ul class="navbar-nav ml-auto">
		  <li class="nav-item active">
			<a href="home.html"class="nav-link">Home</a>
		  </li>
		  <li class="nav-item">
			<a href="services1.html" class="nav-link">Services</a>
		  </li>
		  <li class="nav-item">
			<a href="product.html" class="nav-link">Products</a>
		  </li>
		  <li class="nav-item">
			<a href="About.html" class="nav-link">About</a>
		  </li>
		  <li class="nav-item">
			<a href="contact.html" class="nav-link">Contact</a>
		  </li>
		  <li class="nav-item">
            <li class="nav-item">
			<a href="{{ route('login') }}" class="nav-link">Login</a>
		  </li>
		  <li class="nav-item">
		  </li>
		</ul>
	  </div>
	</div>
	</nav>