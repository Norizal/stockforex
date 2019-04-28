@extends('layouts_backend.app') 
@section('content')
<h1>Edit data Mobile Mockup</h1>
{!! Form::open(['action' => ['MVMMController@update',$mvmm->mv_mm_id], 'method' => 'POST', 'enctype' => 'multipart/form-data'])
!!}
<div class="form-group">
    {{Form::file('mv_mm_image_mobile')}}
</div>
{{Form::hidden('_method','PUT')}} {{Form::submit('Submit', ['class'=>'btn btn-primary'])}} {!! Form::close() !!}
@endsection