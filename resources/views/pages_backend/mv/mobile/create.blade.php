@extends('layouts_backend.app')

@section('content')
    <h1>Create data Mobile Mockup</h1>
    {!! Form::open(['action' => 'MVMMController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::file('mv_mm_image_mobile')}}
        </div>
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection