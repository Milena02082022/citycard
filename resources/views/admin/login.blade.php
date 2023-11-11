@extends('templates.auth')

@section('page.title', "Сторінка входу адміністратора")

@section('auth.content')
	<h1 class="main-title">Форма для входу адміністратора</h1>
	<h4 class="card-title">Для входу в адміністративну панель введіть логін та пароль.</h4>
	<x-form-card>
		<x-card-body>
			<x-errors />
			<x-form action="{{route('admin.store')}}" method="POST">
				<x-form-item>
					<x-label>Логін</x-label>
					<x-input type="email" name="email" placeholder="Введіть логін"  autofocus />
				</x-form-item>
				<x-form-item>
					<x-label >Пароль</x-label>
					<x-input  type="password" name="password" placeholder="Введіть пароль" maxlength="8" autofocus />
				</x-form-item>
				<x-form-item>
					<x-checkbox>
						Запам`ятати мене
					</x-checkbox>
				</x-form-item>
				<x-form-item>
					<x-button1 type="submit">Увійти</x-button1>
				</x-form-item>
			</x-form>
		</x-card-body>
	</x-form-card>			
@endsection