@extends('layouts_backend.app') 
@section('content')
<h1>Edit data Terms and Condition</h1>
{!! Form::open(['action' => ['TermsController@update',$term->id], 'method' => 'POST', 'enctype' => 'multipart/form-data'])
!!}
    <div class="form-group">
            {{Form::label('description', 'Description Terms and Condition')}}
            {{Form::textarea('description', $term->description, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Description'])}}
        </div>
{{Form::hidden('_method','PUT')}} {{Form::submit('Submit', ['class'=>'btn btn-primary'])}} {!! Form::close() !!}
@endsection