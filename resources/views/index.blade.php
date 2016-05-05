<!DOCTYPE html>
<html>
<head>
	<title>Vitas</title>
</head>
<body>		
<h1><center>ALL TITLES</center></h1>
<hr>
	<center><table>
		<tr>
			<th></th>
			<th></th>
		</tr>
	@if( count($titles) > 0 )
	
	@foreach ($titles as $title)
		<tr>
			<th><button><a href="{{url('/viewtask/'.$title->id)}}">{{$title->name}}</a></button></th>
			{{ Form::open(['route' => ['Deltitle', $title->id], 'method' => 'delete']) }}
                        <td> <button type="submit">Delete</button></td>
                                    {{ Form::close() }}
		</tr>
	

	@endforeach

	@else
	<h1>You did not have any title</h1>
	@endif
	</table></center>
    <br>
	<button><a href="{{ url('/addtitle')}}">ADD</a></button>
	 @if(!empty(Session::get('title_name')))
	 		<center>Title <strong>{{ Session::get('title_name')}}</strong> has been deleted sucesfully!</center>
	 @endif
</body>
</html>