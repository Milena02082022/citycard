@extends('templates.base')

@section('content')
<section class="section-1">
	<x-container>
		<div class="row">
			<div class="col-12 col-md-10">
				@if (session('success'))
					<div class="alert alert-success">
						{{ session('success') }}
					</div>
				@endif
				@if (session('error'))
					<div class="alert alert-danger">
						{{ session('error') }}
					</div>
				@endif
				<button class="btn btn-light"><a href="{{route('adminpanel')}}" class="nav-link">Назад</a></button>
				<h1 class="title pt-4">Транспорт Citycard</h1>
			  <table class="table table-striped">
				<thead>
					 <tr>
						  <th>№</th>
						  <th>Назва</th>
						  <th>Дії</th>
					 </tr>
				</thead>
				<tbody>
					 @foreach($transport as $transport)
						  <tr>
								<td>{{ $transport->transport_id }}</td>
								<td>{{ $transport->transport_name }}</td>
								<td>
									 <a href="{{route('transports.edit', $transport->transport_id)}}" class="btn btn-primary">Редагувати</a>
									 <form action="{{route('transports.delete', $transport->transport_id)}}" method="POST" style="display: inline;">
										  @csrf
										  @method('DELETE')
										  <button type="submit" class="btn btn-danger">Видалити</button>
									 </form>
								</td>
						  </tr>
					 @endforeach
				</tbody>
			</table>
			<a href="{{ route('transports.create') }}" class="btn btn-success">Створити новий транспорт</a>
			</div>
		</div>
	</x-container>
</section>
@endsection

