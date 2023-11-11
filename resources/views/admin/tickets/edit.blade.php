@extends('templates.base')

@section('content')
<section class="section-1">
	<x-container>
		<button class="btn btn-light "><a href="{{route('tickets.index')}}" class="nav-link">Назад</a></button>
		<h3 class="title">Редагувати тип квитка</h3>
		<form method="POST" action="{{ route('tickets.update', $oldTicket->ticket_id) }}">
			@csrf
			@method('PUT')
			<div class="form-group pb-2">
					<label for="name">Назва квитка:</label>
					<input type="text" name="old_ticket_name" value="{{ $oldTicket->ticket_type}}" class="form-control" readonly>
			</div>
			<div class="form-group pb-2">
				<label for="name">Назва зміненого квитка:</label>
				<input type="text" name="new_ticket_name" value="{{ $newTicketName}}" class="form-control">
		</div>
			<button type="submit" class="btn btn-primary">Оновити</button>
		</form>
	</x-container>
</section>
@endsection