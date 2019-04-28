@extends('layouts_backend.app') 
@section('content')
<h1>Edit data Icon</h1>
{!! Form::open(['action' => ['IconController@update',$icon->icon_id], 'method' => 'POST', 'enctype' => 'multipart/form-data'])
!!}
{{ Form::label('icon_head','Icon Header') }} 
     <div class="form-group">
            {{Form::file('icon_image')}}
        </div>

        {{ Form::label('icon_footer','Icon Footer') }} 
        <div class="form-group">
               {{Form::file('icon_image2')}}
           </div>
{{Form::hidden('_method','PUT')}} {{Form::submit('Submit', ['class'=>'btn btn-primary'])}} {!! Form::close() !!}
@endsection