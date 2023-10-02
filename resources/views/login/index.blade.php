@extends('templates.base')

@section('page.title', "Сторінка входу")

@section('content')
<section class="section-1">
	<div class="container">
		<div class="row">
			<h4 class="main-title">Форма для входу користувача</h4>
			<div class="col-12 col-md-6 ">
				<div class="form-card">
					<div class="card-body">
						<h4 class="card-title mb-4 ">Вхід в особистий кабінет</h4>
						<form class="form" action="" method="GET">
							<div class="mb-3">
								<label class="required">Номер картки</label>
								<input class="form-control" type="text" name="card-number" placeholder="Введіть номер картки" maxlength="10" autofocus>
							</div>
							<div class="mb-3">
								<label class="required">Номер телефону</label>
								<input class="form-control" type="phone" name="phone" placeholder="Введіть номер телефону" autofocus>
							</div>
							<div class="d-flex">
								<button class="btn btn-primary mx-2" type="submit">Увійти</button>
								<a href="{{ route('admin') }}" class="form-link mx-2">Адміністратор сайту</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection