<footer class="footer py-5">
	<x-container>
		<div class="row">
			<div class="col-10 col-md-3 mb-5">
				<a href="{{ route('home') }}" class="navbar-brand">
					{{config('app.name')}}
				</a>
			</div>
			<div class="col-10 col-md-3 mb-5">
				<h5 class="title-f">Про Citycard</h5>
				<ul class="nav flex-column">
				  <li class="nav-item mb-2"><a href="{{ route('about') }}" class="nav-link p-0 ">Про нас</a></li>
				  <li class="nav-item mb-2"><a href="{{ route('advantages') }}" class="nav-link p-0 ">Переваги</a></li>
				  <li class="nav-item mb-2"><a href="{{ route('cards') }}" class="nav-link p-0 ">Види карток</a></li>
				  <li class="nav-item mb-2"><a href="{{ route('contact') }}" class="nav-link p-0 ">Наші контакти</a></li>
				</ul>
			 </div>
			 <div class="col-10 col-md-3 mb-5">
				<h5 class="title-f">Додаток</h5>
				<ul class="nav flex-column">
				  <li class="nav-item mb-2"><a href="https://apps.apple.com/tr/app/citycard-lutsk/id1487659360" class="nav-link p-0 ">IOs</a></li>
				  <li class="nav-item mb-2"><a href="https://play.google.com/store/apps/details?id=com.kentkart.citycardlutsk&pli=1" class="nav-link p-0 ">Android</a></li>
				</ul>
			 </div>
			 <div class="col-10 col-md-3 mb-5">
				<h5 class="title-f">Соціальні мережі</h5>
				<ul class="nav flex-column">
				  <li class="nav-item mb-2">
					<img class="img-f" src="{{asset('images/facebook.svg')}}" alt="facebook">
					<a href="https://www.facebook.com/citycardnet/" class="nav-link p-0">Facebook</a>
				</li>
				  <li class="nav-item mb-2">
					<img class="img-f" src="{{asset('images/instagram.svg')}}" alt="instagram">
					<a href="https://www.instagram.com/citycardnet/" class="nav-link p-0 ">Instagram</a>
				</li>
				</ul>
			 </div>
		</div>
	</x-container>
 </footer>
	