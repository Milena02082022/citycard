@extends('templates.base')

@section('page.title', "Кабінет користувача")

@section('content')
<section class="section-1">
	<x-container>
		<h2 class="main-title">Кабінет користувача Citycard</h2>
		<button class="btn btn-light "><a href="{{route('user', ['user' => $user->user_id])}}" class="nav-link">Назад</a></button>
		<h3 class="title">Транзакції користувача {{$user->user_name}}</h3>
	</x-container>
</section>
@endsection