@extends('layouts_backend.app')

@section('content')
    <h1>Create Data How It Work - Analysis</h1>
    {!! Form::open(['action' => 'HIWAnalysisController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('hiw_web_title', 'Title')}}
            {{Form::text('hiw_web_title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('hiw_web_description', 'Description')}}
            {{Form::textarea('hiw_web_description', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Description'])}}
        </div>
        <div class="form-group">
            {{Form::file('hiw_web_image_mobile')}}
        </div>
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection