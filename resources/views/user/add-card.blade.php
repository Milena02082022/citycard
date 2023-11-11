@extends('templates.base')

@section('page.title', "Кабінет користувача")

@section('content')
<section class="section-1">
	<x-container>
		<h2 class="main-title">Кабінет користувача Citycard</h2>
		<button class="btn btn-light "><a href="{{route('user', ['user' => $user->user_id])}}" class="nav-link">Назад</a></button>
		<h3 class="title">Додати картку для користувача {{ $user->user_name }}</h3>
		<form action="{{ route('user.add-card', ['user' => $user->user_id]) }}" method="post">
			 @csrf
			 <div class="form-group pb-2">
				<label for="card_number">Номер картки:</label>
				<input class="form-control" type="text" name="card_number" maxlength="14" autofocus>
			 </div>
			 <div class="form-group pb-2">
				<label for="card_number">Термін дії картки:</label>
				<input class="form-control " type="date" name="date_card" autofocus>
			 </div>
			 <button class="btn btn-primary "type="submit">Додати картку</button>
		</form>
	</x-container>
</section>
@endsection