{!! Form::open(['action' => ['ProjectsController@update', $project->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
        {{Form::label('title', 'title')}}
        {{Form::text('title', $project->title)}}
        {{Form::label('details', 'details')}}
        {{Form::textarea('details', $project->details)}}
        {{Form::file('image1')}}
        {{Form::file('image2')}}
        {{Form::file('image3')}}
        {{Form::submit('Submit')}}
    </div>
    {{Form::hidden('_method', 'PUT')}}
{!! Form::close() !!}    
