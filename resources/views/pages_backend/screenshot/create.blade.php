@extends('layouts_backend.app')

@section('content')
    <h1>Create data Mobile ScreenShot</h1>
    {!! Form::open(['action' => 'ScreenShotController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::file('screenshot_image_mobile')}}
        </div>
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection