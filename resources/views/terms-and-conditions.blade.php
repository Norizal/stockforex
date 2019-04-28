@extends('layouts.app') 
@section('content') 


<section id="term" class="about waves pdd150">
    <div class="container" class="about waves pdd150">
        <!-- Start Section Title -->
        <div class="row">
            <div class="col-md-12">

                @foreach($terms as $term) {!! $term->description !!} @endforeach
            </div>
        </div>
    </div>
</section>
@endsection