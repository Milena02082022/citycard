@extends('templates.base')

@section('content')
<section class="section-1">
	<x-container>
		<h3 class="title">Створити новий транспорт</h3>
        <form method="POST" action="{{ route('transports.store') }}">
            @csrf
            <div class="form-group pb-2">
                <label for="name">Назва транспорту:</label>
                <input type="text" name="name" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Зберегти</button>
        </form>
	</x-container>
</section>
@endsection

