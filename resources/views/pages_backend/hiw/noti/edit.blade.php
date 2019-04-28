@extends('layouts_backend.app')

@section('content')
    <h1>Edit Data How It Work - Notification</h1>
    {!! Form::open(['action' => ['HIWNotiController@update',$hiwnoti->hiw_noti_id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
            {{Form::label('hiw_noti_title', 'Title')}}
            {{Form::text('hiw_noti_title', $hiwnoti->hiw_noti_title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('hiw_noti_description', 'Description')}}
            {{Form::textarea('hiw_noti_description', $hiwnoti->hiw_noti_description, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Description'])}}
        </div>
        <div class="form-group">
            {{Form::file('hiw_noti_image_mobile')}}
        </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection