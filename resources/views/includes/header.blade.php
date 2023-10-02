<header class="header fixed-top">
	<nav class="navbar navbar-expand-lg ">
		<x-container>
			<a href="{{ route('home') }}" class="navbar-brand">
				{{config('app.name')}}
			</a>
			<div class="offcanvas offcanvas-end" tabindex="-1" id="navbarOffcanvasLg" aria-labelledby="navbarOffcanvasLgLabel">
				<div class="offcanvas-header">
					<a href="{{ route('home') }}" class="navbar-brand">
						{{config('app.name')}}
					</a>
					<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
				</div>
				<div class="offcanvas-body">
					<ul class="navbar-nav me-auto mb-2 mb-lg-0">
						<li class="nav-item">
						  <a href="{{ route('about') }}" class="nav-link nav-linkb" aria-current="page" >Про нас</a>
						</li>
						<li class="nav-item">
							<a href="{{ route('advantages') }}" class="nav-link nav-linkb" aria-current="page" >Переваги</a>
						 </li>
						<li class="nav-item">
						  <a href="{{ route('cards') }}" class="nav-link nav-linkb" >Картки</a>
					  </li>
					  <li class="nav-item">
						  <a href="{{ route('contact') }}" class="nav-link nav-linkb" >Контакти</a>
					  </li>
				  </ul>
				</div>
			</div>
			<div class="d-flex">
				<button class="btn btn-light mx-1" type="button">
					<a href="{{ route('login') }}" class="nav-link">Увійти</a>
				</button>
				<button class="navbar-toggler mx-1" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarOffcanvasLg" aria-controls="navbarOffcanvasLg" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
			</div>	
		</x-container>
	</nav>
</header>

