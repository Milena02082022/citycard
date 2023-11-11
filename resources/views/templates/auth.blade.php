@extends('templates.base')

@section('content')
<section class="section-1">
	<x-container>
		<div class="row">
			<div class="col-12 col-md-6">
				@yield('auth.content')
			</div>
		</div>
	</x-container>
</section>
@endsection