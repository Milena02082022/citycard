@extends('templates.base')

@section('content')
<section class="section-1">
	<x-container>
		<button class="btn btn-light "><a href="{{route('tickets.index')}}" class="nav-link">Назад</a></button>
		<h3 class="title">Детальніше про {{ $tickets->ticket_type}} квиток</h3>
		<p class="item-title">Незабаром тут ви зможете переглянути інформацію про "{{ $tickets->ticket_type}} квиток", як його отримати та які документи необхідно для його отримання! </p
	</x-container>
</section>
@endsection