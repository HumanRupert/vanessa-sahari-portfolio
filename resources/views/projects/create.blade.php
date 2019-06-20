{{ Form::open(['action' => 'ProjectsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) }}
    <div class="form-group">
        {{Form::label('title', 'title')}}
        {{Form::text('title', '')}}
        {{Form::label('details', 'details')}}
        {{Form::textarea('details', '')}}
        {{Form::file('image1')}}
        {{Form::file('image2')}}
        {{Form::file('image3')}}
        {{Form::submit('Submit')}}
    </div>
{{ Form::close() }}