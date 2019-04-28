@extends('layouts_backend.app') 
@section('content')
<h1>Edit data Contact</h1>
{!! Form::open(['action' => ['ContactController@update',$contact->contact_id], 'method' => 'POST', 'enctype' => 'multipart/form-data'])
!!}
<div class="form-group">
        {{Form::label('contact_address', 'Address')}} 
        {{Form::textarea('contact_address', $contact->contact_address, ['id' => 'article-ckeditor', 'class' =>
        'form-control', 'placeholder' => 'Full Address'])}}
    </div>
    <div class="form-group">
        {{Form::label('contact_email', 'Email Address')}} 
        {{Form::text('contact_email', $contact->contact_email, ['class' => 'form-control', 'placeholder'
        => 'Email'])}}
    </div>
    <div class="form-group">
        {{Form::label('contact_phone', 'Phone Number')}} 
        {{Form::text('contact_phone', $contact->contact_phone, ['class' => 'form-control', 'placeholder'
        => 'Phone Number'])}}
    </div>
    <div class="form-group">
            {{Form::label('contact_instagram', 'Instagram')}} 
            {{Form::text('contact_instagram', $contact->contact_instagram, ['class' => 'form-control', 'placeholder'
            => 'Instagram'])}}
        </div>
        <div class="form-group">
                {{Form::label('contact_facebook', 'Facebook')}} 
                {{Form::text('contact_facebook', $contact->contact_facebook, ['class' => 'form-control', 'placeholder'
                => 'Facebook'])}}
            </div>
            <div class="form-group">
                    {{Form::label('contact_twitter', 'Twitter')}} 
                    {{Form::text('contact_twitter', $contact->contact_twitter, ['class' => 'form-control', 'placeholder'
                    => 'Twitter'])}}
                </div>
{{Form::hidden('_method','PUT')}} {{Form::submit('Submit', ['class'=>'btn btn-primary'])}} {!! Form::close() !!}
@endsection