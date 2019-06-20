@foreach ($projects as $project)
    <div class="well">
        <h3><a href="/projects/{{ $project-> id }}">{{ $project->title }}</a></h3>
        <p>Created at {{$project->created_at}}</p>
        <a href="/projects/{{$project->id}}/edit">Edit</a>
        {!! Form::open(['action' => ['ProjectsController@destroy', $project->id], 'method' => 'POST'])!!}
        {{ Form::hidden('_method', 'DELETE')}}
        {{ Form::submit('Delete') }}
        {!! Form::close() !!}
    </div>  
@endforeach