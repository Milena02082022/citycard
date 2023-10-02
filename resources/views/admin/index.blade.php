@extends('templates.base')

@section('page.title', "Сторінка входу")

@section('content')
<section class="section-1">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-6">
				<h4 class="main-title">Форма для входу адміністратора</h4>
				<div class="form-card">
					<div class="card-body">
						<h4 class="card-title mb-4 ">Вхід в особистий кабінет</h4>
						<form class="form" action="" method="GET">
							<div class="mb-3">
								<label class="required">Логін</label>
								<input class="form-control" type="email" name="email" placeholder="Введіть логін"  autofocus>
							</div>
							<div class="mb-3">
								<label class="required">Пароль</label>
								<input class="form-control" type="password" name="password" placeholder="Введіть пароль" maxlength="8" autofocus>
							</div>
							<div class="mb-3">
								<div class="form-check">
									<input class="form-check-input" type="checkbox" name="remember" value="1" id="remember">
									<label class="form-check-label" for="remember">
									  Запам`ятати мене
									</label>
								</div>
								<button class="btn btn-primary" type="submit">Увійти</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection