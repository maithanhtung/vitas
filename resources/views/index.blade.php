<!DOCTYPE html>
<html>
<head>
	<title>Vitas</title>
</head>
<body>		
<h1><center>ALL TITLES</center></h1>
<hr>

	@if( count($titles) > 0 )
	@foreach ($titles as $title)
	<center><button><a href="{{url('/viewtask/'.$title->id)}}">{{$title->name}}</a></button></center>
	<hr>

	@endforeach

	@else
	<h1>You did not have any title</h1>
	@endif
    <br>
	<button><a href="{{ url('/addtitle')}}">ADD</a></button>
	
</body>
</html>