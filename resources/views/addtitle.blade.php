<!DOCTYPE html>
<html>
<head>
      <title>Vitas</title>
</head>
<body>
      <button><a href="{{ url('/') }}">Back</a></button>
      <br>
      <h1><center>ADD TITLE</center></h1>
            {!! Form::open(array('route' => 'postTitle')) !!}
             <center>Title name:{!! Form::input('string', 'name') !!}</center>
         
      <br>
            <center>{!! Form::submit('Submit') !!}</center>
            {!! Form::close() !!}
      <br>
            @if ($errors->has('name'))<center><strong>{{ $errors->first('name') }}</strong></center> @endif

            @if(!empty(Session::get('title')))
            <center>Title <strong>{{ Session::get('title')}}</strong> has been added sucesfully!</center>
            @endif
</body>
</html>            

            