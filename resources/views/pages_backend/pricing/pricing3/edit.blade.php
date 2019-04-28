@extends('layouts_backend.app') 
@section('content')
<h1>Edit data Pricing 3</h1>
{!! Form::open(['action' => ['Pricing3Controller@update',$pricing3->pricing3_id], 'method' => 'POST', 'enctype' => 'multipart/form-data'])
!!}
<div class="form-group">
        {{Form::label('pricing3_price', 'Price')}}
        {{Form::text('pricing3_price', $pricing3->pricing3_price, ['class' => 'form-control', 'placeholder' => 'Price'])}}
    </div>
    <div class="form-group">
            {{Form::label('pricing3_duration', 'Duration')}}
            {{Form::text('pricing3_duration', $pricing3->pricing3_duration, ['class' => 'form-control', 'placeholder' => 'Duration'])}}
        </div>
        <div class="form-group">
                {{Form::label('pricing3_promotion', 'Promotion')}}
                {{Form::text('pricing3_promotion', $pricing3->pricing3_promotion, ['class' => 'form-control', 'placeholder' => 'Promotion'])}}
            </div>
    <div class="form-group">
            {{Form::label('pricing3_description', 'Description')}}
            {{Form::textarea('pricing3_description', $pricing3->pricing3_description, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Description'])}}
        </div>
{{Form::hidden('_method','PUT')}} {{Form::submit('Submit', ['class'=>'btn btn-primary'])}} {!! Form::close() !!}
@endsection