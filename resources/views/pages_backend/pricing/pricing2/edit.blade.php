@extends('layouts_backend.app') 
@section('content')
<h1>Edit data Pricing 2</h1>
{!! Form::open(['action' => ['Pricing2Controller@update',$pricing2->pricing2_id], 'method' => 'POST', 'enctype' => 'multipart/form-data'])
!!}
<div class="form-group">
        {{Form::label('pricing2_price', 'Price')}}
        {{Form::text('pricing2_price', $pricing2->pricing2_price, ['class' => 'form-control', 'placeholder' => 'Price'])}}
    </div>
    <div class="form-group">
            {{Form::label('pricing2_duration', 'Duration')}}
            {{Form::text('pricing2_duration', $pricing2->pricing2_duration, ['class' => 'form-control', 'placeholder' => 'Duration'])}}
        </div>
        <div class="form-group">
                {{Form::label('pricing2_promotion', 'Promotion')}}
                {{Form::text('pricing2_promotion', $pricing2->pricing2_promotion, ['class' => 'form-control', 'placeholder' => 'Promotion'])}}
            </div>
    <div class="form-group">
            {{Form::label('pricing2_description', 'Description')}}
            {{Form::textarea('pricing2_description', $pricing2->pricing2_description, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Description'])}}
        </div>
{{Form::hidden('_method','PUT')}} {{Form::submit('Submit', ['class'=>'btn btn-primary'])}} {!! Form::close() !!}
@endsection