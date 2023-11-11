@extends('templates.base')

@section('page.title', "Кабінет користувача")

@section('content')
<section class="section-1">
	<x-container>
		<h2 class="main-title">Кабінет користувача Citycard</h2>
		<button class="btn btn-light "><a href="{{route('user', ['user' => $user->user_id])}}" class="nav-link">Назад</a></button>
			<h3 class="title">Інформація про користувача</h3>
			<p class="item-text">Прізвище: {{$user->user_surname}} </p>
			<p class="item-text">Ім'я: {{$user->user_name}} </p>
			<p class="item-text">Електронна пошта: {{$user->email}} </p>
			<p class="item-text">Номер телефону: {{$user->phone_number}} </p>
	</x-container>
</section>
@endsection