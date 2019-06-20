<head>
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
          integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
</head>
@foreach ($projects as $project)
    <div class="well ">
        <h3><a href="/projects/{{ $project-> id }}">{{ $project->title }}</a></h3>
        <p>Created at {{$project->created_at}}</p>
        <a href="/projects/{{$project->id}}/edit" class="btn btn-primary">Edit</a>
        {!! Form::open(['action' => ['ProjectsController@destroy', $project->id], 'method' => 'POST'])!!}
        {{ Form::hidden('_method', 'DELETE')}}
        {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
        {!! Form::close() !!}
    </div>  
@endforeach

<a href="/projects/create" class="btn btn-success">Create a New Project</a>