@extends('templates.auth')

@section('page.title', "Сторінка входу")

@section('auth.content')
	<h1 class="main-title">Форма для входу користувача</h1>
	<h4 class="card-title">Введіть дані для входу в особистий кабінет Citycard.</h4>
	@if (session('error'))
		<div class="alert alert-danger small py-1">
			{{ session('error') }}
		</div>
	@endif
	<x-form-card>
			<x-card-body>
				<x-errors />
					<x-form action="{{route('login.store')}}" method="POST">
						<x-form-item>
							<x-label>Номер картки </x-label>
							<x-input name="card-number" placeholder="Введіть номер картки" maxlength="14" autofocus />
							<x-error name="card-number" />
						</x-form-item>
						<x-form-item>
							<x-label>Номер телефону</x-label>
							<x-input type="phone" name="phone" placeholder="Введіть номер телефону" autofocus />
							<x-error name="phone" />
						</x-form-item>
						<x-form-item>
							<x-button1 type="submit">Увійти</x-button1>
							<x-button2>
								<a href="{{ route('registration') }}" class="form-link mx-2">Зареєстуватися</a>
							</x-button2>
						</x-form-item>
						<x-form-item>
							<x-button2>
								<a href="{{ route('admin') }}" class="form-link mx-2">Адміністратор сайту</a>
							</x-button2>
						</x-form-item>	
					</x-form>
			</x-card-body>
	</x-form-card>
@endsection