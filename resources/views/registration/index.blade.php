@extends('templates.auth')

@section('page.title', "Сторінка реєстрації")

@section('auth.content')
	<h1 class="main-title">Форма реєстрації користувача</h1>
	<h4 class="card-title">Заповніть персональні дані в форму реєстрації.</h4>
	<x-form-card>
		<x-card-body>
			<x-errors />
			<x-form action="{{route('registration.store')}}" method="POST">
				<x-form-item>
					<x-label>Прізвище</x-label>
					<x-input name="surname" placeholder="Введіть прізвище" autofocus />
					<x-error name="surname" />
				</x-form-item>
				<x-form-item>
					<x-label>Ім`я</x-label>
					<x-input name="name" placeholder="Введіть ім`я" autofocus />
					<x-error name="name" />
				</x-form-item>
				<x-form-item>
					<x-label>Номер телефону</x-label>
					<x-input type="phone" name="phone" placeholder="Введіть номер телефону" autofocus />
					<x-error name="phone" />
				</x-form-item>
				<x-form-item>
					<x-label>Електронна пошта</x-label>
					<x-input type="email" name="email" placeholder="Введіть email"  autofocus />
					<x-error name="email" />
				</x-form-item>
				<x-form-item>
					<x-label>Пароль</x-label>
					<x-input type="password" name="password" placeholder="Введіть пароль" maxlength="8" autofocus />
					<x-error name="password" />
				</x-form-item>
				<x-form-item>
					<x-label>Підтвердження паролю</x-label>
					<x-input type="password" name="password_confirmation" autofocus />
					<x-error name="password" />
				</x-form-item>
				<x-form-item>
					<x-button1 type="submit">Зареєстуватися</x-button1>
					<x-button2>
						<a href="{{ route('login') }}" class="form-link mx-2">Увійти</a>
					</x-button2>
				</x-form-item>
			</x-form>
		</x-card-body>
	</x-form-card>			
@endsection