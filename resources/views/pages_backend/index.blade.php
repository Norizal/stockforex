@extends('layouts_backend.app')

@section('content')

@if (Auth::guest())

        @include('auth.login')



@else
@include('home')

@endif
@endsection