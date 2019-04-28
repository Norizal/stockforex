@extends('layouts_backend.app') 
@section('content')
<h1>Edit data Pricing 2</h1>
{!! Form::open(['action' => ['Pricing1Controller@update',$pricing1->pricing1_id], 'method' => 'POST', 'enctype' => 'multipart/form-data'])
!!}
<div class="form-group">
        {{Form::label('pricing1_price', 'Price')}}
        {{Form::text('pricing1_price', $pricing1->pricing1_price, ['class' => 'form-control', 'placeholder' => 'Price'])}}
    </div>
    <div class="form-group">
            {{Form::label('pricing1_duration', 'Duration')}}
            {{Form::text('pricing1_duration', $pricing1->pricing1_duration, ['class' => 'form-control', 'placeholder' => 'Duration'])}}
        </div>
        <div class="form-group">
                {{Form::label('pricing1_promotion', 'Promotion')}}
                {{Form::text('pricing1_promotion', $pricing1->pricing1_promotion, ['class' => 'form-control', 'placeholder' => 'Promotion'])}}
            </div>
    <div class="form-group">
            {{Form::label('pricing1_description', 'Description')}}
            {{Form::textarea('pricing1_description', $pricing1->pricing1_description, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Description'])}}
        </div>
{{Form::hidden('_method','PUT')}} {{Form::submit('Submit', ['class'=>'btn btn-primary'])}} {!! Form::close() !!}
@endsection