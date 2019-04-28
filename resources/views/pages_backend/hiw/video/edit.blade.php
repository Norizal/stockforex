@extends('layouts_backend.app')

@section('content')
    <h1>Edit Data How It Work - Video</h1>
    {!! Form::open(['action' => ['HIWVideoController@update',$hiwvideo->hiw_video_id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
            {{Form::label('hiw_video_title', 'Title')}}
            {{Form::text('hiw_video_title', $hiwvideo->hiw_video_title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('hiw_video_description', 'Description')}}
            {{Form::textarea('hiw_video_description', $hiwvideo->hiw_video_description, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Description'])}}
        </div>
        <div class="form-group">
            {{Form::file('hiw_video_image_mobile')}}
        </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection