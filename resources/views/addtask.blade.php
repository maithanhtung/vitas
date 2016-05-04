            
<!DOCTYPE html>
<html>
<head>
      <title>Vitas</title>
</head>
<body>
<button><a href="{{ url('/viewtask/'.$title_id)}}">Back</a></button>
      <br>
            <h1><center>ADD TASK</center></h1>
            {!! Form::open(array('route' => array('postTask', $title_id))) !!}
            <table>
            <tr>
                  <th></th>
                  <th></th>
                  <th></th>
            </tr>
            <tr>
                  <td>Task description:</td>
                  <td>{!! Form::input('string', 'desc') !!}</td>
                  <td> @if ($errors->has('desc'))<strong>{{ $errors->first('desc') }}</strong> @endif</td>
            </tr>
            <tr>
                  <td>Task start date:</td>
                  <td>{!! Form::input('date', 'startdate') !!}</td>
                  <td> @if ($errors->has('startdate'))<strong>{{ $errors->first('startdate') }}</strong> @endif</td>
            </tr>
            <tr>
                  <td>Task start time:</td>
                  <td>{!! Form::input('time', 'starttime') !!}</td>
                  <td>@if ($errors->has('starttime'))<strong>{{ $errors->first('starttime') }}</strong> @endif</td>
            </tr>
            <tr>
                  <td> Task end time:</td>
                  <td>{!! Form::input('time', 'endtime') !!}</td>
                  <td> @if ($errors->has('endtime'))<strong>{{ $errors->first('endtime') }}</strong> @endif</td>
            </tr>
            </table>
            <br>
            <center>{!! Form::submit('Submit') !!}</center>
            {!! Form::close() !!}
      
            @if(!empty(Session::get('task')))
            Task has been added sucesfully! 
            @endif

           
           
            
           
</body>
<style type="text/css">
      table{
            margin: auto;
      }
</style>

</html>
         
            