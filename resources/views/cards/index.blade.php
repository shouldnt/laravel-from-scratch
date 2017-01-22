@extends('layout.layout')
@section('content')
	@if($cards)
	<ul>		
		@foreach ($cards as $card)
			<li><a href="/{{$card->id}}">{{ $card->title }}</a></li>
		@endforeach
	</ul>
	@endif
@stop