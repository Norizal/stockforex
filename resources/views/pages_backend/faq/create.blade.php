@extends('layouts_backend.app')

@section('content')
    <h1>Create data Faqs</h1>
    {!! Form::open(['action' => 'FaqController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('faqs_title', 'Title')}}
            {{Form::text('faqs_title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
                {{Form::label('faqs_description', 'Description')}}
                {{Form::textarea('faqs_description', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Description'])}}
            </div>
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection