@extends('layouts_backend.app')

@section('content')
    <h1>Edit Data How It Work - Analysis</h1>
    {!! Form::open(['action' => ['HIWAnalysisController@update',$hiwanalysis->hiw_analysis_id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
            {{Form::label('hiw_analysis_title', 'Title')}}
            {{Form::text('hiw_analysis_title', $hiwanalysis->hiw_analysis_title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('hiw_analysis_description', 'Description')}}
            {{Form::textarea('hiw_analysis_description', $hiwanalysis->hiw_analysis_description, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Description'])}}
        </div>
        <div class="form-group">
            {{Form::file('hiw_analysis_image_mobile')}}
        </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection