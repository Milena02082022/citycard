@extends('templates.base')

@section('content')
<section class="section-1">
	<x-container>
		<div class="row">
			<div class="col-12 col-md-10">
				<button class="btn btn-light"><a href="{{route('admin')}}" class="nav-link">Вийти</a></button>
				<h1 class="main-title">Адміністративна панель Citycard</h1>
				<div class="col-md-3">
					<ul class="list-group">
						 <li class="list-group-item"><a class="nav-link" href="{{route('cities.index')}}">Міста</a></li>
						 <li class="list-group-item"><a class="nav-link" href="{{route('transports.index')}}">Транспорт</a></li>
						 <li class="list-group-item"><a class="nav-link" href="{{route('tickets.index')}}">Квитки</a></li>
					</ul>
			  </div>
			</div>
		</div>
	</x-container>
</section>
@endsection
