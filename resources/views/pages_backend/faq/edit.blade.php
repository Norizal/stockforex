@extends('layouts_backend.app') 
@section('content')
<h1>Edit data Faqs</h1>
{!! Form::open(['action' => ['FaqController@update',$faq->faqs_id], 'method' => 'POST', 'enctype' => 'multipart/form-data'])
!!}
<div class="form-group">
        {{Form::label('faqs_title', 'Title')}}
        {{Form::text('faqs_title', $faq->faqs_title, ['class' => 'form-control', 'placeholder' => 'Titlw'])}}
    </div>
    <div class="form-group">
            {{Form::label('faqs_description', 'Description')}}
            {{Form::textarea('faqs_description', $faq->faqs_description, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Description'])}}
        </div>
{{Form::hidden('_method','PUT')}} {{Form::submit('Submit', ['class'=>'btn btn-primary'])}} {!! Form::close() !!}
@endsection