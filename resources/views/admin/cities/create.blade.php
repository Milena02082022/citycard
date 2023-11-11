@extends('templates.base')

@section('content')
<section class="section-1">
	<x-container>
		<h3 class="title">Створити нове місто</h3>
        <form method="POST" action="{{ route('cities.store') }}">
            @csrf
            <div class="form-group pb-2">
                <label for="name">Назва міста:</label>
                <input type="text" name="name" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Зберегти</button>
        </form>
	</x-container>
</section>
@endsection

