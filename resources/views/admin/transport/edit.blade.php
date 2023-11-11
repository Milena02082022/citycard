@extends('templates.base')

@section('content')
<section class="section-1">
	<x-container>
		<button class="btn btn-light "><a href="{{route('transports.index')}}" class="nav-link">Назад</a></button>
		<h3 class="title">Редагувати вид транспорту</h3>
		<form method="POST" action="{{ route('transports.update', $oldTransport->transport_id) }}">
			@csrf
			@method('PUT')
			<div class="form-group pb-2">
				<label for="name">Назва транспорту:</label>
				<input type="text" name="old_transport_name" value="{{ $oldTransport->transport_name}}" class="form-control" readonly>
			</div>
			<div class="form-group pb-2">
				<label for="name">Назва зміненого транспорту:</label>
				<input type="text" name="new_transport_name" value="{{ $newTransportName}}" class="form-control">
			</div>
			<button type="submit" class="btn btn-primary">Оновити</button>
		</form>
	</x-container>
</section>
@endsection