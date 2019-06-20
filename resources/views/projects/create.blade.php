<head>
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
          integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
</head>
{{ Form::open(['action' => 'ProjectsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data'], ['class'=>'form-control']) }}
    <div class="form-group col-10">
        {{Form::label('title', 'title')}}
        {{Form::text('title', '', ['class'=>'form-control'])}}
    </div>
    <div class="form-group col-10">
        {{Form::label('details', 'details')}}
        {{Form::textarea('details', '', ['class'=>'form-control'])}}
    </div>
    <div class="form-group col-10">
        {{Form::file('image1', ['class'=>'form-control col-3'])}}
        {{Form::file('image2', ['class'=>'form-control col-3'])}}
        {{Form::file('image3', ['class'=>'form-control col-3'])}}
    </div>
        {{Form::submit('Submit', ['class'=>'form-control btn btn-primary'])}}
{{ Form::close() }}