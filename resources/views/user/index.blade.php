@extends('templates.base')

@section('page.title', "Кабінет користувача")

@section('content')
<section class="section-1">
	<x-container>
		<button class="btn btn-light"><a href="{{route('login')}}" class="nav-link">Вийти</a></button>
		<h2 class="title">Кабінет користувача Citycard</h2>
	  <div class="d-flex mb-3">
		<div class="col-md-3">
			<ul class="list-group">
				 <li class="list-group-item"><a class="nav-link" href="{{route('user.profile', ['user' => $user->user_id])}}">Профіль</a></li>
				 <li class="list-group-item"><a class="nav-link" href="{{route('user.cards', ['user' => $user->user_id])}}">Картки</a></li>
				 <li class="list-group-item"><a class="nav-link" href="{{route('user.transactions', ['user' => $user->user_id])}}">Транзакції</a></li>
				 <li class="list-group-item"><a class="nav-link" href="{{route('user.history', ['user' => $user->user_id])}}">Історія поїздок</a></li>
			</ul>
	  </div>
	  </div>
	</x-container>
</section>
@endsection