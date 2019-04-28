@extends('layouts_backend.app') 
@section('content')
<h1>Edit data About Us</h1>
{!! Form::open(['action' => ['AboutUsController@update',$about->about_us_id], 'method' => 'POST', 'enctype' => 'multipart/form-data'])
!!}
<div class="form-group">
        {{Form::label('about_us_mission', 'Mission')}}
        {{Form::text('about_us_mission', $about->about_us_mission, ['class' => 'form-control', 'placeholder' => 'Mission'])}}
    </div>
    <div class="form-group">
        {{Form::label('about_us_vision', 'Vision')}}
        {{Form::text('about_us_vision', $about->about_us_vision, ['class' => 'form-control', 'placeholder' => 'Vision'])}}
    </div>
    <div class="form-group">
            {{Form::label('about_us_who', 'Who We Are')}}
            {{Form::textarea('about_us_who', $about->about_us_who, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Who We Are'])}}
        </div>
{{Form::hidden('_method','PUT')}} {{Form::submit('Submit', ['class'=>'btn btn-primary'])}} {!! Form::close() !!}
@endsection