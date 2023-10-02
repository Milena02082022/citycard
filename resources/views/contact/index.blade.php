@extends('templates.base')

@section('page.title', "Контакти")

@section('content')
<section class="section-1">
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