@extends('templates.base')

@section('page.title', "Переваги")

@section('content')
<section class="section-1">
	<x-container>
		<div class="d-flex flex-column">
			<h3 class="title">Переваги</h3>
			<div class="item">
				<h4 class="item-title">Швидко</h4>
				<p class="item-text">Електронним квитком значно швидше оплачувати проїзд. Вам не потрібно передавати картку водієві/кондуктору та очікувати отримання решти.</p>
			</div>
			<div class="item">
				<h4 class="item-title">Зручно</h4>
				<p class="item-text">Оплата проїзду – це просто. Достатньо піднести електронний квиток до валідатора.</p>
			</div>
			<div class="item">
				<h4 class="item-title">Безпечно</h4>
				<p class="item-text">Картка завжди у Ваших руках. Ви контролюєте процес оплати. Кошти за одну поїздку не можуть списатися двічі. Валідатор опрацьовує один платіж за раз, після чого подає звуковий сигнал та на екран виводиться інформація про успішність транзакції.</p>
			</div>
			<div class="item">
				<h4 class="item-title">Контроль</h4>
				<p class="item-text">Ви самостійно переглядаєте інформацію щодо поповнень, оплат, залишку в особистому кабінеті.</p>
			</div>
		</div>
	</x-container>
</section>
@endsection