@extends('layouts_backend.app') 
@section('content')
<h1>Edit data Mobile ScreenShot</h1>
{!! Form::open(['action' => ['ScreenShotController@update',$screenshot->screenshot_id], 'method' => 'POST', 'enctype' => 'multipart/form-data'])
!!}
<div class="form-group">
    {{Form::file('screenshot_image_mobile')}}
</div>
{{Form::hidden('_method','PUT')}} {{Form::submit('Submit', ['class'=>'btn btn-primary'])}} {!! Form::close() !!}
@endsection