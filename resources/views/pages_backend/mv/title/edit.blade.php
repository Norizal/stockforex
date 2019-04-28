@extends('layouts_backend.app') 
@section('content')
<h1>Edit data Title and Description</h1>
{!! Form::open(['action' => ['MVTDController@update',$mvtd->mv_td_id], 'method' => 'POST', 'enctype' => 'multipart/form-data'])
!!}
<div class="form-group">
    {{Form::label('mv_td_title', 'Title')}} {{Form::text('mv_td_title', $mvtd->mv_td_title, ['class' => 'form-control', 'placeholder'
    => 'Title'])}}
</div>
<div class="form-group">
    {{Form::label('mv_td_head_title', 'Sub Title')}} {{Form::text('mv_td_head_title', $mvtd->mv_td_head_title, ['class' => 'form-control',
    'placeholder' => 'Sub Title'])}}
</div>
<div class="form-group">
    {{Form::label('mv_td_description', 'Description')}} {{Form::textarea('mv_td_description', $mvtd->mv_td_description, ['class'
    => 'form-control', 'placeholder' => 'Description'])}}
</div>
{{Form::hidden('_method','PUT')}} {{Form::submit('Submit', ['class'=>'btn btn-primary'])}} {!! Form::close() !!}
@endsection