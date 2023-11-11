@extends('templates.base')

@section('page.title', "Картки користувача")

@section('content')
<section class="section-1">
	<x-container>
		<h2 class="main-title">Кабінет користувача Citycard</h2>
		<button class="btn btn-light "><a href="{{route('user', ['user' => $user->user_id])}}" class="nav-link">Назад</a></button>
			<h3 class="title">Картки користувача {{$user->user_name}} </h3>
			@if (session('error'))
				<div class="alert alert-danger small py-1">
					{{ session('error') }}
				</div>
			@endif
			@if ($cards->count() > 0)
						@foreach ($cards as $card)
						<div class="row">
							<div class="col-lg-3 col-md-6 col-sm-12 card-spacing">
								<div class="card">
									<div class="card-body">
										<p class="item-text">Номер картки: {{$card->card_number}} </p>
										<p class="item-text">Термін дії картки: {{$card->expiration_date}}</p>
									</div>
								</div>
							</div>
						</div>	
						@endforeach
    				@else
        		<p>Користувач не має жодної картки.</p>
    		@endif
			 <button class="btn btn-light"><a class="nav-link" href="{{ route('user.add-card-form', ['user' => $user->user_id]) }}">Додати картку</a></button>
	</x-container>
</section>
@endsection