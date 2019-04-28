@extends('layouts_backend.app')

@section('content')
    <h1>Edit Data How It Work - New</h1>
    {!! Form::open(['action' => ['HIWNewController@update',$hiwnew->hiw_new_id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
            {{Form::label('hiw_new_title', 'Title')}}
            {{Form::text('hiw_new_title', $hiwnew->hiw_new_title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('hiw_new_description', 'Description')}}
            {{Form::textarea('hiw_new_description', $hiwnew->hiw_new_description, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Description'])}}
        </div>
        <div class="form-group">
            {{Form::file('hiw_new_image_mobile')}}
        </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection