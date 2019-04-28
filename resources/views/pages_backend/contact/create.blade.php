@extends('layouts_backend.app') 
@section('content')
<h1>Create data Contact</h1>
{!! Form::open(['action' => 'ContactController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
<div class="form-group">
    {{ Form::label('contact_address','Address') }}
    {{Form::textarea('contact_address', '', ['id' => 'article-ckeditor', 'class' =>
    'form-control', 'placeholder' => 'Full Address'])}}
</div>
<div class="form-group">
    {{Form::label('contact_email', 'Email Address')}} 
    {{Form::text('contact_email', '', ['class' => 'form-control', 'placeholder'
    => 'Email'])}}
</div>
<div class="form-group">
    {{Form::label('contact_phone', 'Phone Number')}} 
    {{Form::text('contact_phone', '', ['class' => 'form-control', 'placeholder'
    => 'Phone Number'])}}
</div>
<div class="form-group">
        {{Form::label('contact_instagram', 'Instagram')}} 
        {{Form::text('contact_instagram', '', ['class' => 'form-control', 'placeholder'
        => 'Instagram'])}}
    </div>
    <div class="form-group">
            {{Form::label('contact_facebook', 'Facebook')}} 
            {{Form::text('contact_facebook', '', ['class' => 'form-control', 'placeholder'
            => 'Facebook'])}}
        </div>
        <div class="form-group">
                {{Form::label('contact_twitter', 'Twitter')}} 
                {{Form::text('contact_twitter', '', ['class' => 'form-control', 'placeholder'
                => 'Twitter'])}}
            </div>
{{Form::submit('Submit', ['class'=>'btn btn-primary'])}} {!! Form::close() !!}
@endsection