@extends('templates.base')

@section('page.title', "Головна сторінка")

@section('content')
<section class="section-1">
	<x-container>
		<h1 class="main-title">Ласкаво просимо в Citycard!</h1>
		<h3 class="title">Про нас</h3>
		<p class="item-text">Однією з найважливіших цілей сучасних технологій, що полегшують повсякденне життя, є вдосконалення внутрішнього транспорту.</p>
		<p class="item-text">Місія City Сard – розвиватися разом із сучасними, швидкими, пунктуальними, легкими та безпечними інформаційними технологіями та системами, які відповідають потребам та очікуванням перевізників та роблять подорожі приємними.</p>
		<p class="item-text">Автоматизована система поїздок, транспортний менеджмент, інформація про пасажирооблік у режимі реального часу, планування та системи відеоспостереження СityСard дозволять поїздкам бути точними і в той же час сприятимуть покращенню якості обслуговування клієнтів та прибутковості перевізників.</p>
		<p class="item-text">СityСard використовує якісні спеціалізовані системи, здатні задовольняти щоденні потреби перевізників та підтримувати їх у режимі 24/7. Пасажири можуть здійснювати внутрішньоміські поїздки на автобусах та тролейбусах.</p>
		<p class="item-text">СityСard можна придбати у мережі центрів продажу та в терміналах самообслуговування і використовувати для поїздок в будь-який час.</p>
	</x-container>
</section>
<section class="section-2">
	<x-container>
		<h3 class="title">Як використовувати</h3>
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-12">
				<article class="article">
					<div class="article-body">
						<img class="article-img" src="{{asset('images/buy-tickets.png')}}" alt="buy-tickets">
						<h3 class="article-title">Почни поїздку</h3>
						<p class="article-text">Перед тим, як сідати у автобус, пасажирові слід купити транспортну картку у терміналі або центрі продажу. Надалі цю картку можна поповнювати у терміналах та центрах продажу.</p>
					</div>
				</article>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12">
				<article class="article">
					<div class="article-body">
						<img class="article-img" src="{{asset('images/tap-card.png')}}" alt="tap-card">
						<h3 class="article-title">Покажи квиток</h3>
						<p class="article-text">Щоб оплатити поїздку, пасажирові слід прикласти транспортну картку або QR-код з мобільного додатку до валідатора. Щоб отримати QR-код, необхідно натиснути кнопку «Показати квиток» у мобільному додатку.</p>
					</div>
				</article>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12">
				<article class="article">
					<div class="article-body">
						<img class="article-img" src="{{asset('images/trip.png')}}" alt="trip">
						<h3 class="article-title">Насолоджуйся поїздкою</h3>
						<p class="article-text">Пасажир займає місце у автобусі.</p>
					</div>
				</article>
			</div>
		</div>
	</x-container>
</section>
<section class="section-2">
	<x-container>
		<h3 class="title">Наші картки</h3>
		<div class="row">
			<div class="col-lg-3 col-md-6 col-sm-12 card-spacing">
				<x-card>
					<x-card-img-box>
						<img class="card-img" src="{{asset('images/card41.png')}}" alt="standart">
					</x-card-img-box>
					<x-card-body>
						<h3 class="card-title">Стандартна |Неперсоніфікована</h3>
						<p class="card-text" >Неперсоніфікований електронний квиток – електронний документ на основі безконтактної електронної пластикової картки, що використовується як єдиний платіжний інструмент для оплати проїзду у громадському транспорті</p>
					</x-card-body>
				</x-card>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 card-spacing">
				<x-card>
					<x-card-img-box>
						<img class="card-img" src="{{asset('images/card31.png')}}" alt="students">
					</x-card-img-box>
					<x-card-body>
						<h3 class="card-title">Блакитна |Студентська/Учнівська</h3>
						<p class="card-text">Студентський/учнівський електронний квиток – електронний документ для оплати проїзду за тарифом “Студентський/учнівський”, що використовується як платіжний інструмент у громадському транспорті</p>
					</x-card-body>
				</x-card>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 card-spacing">
				<x-card>
					<x-card-img-box>
						<img class="card-img" src="{{asset('images/card21.png')}}" alt="special">
					</x-card-img-box>
					<x-card-body>
						<h3 class="card-title">Жовта | Пільгова</h3>
						<p class="card-text">Пільговий електронний квиток — електронний документ для оплати проїзду за тарифом “Пільговий”, що використовується як платіжний інструмент у громадському транспорті</p>
					</x-card-body>
				</x-card>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 card-spacing">
				<x-card>
					<x-card-img-box>
						<img class="card-img" src="{{asset('images/card11.png')}}" alt="official">
					</x-card-img-box>
					<x-card-body>
						<h3 class="card-title">Червона | Службова</h3>
						<p class="card-text">Електронний квиток водія, контролера – електронний документ водія/контролера для реєстрації у автоматизованій системі обліку оплати проїду у громадському транспорті</p>
					</x-card-body>
				</x-card>
			</div>
		</div>
	</x-container>
</section>
<section class="section-1 ">
	<x-container>
		<div class="d-flex flex-column">
			<h3 class="title">Контакти</h3>
			<div class="item">
				<h5 class="item-title">Графік роботи:</h5>
				<p class="item-text">Понеділок – П’ятниця</p>
				<p class="item-text">08:00 – 18:00</p>
				<p class="item-text">Для уточнення графіку звертатись за номерами: <span class="phone">+380 332 74 11 00</span>, <span class="phone"> +380 630 63 11 00 </span></p>
			</div>
		</div>
		<div class="d-flex flex-column">
			<p class="item-text">Ви можете завітати у центр підтримки користувачів, що знаходиться за адресою <span class="address">м. Луцьк, вул. Лесі Українки, 16A.</span></p>
			<p class="item-text">Тут ми зможемо допомогти вам із придбанням чи поповненням стандартної картки або ж отриманням картки пільговика чи студента/учня.</p>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2524.8071691124114!2d25.316833276272774!3d50.7420652663245!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x472599eb801cfdf1%3A0x788044070afec112!2z0LLRg9C70LjRhtGPINCb0LXRgdGWINCj0LrRgNCw0ZfQvdC60LgsIDE20JAsINCb0YPRhtGM0LosINCS0L7Qu9C40L3RgdGM0LrQsCDQvtCx0LvQsNGB0YLRjCwgNDMwMDA!5e0!3m2!1suk!2sua!4v1694443226914!5m2!1suk!2sua" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		</div>
	</x-container>
</section>
@endsection
