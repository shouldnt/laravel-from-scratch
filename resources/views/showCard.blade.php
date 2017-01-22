@extends('layout.layout')

@section('title')
	Card
@stop

@section('content')
	<h1>Card Detail</h1>
	
	@if(count($card->notes) > 0)
		<ul>
			@foreach($card->notes as $note)
				<li class="grid">
					<p class="cell">{{$note->body}}</p>
					<form class="cell is-1" action="/notes/{{$note->id}}" method="post">
						<button >edit</button>
					</form>
					<form class="cell is-1" action="/notes/{{$note->id}}" method="post">
						<button >X</button>
					</form>
				</li>
			@endforeach
		</ul>
	@else
		<h3>You haven't created any note yet!</h3>
	@endif

	<form action="{{$card->id}}/note" method="post">
		<label for="">body: </label>
		<br>
		<textarea name="body" id="" cols="60" rows="5"></textarea>
		<br>
		<button type="submit">Add note</button>
	</form>

	
@stop