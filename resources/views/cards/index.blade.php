@extends('templates.base')

@section('page.title', "Картки")

@section('content')
<section class="section-1">
	<x-container>
		<h3 class="title">Наші картки</h3>
		<div class="row">
			<div class="col-lg-3 col-md-6 col-sm-12 card-spacing">
				<x-card>
					<x-card-img-box>
						<img class="card-img" src="{{asset('images/card41.png')}}" alt="standart">
					</x-card-img-box>
					<x-card-body>
						<h3 class="card-title">Стандартна |Неперсоніфікована</h3>
						<p class="card-text" >Неперсоніфікований електронний квиток – електронний документ на основі безконтактної електронної пластикової картки, що використовується як єдиний платіжний інструмент для оплати проїзду у громадському транспорті</p>
					</x-card-body>
				</x-card>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 card-spacing">
				<x-card>
					<x-card-img-box>
						<img class="card-img" src="{{asset('images/card31.png')}}" alt="students">
					</x-card-img-box>
					<x-card-body>
						<h3 class="card-title">Блакитна |Студентська/Учнівська</h3>
						<p class="card-text">Студентський/учнівський електронний квиток – електронний документ для оплати проїзду за тарифом “Студентський/учнівський”, що використовується як платіжний інструмент у громадському транспорті</p>
					</x-card-body>
				</x-card>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 card-spacing">
				<x-card>
					<x-card-img-box>
						<img class="card-img" src="{{asset('images/card21.png')}}" alt="special">
					</x-card-img-box>
					<x-card-body>
						<h3 class="card-title">Жовта | Пільгова</h3>
						<p class="card-text">Пільговий електронний квиток — електронний документ для оплати проїзду за тарифом “Пільговий”, що використовується як платіжний інструмент у громадському транспорті</p>
					</x-card-body>
				</x-card>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 card-spacing">
				<x-card>
					<x-card-img-box>
						<img class="card-img" src="{{asset('images/card11.png')}}" alt="official">
					</x-card-img-box>
					<x-card-body>
						<h3 class="card-title">Червона | Службова</h3>
						<p class="card-text">Електронний квиток водія, контролера – електронний документ водія/контролера для реєстрації у автоматизованій системі обліку оплати проїду у громадському транспорті</p>
					</x-card-body>
				</x-card>
			</div>
		</div>
	</x-container>
</section>
@endsection