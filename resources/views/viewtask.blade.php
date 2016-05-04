<!DOCTYPE html>
<html>
<head>
      <title>Vitas</title>
</head>
<body>            
<button><a href="{{ url('/') }}">Back</a></button>
<h1><center>ALL TASKS OF TITLE : {{ $title_name }}</center></h1>


      @if( count($tasks) > 0 )
      <table>
      <tr>
            <th>Description</th>
            <th>Start date</th>
            <th>Start time</th> 
            <th>End time</th>
      </tr>

      @foreach ($tasks as $task)
      <tr>
      <td><center>{{ $task->desc }}</center></td>
      <td><center>{{ $task->startdate }}</center></td>
      <td><center>{{ $task->starttime }}</center></td>
      <td><center>{{ $task->endtime }}</center></td>
      </tr>
      @endforeach
      </table>

      @else
      <center><h3>You don't have any task</h3></center>
      @endif
    <br>
      <button><a href="{{ url('/addtask/'.$title_id )}}">ADD</a></button>
      
</body>
<style type="text/css">
th{
     border-bottom: 1px solid #ddd;
     padding: 15px;
}
table{
      width: 80%;
      margin: auto;
}
</style>
</html>