@extends('layouts_backend.app')

@section('content')
    <h1>Create data Terms and Condition</h1>
    {!! Form::open(['action' => 'TermsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
                {{Form::label('description', 'Description Terms and Condition')}}
                {{Form::textarea('description', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Description'])}}
            </div>
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection