@extends('layouts_backend.app')

@section('content')
    <h1>Create data link URL</h1>
    {!! Form::open(['action' => 'MVLinkController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('mv_link_url_ios', 'Link URL download app in ios')}}
            {{Form::text('mv_link_url_ios', '', ['class' => 'form-control', 'placeholder' => 'Link URL ios'])}}
        </div>
        <div class="form-group">
            {{Form::label('mv_link_url_android', 'Link URL download app in android')}}
            {{Form::text('mv_link_url_android', '', ['class' => 'form-control', 'placeholder' => 'Link URL android'])}}
        </div>
        <div class="form-group">
                {{Form::label('mv_link_url_youtube', 'Link URL video youtube')}}
                {{Form::text('mv_link_url_youtube', '', ['class' => 'form-control', 'placeholder' => 'Link URL android'])}}
            </div>
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection