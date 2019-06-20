<head>
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
          integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
</head>

{!! Form::open(['action' => ['ProjectsController@update', $project->id], 'method' => 'POST', 'enctype' => 'multipart/form-data'], ['class' => 'form-control']) !!}
    <div class="form-group col-10">
        {{Form::label('title', 'title')}}
        {{Form::text('title', $project->title, ['class' => 'form-control'])}}
    </div>
    <div class="form-group col-10">
        {{Form::label('details', 'details')}}
        {{Form::textarea('details', $project->details, ['class' => 'form-control'])}}
    </div>
    <div class="form-group col-10">
        {{Form::file('image1', ['class'=> 'form-control'])}}
        {{Form::file('image2', ['class'=> 'form-control'])}}
        {{Form::file('image3', ['class'=> 'form-control'])}}
    </div>
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {{Form::hidden('_method', 'PUT')}}
{!! Form::close() !!}    
