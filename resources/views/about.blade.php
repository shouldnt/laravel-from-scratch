@extends('layout.layout')

@section('title')
	about page
@stop

@section('content')
	
	@if($peoples)
		<ul>
			@foreach($peoples as $people)
				
				<li>{{$people}}</li>

			@endforeach
		</ul>
	@endif
	
@stop