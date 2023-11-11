<button {{ $attributes->class([
	'btn btn-light',
])->merge([
	'type' => 'button',
]) }} >
	{{$slot}}
</button>